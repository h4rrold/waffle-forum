<?php

class User extends Model
{
    public function addUser($nickname, $email, $pass, $salt)
    {
        MyPDO::insert("INSERT INTO `users` (`id`, `nickname`, `email`, `pass`, `salt`) VALUES (NULL, :nickname, :email, :pass, :salt)", [':nickname' => $nickname, ':email' => $email, ':pass' => password_hash($pass.$salt, PASSWORD_DEFAULT), ':salt' => $salt]);
    }

    public function validNickname($nickname)
    {
        return MyPDO::run("SELECT * FROM `users` WHERE `nickname` LIKE ?", [$nickname]);
    }

    public function validEmail($email)
    {
        return MyPDO::run("SELECT * FROM `users` WHERE `email` LIKE ?", [$email]);
    }

    public  function nickORemail($nick_email)
    {
        return MyPDO::first("SELECT * FROM `users` WHERE `email` LIKE ? OR `nickname` LIKE ?", [$nick_email, $nick_email]);
    }

    public function last_login($id_user)
    {
        $date = DateTime::createFromFormat('U', time() + 10800, new DateTimeZone('+02:00'));
        $date = date_format($date, 'Y-m-d H:i:s');
        $ip = $_SERVER['REMOTE_ADDR'];
        MyPDO::runWithoutFetch("UPDATE `users` SET `last_login` = ?, `last_ip` = ? WHERE `users`.`id` = ?", [$date,$ip, $id_user]);
    }

    public function loadUserData(){
        $id = $_SESSION['logged-user']['id'];

        $result = array();

        $result['main_info'] = MyPDO::run("SELECT u.nickname, u.email, u.registration_date, u.bio, g.name, u.rating,
        COUNT(CASE WHEN v.value = '1' THEN 1 END) as positive,
        COUNT(CASE WHEN v.value = '-1' THEN 1 END) as negative
        FROM users u
        LEFT JOIN groups g ON g.id = u.group_id
        LEFT JOIN posts p ON p.user_id = u.id
        LEFT JOIN votes v ON v.post_id = p.id
        WHERE u.id = :id", array(
            'id' => $id
        ));

        $result['other_votes'] = MyPDO::run('SELECT u.nickname, u.avatar , v.value, t.title
        FROM votes v 
        RIGHT JOIN users u ON u.id = v.user_id
        RIGHT JOIN posts p ON p.id = v.post_id
        RIGHT JOIN topics t ON t.id = p.topic_id
        WHERE p.user_id = :id
        LIMIT 0, 5', array(
            'id' => $id
        ));

        $result['posts'] = MyPDO::run('SELECT u.nickname, u.avatar, t.title, p.text, p.datetime, t.amount_of_views, t.amount_of_posts, p.id
        FROM posts p
        LEFT JOIN users u ON u.id = p.user_id
        LEFT JOIN topics t ON t.id = p.topic_id
        WHERE u.id = :id
        LIMIT 0,5', array(
            'id' => $id
        ));

        return $result;
    }
}