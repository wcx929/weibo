<?php

namespace App\Admin\Controllers;

use App\Models\Facepic;
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
    protected $title = 'App\Models\Facepic';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Facepic);

        $grid->column('id', __('Id'));
        $grid->column('type_name', __('Type name'));
        $grid->column('pic_url', __('Pic url'))->image();
        $grid->column('online', __('Online'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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

        $form->text('type_name', __('Type name'));
        $form->text('pic_url', __('Pic url'));
        $form->number('online', __('Online'));

        return $form;
    }
}
