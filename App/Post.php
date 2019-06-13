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
        $posts = MyPDO::run("SELECT posts.id as post_id, 
        COUNT(CASE WHEN votes.value = '1' THEN 1 END) as pluses, 
        COUNT(CASE WHEN votes.value = '-1' THEN 1 END) as minuses,  
        users.id AS user_id, users.nickname, users.avatar, posts.datetime, posts.text 
        FROM posts 
        LEFT JOIN users ON posts.user_id = users.id
        LEFT JOIN votes ON posts.id = votes.post_id 
        LEFT JOIN topics ON topics.id = posts.topic_id
        WHERE users.id = posts.user_id AND posts.topic_id = ? AND posts.id != topics.post_id
        GROUP BY posts.id 
        ORDER BY posts.datetime DESC 
        LIMIT $first, $second", [$id_topic]);
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


    public function increaseRatingByUserVote(){
        if(!array_key_exists('logged-user', $_SESSION)){
            return 'Увійдіть для голосування';
        } else{
            $user_id = $_SESSION['logged-user']['id'];
        }
        $inc = $this->input_post('inc');
        $post_id = $this->input_post('post_id');
        //increasing rating for user and post user created
        MyPDO::runWithoutFetch('UPDATE users SET rating = rating + :inc WHERE id = :user_id', array(
            'inc' => $inc,
            'user_id' => $user_id
        ));
        MyPDO::runWithoutFetch('UPDATE posts SET rating = rating + :inc WHERE id = :user_id', array(
            'inc' => $inc,
            'user_id' => $user_id
        ));
        //adding vote data to db
        MyPDO::insert('INSERT INTO votes(user_id, post_id, value) VALUES(:user_id, :post_id, :value)', array(
            'user_id' => $user_id,
            'post_id' => $post_id,
            'value' => $inc
        ));
        return 'Дякуємо за ваш відгук';
    }

    public function getVotedPosts(){
        $where_id = '';
        if(array_key_exists('logged-user', $_SESSION)){
            $where_id .= ' WHERE user_id = '.$_SESSION['logged-user']['id'];
            return MyPDO::run("SELECT post_id FROM votes $where_id");
        }
        return MyPDO::run('SELECT id as post_id FROM posts');
    }

    public function Send($id_topic, $post_text)
    {
        $post_text = print_page($post_text);
         MyPDO::insert("INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `text`) VALUES (NULL, ?, ?, ?)", [$_SESSION['logged-user']['id'], $id_topic, $post_text]);
         return MyPDO::first("SELECT id FROM posts ORDER BY id DESC LIMIT 1")['id'];
    }
}