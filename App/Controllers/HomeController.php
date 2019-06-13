<?php
require_once "App/Topic.php";
require_once "App/Category.php";
class HomeController extends Controller
{
    public function out($params = [])
    {
        echo $this->buildPage(output('home', $params));
    }

    public function getHome()
    {   $obj = new Topic();
        $topics = $obj->getTopTopics(0, 3);
        $obj = new Category();
        $categories = $obj->getFetchCategories();
        $imgs = ['fas fa-users','fas fa-cogs','fas fa-handshake','fas fa-project-diagram','fas fa-exclamation-triangle','fas fa-lightbulb'];
        $this->out(['categories' => $categories, 'topics' => $topics, 'imgs' => $imgs]);
    }
}