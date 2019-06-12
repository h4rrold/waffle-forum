<?php
require_once "App/Topic.php";
require_once "App/Post.php";

class DiscussionController extends Controller
{
    public function out($params = [])
    {
        echo $this->buildPage(output('discussion', $params));
    }

    public function getSomePosts($id_topic, $first, $second)
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
        $posts = $this->getSomePosts($id_topic, $first - 1, $amount_of_posts);
        if ($second > $amount['count']) $second = $amount['count'];
        $topic['title_topic'] = $title_topic;
        $topic['directory_id'] = $directory_id;
        $topic['directory_name'] = urldecode($directory_name);
        $topic['id_page'] = $id_page;
        $topic['first'] = $first;
        $topic['second'] = $second;
        $topic['count'] = $amount['count'] / $amount_of_posts;
        $topic['posts'] = $posts;
        $parts_of_url = explode('/', $_SESSION['cur']);

        if ($_SESSION['prev'] !== $_SESSION['cur'] && $id_topic != $parts_of_url[count($parts_of_url) - 3]) {
            $obj->incViews($topic['amount_of_views'] + 1, $id_topic);
        }

        $this->out($topic);

    }


    public function increaseRatingByUserVote()
    {
        $post_model = new Post();
        echo $post_model->increaseRatingByUserVote();
    }

    public function getVotedPosts()
    {
        $post_model = new Post();
        echo json_encode($post_model->getVotedPosts());
    }

    public function SendPost($directory_id, $directory_name, $id_topic, $title_topic, $amount_of_posts)
    {
        if (isset($_POST['send'])) {
            $obj = new Post();
            $post_text = trim(stripslashes(htmlspecialchars($_POST['post_text'])));
            $obj->Send($id_topic, $post_text);
            $obj = new Topic();
            $obj->incPosts($amount_of_posts + 1, $id_topic);
            header('Location: ' . ROUTE_PATH . "/community/categories/$directory_id/$directory_name/$id_topic/$title_topic/1");
        }
    }
}