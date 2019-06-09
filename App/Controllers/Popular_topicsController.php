<?php
require_once "App/Topic.php";

class Popular_topicsController extends Controller
{
    public function out($params = [])
    {
        echo output('popular_topics', $params);
    }

    public function getPopularTopics($page)
    {
        if($page > 4) header('Location:/waffle-forum/popular-topics/4');
        $first = ($page - 1) * 5 + 1;
        $second = $first + 4;
        $obj = new Topic();
        $topics = $obj->get5Topics($first - 1, $second);
        $this->out(['topics' => $topics, 'first' => $first, 'second' => $second, 'page' => $page]);

    }

}