<?php
require_once "App/Topic.php";

class TopicsController extends Controller
{
    public function out($params = [])
    {
        echo $this->buildPage(output('topics', $params));
    }

    public function getTopics($id_category, $category)
    {
        $obj = new Topic();
        $topics = $obj->getFetchTopics($id_category);
        $this->out( ['topics' => $topics, 'directory_id' => $id_category, 'directory_name'=> $category]);
    }
}