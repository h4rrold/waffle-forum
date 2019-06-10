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
        $amount_of_topics = 3;

        if($page > ceil(20/$amount_of_topics)) header('Location:/waffle-forum/community/popular-topics/'.ceil(20/$amount_of_topics));
        if($page < 1) header('Location:/waffle-forum/community/popular-topics/1');
        $first = ($page - 1) * $amount_of_topics + 1;
        $second = $first + $amount_of_topics - 1;
        if($second > 20) $second = 20;
        $obj = new Topic();
        $topics = $obj->getTopTopics($first - 1, $amount_of_topics);
        $this->out(['topics' => $topics, 'first' => $first, 'second' => $second, 'page' => $page]);

    }

}