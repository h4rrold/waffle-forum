<?php
require_once "App/Topic.php";


class Seek_topicsController extends Controller
{
    public function out($params = []) {
        echo $this->buildPage(output('seek_topics', $params));
    }

    public function getSeekResult($seek_string)
    {
        $obj = new Topic();
        $topics = $obj->getTopicsBySeek($seek_string);
        $this->out( ['topics' => $topics]);
    }
}