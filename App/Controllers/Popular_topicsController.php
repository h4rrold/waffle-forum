<?php
require_once "App/Topic.php";

class Popular_topicsController extends Controller
{
    public function out($topics, $fir, $sec, $page)
    {
        echo output('popular_topics', ['topics' => $topics, 'first' => $fir, 'second' => $sec, 'page' => $page]);
    }

    public function getPopularTopics($page)
    {
        if($page > 4) header('Location:/waffle-forum/popular-topics/4');
        $first = ($page - 1) * 5 + 1;
        $second = $first + 4;
        $obj = new Topic();
        $topics = $obj->get5Topics($first - 1, $second);
        $this->out($topics, $first, $second, $page);

    }

}