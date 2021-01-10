<?php

namespace App\Admin\Controllers;

use App\Models\Facepic;
use App\Models\Pictype;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PicController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '表情包';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Facepic);

        $grid->column('id', __('Id'));
        $grid->column('type_name', '分类名称');
        $grid->column('pic_url', '图片')->image();
        $grid->column('online', '是否在线');
        $grid->column('created_at', '创建时间');

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
        $show = new Show(Facepic::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('type_name', __('Type name'));
        $show->field('pic_url', __('Pic url'));
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
        $form = new Form(new Facepic);

        $data = Pictype::query()->pluck('type_name', 'id');
        $form->select('type_name', '分类')->options($data);
        // 创建一个选择图片的框
        $form->image('pic_url', '图片');
        $states = [
            'on'  => ['value' => 1, 'text' => '上线', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => '下线', 'color' => 'danger'],
        ];
        $form->switch('online', '是否上线')->states($states);

        return $form;
    }

    public function add(Content $content)
  {
    //添加请求
    if (request()->isMethod('post')) {

      //验证
      $data = request()->post();

      $validate = Validator::make($data, [
        'title' => 'required|max:125',
        'content' => 'required'
      ]);
      //处理
      if ($validate->fails()) {
        $content->withWarning('提醒', $validate);
      } else {
        Mail::create($data);
        $content->withSuccess('提醒', '操作成功');
        return redirect('/admin/mails');
      }
    }


    $content->header('群发邮件');

    $form = new \Encore\Admin\Widgets\Form();
    $form->action('send');
    $form->text('title','标题')->rules('required');
    $form->textarea('content','内容')->rules('required');

    $content->body($form);
    $js = <<<SCRIPT

SCRIPT;
    Admin::script($js);
    return $content;
  }
}
