<?php

namespace App\Admin\Controllers;

use App\Models\Fsj;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class FsjController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '浮生记';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Fsj);
        $grid->id('ID');
        $grid->content('内容')->style('max-width:500px;word-break:break-all;')->display(function ($value) {
            return strip_tags($value);
        });
        $grid->copy_num('复制次数');
        $grid->column('online', __('Online'));
        /*$grid->column('created_at', __('Created at'));*/
        $grid->updated_at('创建时间')->sortable();

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
        $show = new Show(Fsj::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('content', __('Content'));
        $show->field('copy_num', __('Copy num'));
        $show->field('online', __('Online'));
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
        $form = new Form(new Fsj);

        //$form->quill('content', '内容')->rules('required');
        $form->textarea('content', '内容')->rows(10)->rules('required');
        // 创建一个选择图片的框
        $form->image('image', '图片');
        $form->number('copy_num', '复制次数')->min(0);
        $states = [
            'on'  => ['value' => 1, 'text' => '上线', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => '下线', 'color' => 'danger'],
        ];
        $form->switch('online', '是否上线')->states($states);
        $form->select('type','分类')->options([1 => '浮生记', 2 => '舔狗日记']);

        return $form;
    }
}
