<?php

class User extends Model
{
    public function addUser($nickname, $email, $pass, $salt)
    {
        MyPDO::insert("INSERT INTO `users` (`id`, `nickname`, `email`, `pass`, `salt`) VALUES (NULL, :nickname, :email, :pass, :salt)", [':nickname' => $nickname, ':email' => $email, ':pass' => password_hash($pass.$salt, PASSWORD_DEFAULT), ':salt' => $salt]);
    }

    public function validNickname($nickname)
    {
        return MyPDO::first("SELECT IF(COUNT(*)=0,TRUE,FALSE) as result FROM `users` WHERE `nickname` = ?", [$nickname]);
    }

    public function validEmail($email)
    {
        return MyPDO::first("SELECT IF(COUNT(*)=0,TRUE,FALSE) as result FROM `users` WHERE `email` = ?", [$email]);
    }

    public  function nickORemail($nick_email)
    {
        return MyPDO::first("SELECT IF(COUNT(*)=0,TRUE,FALSE) as result FROM `users` WHERE `email` LIKE ? OR `nickname` LIKE ?", [$nick_email, $nick_email]);
    }

    public function last_login($id_user)
    {
        $date = DateTime::createFromFormat('U', time() + 10800, new DateTimeZone('+02:00'));
        $date = date_format($date, 'Y-m-d H:i:s');
        $ip = $_SERVER['REMOTE_ADDR'];
        MyPDO::runWithoutFetch("UPDATE `users` SET `last_login` = ? WHERE `users`.`id` = ?", [$date,$ip]);
    }
}