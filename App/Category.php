<?php

class Category extends Model
{
    public function getFetchCategories()
    {
        return MyPDO::run("select directories.name, topics.title, max(posts.datetime) as MaxDate, users.nickname, directories.amount_of_topics, directories.amount_of_posts from directories, users, topics, posts WHERE users.id = posts.user_id AND topics.id = posts.topic_id AND directories.id = topics.directory_id group by topics.id");

    }
}