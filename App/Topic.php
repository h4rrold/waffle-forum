<?php
class Topic extends Model
{
    public function get5Topics($first, $second)
    {
        return MyPDO::run("SELECT users.avatar, topics.title, users.nickname, posts.datetime, topics.amount_of_posts, topics.amount_of_views, posts.text FROM users, topics, posts WHERE users.id = posts.user_id AND topics.id = posts.topic_id GROUP BY topics.title ORDER BY topics.amount_of_views DESC LIMIT $first , $second");

    }
}