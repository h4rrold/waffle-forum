<?php

class Topic extends Model
{
    public $monthes = [
        1 => 'Січня', 2 => 'Лютого', 3 => 'Березня', 4 => 'Квітня',
        5 => 'Травня', 6 => 'Червня', 7 => 'Липня', 8 => 'Серпня',
        9 => 'Вересня', 10 => 'Жовтня', 11 => 'Листопада', 12 => 'Грудня'];

    public function update_counts_of_posts($id_topic)
    {
        $amount_of_posts = MyPDO::first("SELECT COUNT(posts.id) as count FROM topics, posts WHERE topics.id = posts.topic_id AND topics.id = ?", [$id_topic])['count'];

        MyPDO::runWithoutFetch("UPDATE `topics` SET `amount_of_posts` = ? WHERE `topics`.`id` = ?", [$amount_of_posts - 1, $id_topic]);
    }

    public function getTopTopics($first, $second)
    {

        $topics = MyPDO::run("SELECT topics.id, users.avatar, topics.title, users.nickname, posts.datetime, topics.amount_of_posts, topics.amount_of_views, posts.text, topics.directory_id, directories.name 
                              FROM directories, users, topics, posts 
                              WHERE directories.id = topics.directory_id 
                              AND users.id = posts.user_id 
                              AND topics.id = posts.topic_id 
                              GROUP BY topics.id 
                              ORDER BY topics.amount_of_views
                              DESC LIMIT  $first, $second");
        for ($i = 0; $i < count($topics); $i++) {
            $date = new DateTime($topics[$i]['datetime']);
            $topics[$i]['datetime'] = $date->format('j ') . $this->monthes[$date->format('n')] . $date->format(' Y');
        }
        return $topics;
    }

    public function getRecentTopics($first, $second)
    {

        $topics = MyPDO::run("SELECT topics.id, users.avatar, topics.title, users.nickname, MAX(posts.datetime) as datetime, topics.amount_of_posts, topics.amount_of_views, posts.text, topics.directory_id, directories.name 
                              FROM directories, users, topics, posts 
                              WHERE directories.id = topics.directory_id 
                              AND users.id = posts.user_id 
                              AND topics.id = posts.topic_id 
                              GROUP BY topics.id 
                              ORDER BY datetime 
                              DESC LIMIT $first, $second");
        for ($i = 0; $i < count($topics); $i++) {
            $date = new DateTime($topics[$i]['datetime']);
            $topics[$i]['datetime'] = $date->format('j ') . $this->monthes[$date->format('n')] . $date->format(' Y');
        }
        return $topics;
    }

    public function getFetchTopics($id_category)
    {

        $topics = MyPDO::run("SELECT topics.id, users.avatar, topics.title, users.nickname, posts.datetime, topics.amount_of_posts, topics.amount_of_views, posts.text 
                              FROM users, topics, posts 
                              WHERE topics.directory_id = ? 
                              AND users.id = posts.user_id 
                              AND topics.id = posts.topic_id 
                              GROUP BY topics.id 
                              ORDER BY topics.amount_of_views 
                              DESC", [$id_category]);
        for ($i = 0; $i < count($topics); $i++) {
            $date = new DateTime($topics[$i]['datetime']);
            $topics[$i]['datetime'] = $date->format('j ') . $this->monthes[$date->format('n')] . $date->format(' Y');
        }
        return $topics;
    }

    public function getTopic($id_topic)
    {
        $this->update_counts_of_posts($id_topic);
        $topic = MyPDO::first("SELECT topics.id, users.avatar, topics.title, users.nickname, posts.datetime, topics.amount_of_posts, topics.amount_of_views, posts.text 
                                    FROM users, topics, posts 
                                    WHERE topics.post_id = posts.id  
                                    AND users.id = posts.user_id 
                                    AND topics.id = posts.topic_id 
                                    AND topics.id = ?", [$id_topic]);
        $date = new DateTime($topic['datetime']);
        $topic['datetime'] = $date->format('j ') . $this->monthes[$date->format('n')] . $date->format(' Y');


        return $topic;
    }

    public function getTopicsBySeek($seek_string)
    {
        $topics = MyPDO::run("SELECT topics.id, users.avatar, topics.title, users.nickname, posts.datetime, topics.amount_of_posts, topics.amount_of_views, posts.text, topics.directory_id, directories.name 
                              FROM users, topics, posts, directories 
                              WHERE topics.title LIKE ? 
                              AND users.id = posts.user_id 
                              AND topics.id = posts.topic_id
                              AND directories.id = topics.directory_id
                              GROUP BY topics.id 
                              ORDER BY topics.amount_of_views 
                              DESC", ["%$seek_string%"]);
        return $topics;

    }

    public function newTopic($topic_title, $directory_id)
    {
        MyPDO::insert("INSERT INTO `topics` (`id`, `name`, `directory_id`, `title`, `post_id`, `last_post_id`, `amount_of_posts`, `is_pinned`, `amount_of_views`) 
                        VALUES (NULL, NULL, ?, ?, '0', '0', '0', '0', '0')", [$directory_id, $topic_title]);

        return MyPDO::first("SELECT id FROM topics ORDER BY id DESC LIMIT 1")['id'];
    }

    public function updateTopicsPost($post_id, $topic_id)
    {
        MyPDO::runWithoutFetch("UPDATE `topics` SET `post_id` = ? WHERE `topics`.`id` = ?", [$post_id, $topic_id]);
    }

    public function incViews($amount, $id_topic)
    {
        MyPDO::runWithoutFetch("UPDATE `topics` SET `amount_of_views` = ? WHERE `topics`.`id` = ?", [$amount, $id_topic]);
    }

    public function incPosts($amount, $id_topic)
    {
        MyPDO::runWithoutFetch("UPDATE `topics` SET `amount_of_posts` = ? WHERE `topics`.`id` = ?", [$amount, $id_topic]);
    }

}