<?php

namespace App\Admin\Controllers;

use App\Models\Supports;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SupportsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '捐助';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Supports);

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('money', __('Money'));
        $grid->column('desc', __('Desc'));
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
        $show = new Show(Supports::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('money', __('Money'));
        $show->field('desc', __('Desc'));
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
        $form = new Form(new Supports);

        $form->text('name', __('Name'));
        $form->decimal('money', __('Money'));
        $form->text('desc', __('Desc'));
        $form->number('online', __('Online'))->default(1);

        return $form;
    }
}
