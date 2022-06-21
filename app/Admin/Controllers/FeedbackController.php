<?php

namespace App\Admin\Controllers;

use App\Models\Feedback;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class FeedbackController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Feedback';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Feedback());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('subject', __('Subject'));
        $grid->column('phone_number', __('Phone number'));
        $grid->column('email', __('Email'));
        $grid->column('message', __('Message'));
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
        $show = new Show(Feedback::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('subject', __('Subject'));
        $show->field('phone_number', __('Phone number'));
        $show->field('email', __('Email'));
        $show->field('message', __('Message'));
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
        $form = new Form(new Feedback());

        $form->text('name', __('Name'));
        $form->text('subject', __('Subject'));
        $form->text('phone_number', __('Phone number'));
        $form->email('email', __('Email'));
        $form->text('message', __('Message'));

        return $form;
    }
}
