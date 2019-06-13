<?php

class Category extends Model
{
    public $monthes = [
        1 => 'Січня', 2 => 'Лютого', 3 => 'Березня', 4 => 'Квітня',
        5 => 'Травня', 6 => 'Червня', 7 => 'Липня', 8 => 'Серпня',
        9 => 'Вересня', 10 => 'Жовтня', 11 => 'Листопада', 12 => 'Грудня'];
    public function getFetchCategories()
    {
        $categories = MyPDO::run("select directories.id, directories.name, directories.description, topics.id as id_topic, topics.title, max(posts.datetime) as MaxDate, users.nickname, directories.amount_of_topics, directories.amount_of_posts from directories, users, topics, posts WHERE users.id = posts.user_id AND topics.id = posts.topic_id AND directories.id = topics.directory_id group by directories.id ORDER BY directories.id");
        for ($i = 0; $i < count($categories); $i++){
            $date = new DateTime($categories[$i]['MaxDate']);
            $categories[$i]['MaxDate'] = $date->format('j ').$this->monthes[$date->format('n')].$date->format(' Y');
            $categories[$i]['amount_of_topics'] = MyPDO::first("SELECT COUNT(topics.id) as count FROM topics, directories WHERE topics.directory_id = directories.id AND directories.id = ?", [$categories[$i]['id']])['count'];
            $categories[$i]['amount_of_posts'] = MyPDO::first("SELECT COUNT(posts.id) as count FROM posts, topics, directories WHERE topics.directory_id = directories.id AND posts.topic_id = topics.id AND directories.id = ? AND topics.post_id != posts.id", [$categories[$i]['id']])['count'];
            MyPDO::runWithoutFetch("UPDATE `directories` SET `amount_of_posts` = ? WHERE `directories`.`id` = ?", [$categories[$i]['amount_of_posts'], $categories[$i]['id']]);
            MyPDO::runWithoutFetch("UPDATE `directories` SET `amount_of_topics` = ? WHERE `directories`.`id` = ?", [$categories[$i]['amount_of_topics'], $categories[$i]['id']]);
        }
        return $categories;
    }
}