<?php

class User extends Model
{
    public function addUser($nickname, $email, $pass)
    {
        MyPDO::insert("INSERT INTO `users` (`id`, `nickname`, `email`, `pass`) VALUES (NULL, :nickname, :email, :pass)", [':nickname' => $nickname, ':email' => $email, ':pass' => password_hash($pass, PASSWORD_DEFAULT)]);
    }

    public function validNickname($nickname)
    {
        return MyPDO::run("SELECT * FROM `users` WHERE `nickname` LIKE ?", [$nickname]);
    }

    public function validEmail($email)
    {
        return MyPDO::run("SELECT * FROM `users` WHERE `e-mail` LIKE ?", [$email]);
    }

    public  function nickORemail($nick_email)
    {
        return MyPDO::first("SELECT * FROM `users` WHERE `e-mail` LIKE ? OR `login` LIKE ?", [$nick_email, $nick_email]);

    }
}