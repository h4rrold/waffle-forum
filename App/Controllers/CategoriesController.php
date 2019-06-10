<?php
require_once "App/Category.php";
require_once "App/Topic.php";
class CategoriesController extends  Controller
{
    public function out($params = [])
    {
        echo $this->buildPage(output('categories', $params));
    }

    public function getCategories()
    {
        $obj = new Category();
        $categories = $obj->getFetchCategories();
        $this->out(['categories' => $categories]);
    }

    public function getTopics($id_category, $category)
    {
        $obj = new Topic();
        $topics = $obj->getFetchTopics($id_category);
        $this->out(['topics' => $topics, 'id_category' => $id_category, 'category'=> $category]);
    }

}