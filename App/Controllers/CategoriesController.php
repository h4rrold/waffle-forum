<?php
require_once "App/Category.php";
class CategoriesController extends  Controller
{
    public function out($categories)
    {
        echo output('categories', ['categories' => $categories]);
    }

    public function getCategories()
    {
        $obj = new Category();
        $categories = $obj->getFetchCategories();
        $this->out($categories);
    }

}