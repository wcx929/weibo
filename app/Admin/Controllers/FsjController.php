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
    protected $title = 'App\Models\Fsj';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Fsj);
        $grid->id('ID');
        $grid->content('内容')->display(function ($value) {
            return strip_tags($value);
        });
        $grid->copy_num('复制次数');
        $grid->column('online', __('Online'));
        /*$grid->column('created_at', __('Created at'));*/
        $grid->updated_at('创建时间');

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

        $form->quill('content', '内容')->rules('required');
        $form->number('copy_num', __('Copy num'));
        $form->number('online', __('Online'));

        return $form;
    }
}
