<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\project;

class projectController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'project';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new project());

        $grid->column('id', __('Id'));
        $grid->column('Nombre', __('Nombre'));
        $grid->column('Descripcion', __('Descripcion'));
        $grid->column('Num', __('Num'));
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
        $show = new Show(project::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('Nombre', __('Nombre'));
        $show->field('Descripcion', __('Descripcion'));
        $show->field('Num', __('Num'));
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
        $form = new Form(new project());

        $form->text('Nombre', __('Nombre'));
        $form->text('Descripcion', __('Descripcion'));
        $form->number('Num', __('Num'));

        return $form;
    }
}
