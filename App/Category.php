<?php

class Category extends Model
{
    public function getFetchCategories()
    {
        $categories = MyPDO::run("select directories.id, directories.name, topics.title, max(posts.datetime) as MaxDate, users.nickname, directories.amount_of_topics, directories.amount_of_posts from directories, users, topics, posts WHERE users.id = posts.user_id AND topics.id = posts.topic_id AND directories.id = topics.directory_id group by topics.id ORDER BY directories.id");
        $monthes = [
            1 => 'Січня', 2 => 'Лютого', 3 => 'Березня', 4 => 'Квітня',
            5 => 'Травня', 6 => 'Червня', 7 => 'Липня', 8 => 'Серпня',
            9 => 'Вересня', 10 => 'Жовтня', 11 => 'Листопада', 12 => 'Грудня'];
        for ($i = 0; $i < count($categories); $i++){
            $date = new DateTime($categories[$i]['MaxDate']);
            $categories[$i]['MaxDate'] = $date->format('j ').$monthes[date('n')].$date->format(' Y');
        }
        return $categories;
    }
}