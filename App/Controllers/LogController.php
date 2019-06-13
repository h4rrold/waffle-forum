<?php
require_once "App/User.php";

class LogController extends Controller
{
    public function out($params = [])
    {

        echo $this->buildPage(output('sign-in', $params));
        if ($_SESSION['prev'] !== $_SESSION['cur'] && $_SESSION['cur'] !== ROUTE_PATH.'/log' && $_SESSION['prev'] !== ROUTE_PATH.'/reg' && $_SESSION['prev'] !== ROUTE_PATH.'/registration')  {
            $_SESSION['page_after_log'] = $_SESSION['prev'];
        }
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

            if (!empty($user)) {
                if (password_verify($pass.$user['salt'], $user['pass'])) {
                    $obj->last_login($user['id']);
                    $_SESSION['logged-user']['nickname'] = $user['nickname'];
                    $_SESSION['logged-user']['id'] = $user['id'];
                    $_SESSION['logged-user']['avatar'] = $user['avatar'];
                    setcookie('session_id', session_id());
                    header('Location: '.$_SESSION['page_after_log']);
                    unset($_SESSION['page_after_log']);
                    //unset($_SESSION['page_after_reg']);
                    exit();
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