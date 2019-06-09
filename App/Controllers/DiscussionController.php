<?php
require_once "App/Topic.php";

class DiscussionController extends Controller
{
    public function out($params = [])
    {
        echo output('discussion', $params);
    }

    public function getTopic( $directory_id, $directory_name, $id_topic, $title_topik)
    {
        $obj = new Topic();
        $topic = $obj->getTopic($id_topic);
        $this->out(['avatar' => $topic['avatar'], 'title_topic' => $title_topik, 'nickname' => $topic['nickname'], 'datetime' => $topic['datetime'], 'amount_of_posts' => $topic['amount_of_posts'], 'amount_of_views' => $topic['amount_of_views'], 'text' => $topic['text'], 'directory_id' => $directory_id, 'directory_name' => $directory_name]);
    }
}