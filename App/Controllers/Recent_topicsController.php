<?php
require_once "App/Topic.php";

class Recent_topicsController extends Controller
{
    public function out($params = [])
    {
        echo $this->buildPage(output('recent', $params));
    }

    public function getRecentTopics($page)
    {
        $amount_of_topics = 3;

        if($page > ceil(20/$amount_of_topics)) header('Location:/waffle-forum/community/recent-topics/'.ceil(20/$amount_of_topics));
        if($page < 1) header('Location:/waffle-forum/community/recent-topics/1');
        $first = ($page - 1) * $amount_of_topics + 1;
        $second = $first + $amount_of_topics - 1;
        if($second > 20) $second = 20;
        $obj = new Topic();
        $topics = $obj->getRecentTopics($first - 1, $amount_of_topics);
        $this->out(['topics' => $topics, 'first' => $first, 'second' => $second, 'page' => $page]);

    }
}