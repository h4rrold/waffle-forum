<?php

class Topic extends Model
{
    public $monthes = [
        1 => 'Січня', 2 => 'Лютого', 3 => 'Березня', 4 => 'Квітня',
        5 => 'Травня', 6 => 'Червня', 7 => 'Липня', 8 => 'Серпня',
        9 => 'Вересня', 10 => 'Жовтня', 11 => 'Листопада', 12 => 'Грудня'];
    public function getTopTopics($first, $second)
    {

        $topics = MyPDO::run("SELECT topics.id, users.avatar, topics.title, users.nickname, posts.datetime, topics.amount_of_posts, topics.amount_of_views, posts.text, topics.directory_id, directories.name FROM directories, users, topics, posts WHERE directories.id = topics.directory_id AND users.id = posts.user_id AND topics.id = posts.topic_id GROUP BY topics.id ORDER BY topics.amount_of_views DESC LIMIT  $first, $second");
        for ($i = 0; $i < count($topics); $i++){
            $date = new DateTime($topics[$i]['datetime']);
            $topics[$i]['datetime'] = $date->format('j ').$this->monthes[$date->format('n')].$date->format(' Y');
        }
        return $topics;
    }

    public function getFetchTopics($id_category)
    {
        $topics = MyPDO::run("SELECT topics.id, users.avatar, topics.title, users.nickname, posts.datetime, topics.amount_of_posts, topics.amount_of_views, posts.text FROM users, topics, posts WHERE topics.directory_id = ? AND users.id = posts.user_id AND topics.id = posts.topic_id GROUP BY topics.id ORDER BY topics.amount_of_views DESC", [$id_category]);
        for ($i = 0; $i < count($topics); $i++){
            $date = new DateTime($topics[$i]['datetime']);
            $topics[$i]['datetime'] = $date->format('j ').$this->monthes[$date->format('n')].$date->format(' Y');
        }
        return $topics;
    }

    public function getTopic($id_topic)
    {
        $topic = MyPDO::first("SELECT topics.id, users.avatar, topics.title, users.nickname, posts.datetime, topics.amount_of_posts, topics.amount_of_views, posts.text FROM users, topics, posts WHERE topics.post_id = posts.id  AND users.id = posts.user_id AND topics.id = posts.topic_id AND topics.id = ?", [$id_topic]);
        $date = new DateTime($topic['datetime']);
        $topic['datetime'] = $date->format('j ').$this->monthes[$date->format('n')].$date->format(' Y');
        return $topic;
    }
}