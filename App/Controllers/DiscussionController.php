<?php
require_once "App/Topic.php";
require_once "App/Post.php";

class DiscussionController extends Controller
{
    public function out($params = [])
    {
        echo $this->buildPage(output('discussion', $params));
    }

    public function get10Posts($id_topic, $first, $second)
    {
        $obj = new Post();
        return $obj->getPosts($id_topic, $first, $second);
    }

    public function getTopicAndPosts($directory_id, $directory_name, $id_topic, $title_topic, $id_page)
    {
        $obj = new Post();
        $amount_of_posts = 3;

        $amount = $obj->getCountPosts($id_topic);

        if ($id_page > ceil($amount['count'] / $amount_of_posts)) header("Location:/waffle-forum/community/categories/$directory_id/$directory_name/$id_topic/$title_topic/" . ceil($amount['count'] / $amount_of_posts));
        if ($id_page < 1) header("Location:/waffle-forum/community/categories/$directory_id/$directory_name/$id_topic/$title_topic/1");
        $obj = new Topic();
        $topic = $obj->getTopic($id_topic);
        $first = ($id_page - 1) * $amount_of_posts + 1;
        $second = $first + $amount_of_posts - 1;
        $posts = $this->get10Posts($id_topic, $first - 1, $amount_of_posts);
        if ($second > $amount['count']) $second = $amount['count'];
        $topic['title_topic'] = $title_topic;
        $topic['directory_id'] = $directory_id;
        $topic['directory_name'] = urldecode($directory_name);
        $topic['id_page'] = $id_page;
        $topic['first'] = $first;
        $topic['second'] = $second;
        $topic['count'] = $amount['count'] / $amount_of_posts;
        $topic['posts'] = $posts;

        $this->out($topic);
    }

    public function SendPost($directory_id, $directory_name, $id_topic, $title_topic)
    {
        if (isset($_POST['send'])) {
            $obj = new Post();
            $post_text = trim(stripslashes(htmlspecialchars($_POST['post_text'])));
            $obj->Send($id_topic, $post_text);
            header('Location: '.ROUTE_PATH."/community/categories/$directory_id/$directory_name/$id_topic/$title_topic/1");


        }
    }
}