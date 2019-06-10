<?php
require_once "bbcode/bb.php";

class Post extends  Model
{
    public $monthes = [
        1 => 'Січня', 2 => 'Лютого', 3 => 'Березня', 4 => 'Квітня',
        5 => 'Травня', 6 => 'Червня', 7 => 'Липня', 8 => 'Серпня',
        9 => 'Вересня', 10 => 'Жовтня', 11 => 'Листопада', 12 => 'Грудня'];

    public function getPosts($id_topic, $first, $second)
    {
        $posts = MyPDO::run("SELECT users.nickname, users.avatar, posts.datetime, posts.text FROM users, posts WHERE users.id = posts.user_id AND posts.topic_id = ? ORDER BY posts.datetime DESC LIMIT $first, $second", [$id_topic]);
        for ($i = 0; $i < count($posts); $i++){
            $date = new DateTime($posts[$i]['datetime']);
            $posts[$i]['datetime'] = $date->format('j ').$this->monthes[$date->format('n')].$date->format(' Y');
            $posts[$i]['text'] =  print_page($posts[$i]['text']);

        }

        return $posts;
    }

    public function getCountPosts($id_topic)
    {
        return MyPDO::first( "SELECT COUNT(posts.id) as count FROM topics, posts WHERE posts.topic_id = ? AND topics.id = ? GROUP BY topics.id", [$id_topic, $id_topic]);
    }

    public function Send($id_topic, $post_text)
    {
        return MyPDO::insert("INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `text`) VALUES (NULL, ?, ?, ?)", [$_SESSION['logged-user']['id'], $id_topic, $post_text]);
    }
}