<?php
require_once "App/Topic.php";
require_once "App/Post.php";

class CreateTopicController extends Controller
{
    public function out($params = [])
    {
        echo $this->buildPage(output('create-topic', $params));
    }

    public function createTopic($id_category, $category)
    {
        if (isset($_POST['send-topic'])) {
            $topic_title = $_POST['topic_title'];
            $topic_text = $_POST['post_text'];
            $objTopic = new Topic();
            $topic_id = $objTopic->newTopic($topic_title, $id_category);
            $objPost = new Post();
            $post_id = $objPost->Send($topic_id, $topic_text);
            $objTopic->updateTopicsPost($post_id, $topic_id);
            header('Location: ' . ROUTE_PATH . "/community/categories/$id_category/$category/$topic_id/$topic_title/1");
        }
        $this->out(['id_category' => $id_category, 'category' => $category]);
    }
}
