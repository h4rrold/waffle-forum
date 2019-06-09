<?php
class Topic extends Model
{
    public function get5Topics($first, $second)
    {
        $topics = MyPDO::run("SELECT users.avatar, topics.title, users.nickname, posts.datetime, topics.amount_of_posts, topics.amount_of_views, posts.text FROM users, topics, posts WHERE users.id = posts.user_id AND topics.id = posts.topic_id GROUP BY topics.title ORDER BY topics.amount_of_views DESC LIMIT $first , $second");
        $monthes = [
            1 => 'Січня', 2 => 'Лютого', 3 => 'Березня', 4 => 'Квітня',
            5 => 'Травня', 6 => 'Червня', 7 => 'Липня', 8 => 'Серпня',
            9 => 'Вересня', 10 => 'Жовтня', 11 => 'Листопада', 12 => 'Грудня'];
        for ($i = 0; $i < count($topics); $i++){
            $date = new DateTime($topics[$i]['datetime']);
            $topics[$i]['datetime'] = $date->format('j ').$monthes[date('n')].$date->format(' Y');
        }
        return $topics;
    }
}