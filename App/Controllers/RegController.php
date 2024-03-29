<?php
require_once "App/User.php";
class RegController extends Controller
{
    public function out($params = [])
    {
        echo $this->buildPage(output('registration', $params));
        if ($_SESSION['prev'] !== $_SESSION['cur'] && $_SESSION['cur'] !== ROUTE_PATH.'/reg' && $_SESSION['prev'] !== ROUTE_PATH.'/log' && $_SESSION['prev'] !== ROUTE_PATH.'/login') {
             $_SESSION['page_after_log'] = $_SESSION['prev'];
        }
    }
    public function emailExists()
    {
        $userModel = new User();
        $email = $_POST['email'];
        echo count($userModel->validEmail($email)) == 0;
    }
    public function nickExists() {
        $userModel = new User();
        $nick = $_POST['nick'];
        echo count($userModel->validNickname($nick)) == 0;
    }
    public function registration()
    {
        if (isset($_POST['send'])) {
            $nickname = htmlspecialchars($_POST['nick-in']);
            $email = htmlspecialchars($_POST['email']);
            $pass = htmlspecialchars($_POST['pas-in']);
            $pass_2 = htmlspecialchars($_POST['pas-in2']);
            setcookie('nick-in', $nickname);
            setcookie('email', $email);
            $obj = new User();
            if (trim($nickname) == '') {
                $this->errors[] = "Введіть логін!";
            }
            $tmp = $obj->validNickname($nickname);
            if (count($tmp) > 1) {
                $this->errors[] = "Користувач з таким ніком вже існує!";
            }
            if ((trim($email) == '') || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->errors[] = "Введіть e-mail!";
            }
            $tmp = $obj->validEmail($email);
            if (count($tmp) > 1) {
                $this->errors[] = "Користувач з таким e-mail вже існує!";
            } else
                if ($pass == '') {
                    $this->errors[] = "Введіть пароль!";
                } else
                    if ($pass != $pass_2) {
                        $this->errors[] = "Повторний пароль введено неправильно!";
                    }
            if (empty($this->errors)) {
                $bytes = random_bytes(5);
                $salt = bin2hex($bytes);
                $obj->addUser($nickname, $email, $pass, $salt);
                setcookie('nick_email_log', $nickname);
                header('Location: '.ROUTE_PATH.'/login');
                //$this->answer_reg = "Ви успішно зареєструвалися!";
            }
        }
        $this->out();
    }
}