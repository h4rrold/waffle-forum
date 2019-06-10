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
            setcookie('nick_email_log', $nick_email);

            $user = $obj->nickORemail($nick_email);
            if (count($user) < 0) {
                if (password_verify($pass.$user['salt'], $user['pass'])) {
                    $_SESSION['logged-user']['nickname'] = $user['nickname'];
                    $_SESSION['logged-user']['id'] = $user['id'];
                    setcookie('session_id', session_id());
                    header('Location:'.ROUTE_PATH.'/community/home');
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