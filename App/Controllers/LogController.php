<?php
require_once "App/User.php";

class LogController extends Controller
{
    public function out($params = [])
    {
        echo output('sign-in', $params);
    }

    public function login()
    {
        $obj = new User();
        $errors = array();
        if (isset($_POST['send'])) {
            $nick_email = htmlspecialchars($_POST['nickoremail']);
            $pass = htmlspecialchars($_POST['pas-in']);
            setcookie('login-in-log_page', $nick_email);

            $user = $obj->nickORemail($nick_email);
            if (count($user) < 0) {
                if (password_verify($pass.$user['salt'], $user['pass'])) {
                    $_SESSION['logged-user']['login'] = $user['login'];
                    $_SESSION['logged-user']['id'] = $user['id'];
                    setcookie('session_id', session_id());
                    header('Location:/waffle-forum/community/home');
                } else {
                    $errors[] = "Невірний пароль!";
                }
            } else {
                $errors[] = "Такого користувача не існує!";
            }
            $this->out();
        }
    }
}