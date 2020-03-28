<?php

namespace App\Admin\Controllers;

use App\Models\Sentence;
use App\Models\SentenceType;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Admin\Actions\ExcelAdd;
use App\Admin\Extensions\PostsExporter;

class SentenceController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '句子';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Sentence);
        $grid->exporter(new PostsExporter());
        // 创建一个列名为 ID 的列，内容是用户的 id 字段
        $grid->id('ID');

        // 创建一个列名为 用户名 的列，内容是用户的 name 字段。下面的 email() 和 created_at() 同理
        $grid->content('内容')->style('max-width:300px;word-break:break-all;')->help('这一列是句子')->copyable()->qrcode();

        $grid->copy_num('复制次数')->sortable();

        $grid->online('是否上线')->display(function ($value) {
            return $value ? '是' : '否';
        })->label([
            1 => 'success',
            0 => 'warning',
        ]);

        $grid->type('类型')->display(function ($value) {
            switch ($value) {
                case '1':
                    return '嘴甜';
                    break;
                case '2':
                    return '嘴臭';
                    break;
                case '3':
                    return '朋友圈';
                    break;
                case '4':
                    return '毒鸡汤';
                    break;
                default:
                    return '未知';
                    break;
            }
        })->setAttributes(['style' => 'color:black;'])->label([   
              1 => 'default',
              2 => 'warning',
              3 => 'success',
              4 => 'info',

        ]);;
        $grid->tools(function (Grid\Tools $tools) {
              // excle 导入
              $tools->append(new ExcelAdd());
        });

        $grid->created_at('创建时间');
        $grid->filter(function($filter){
            // 去掉默认的id过滤器
            //$filter->disableIdFilter();
            // 在这里添加字段过滤器
        $filter->like('content', '内容');

        });

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Sentence::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('content', __('Content'));
        $show->field('emo_content', __('Emo content'));
        $show->field('copy_num', __('Copy num'));
        $show->field('online', __('Online'));
        $show->field('type', __('Type'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Sentence);

        $form->textarea('content', '内容')->rules('required');
        /*$form->number('copy_num', __('Copy num'));*/
        $form->radio('online', '上架')->options(['1' => '是', '0'=> '否'])->default('0');
        $directors = [
            1 => 'John',
            2 => 'Smith',
            3 => 'Kate' ,
        ];
        $data = SentenceType::query()->pluck('type_name', 'id');
        $form->select('type', '分类')->options($data);
        return $form;
    }
}
