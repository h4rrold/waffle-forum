<?php
require_once "App/User.php";

class LogController extends Controller
{
    public function out($params = [])
    {
        echo output('login', $params);
    }

    public function login()
    {
        $obj = new User();
        $errors = array();
        if (isset($_POST['log-lp'])) {
            $nick_email = htmlspecialchars($_POST['login-in-log_page']);
            $pass = htmlspecialchars($_POST['pas-in']);
            //setcookie('login-in-log_page', $login_em);

            $user = $obj->nickORemail($nick_email);
            if (count($user) < 0) {
                if (password_verify($pass, $user['password'])) {
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