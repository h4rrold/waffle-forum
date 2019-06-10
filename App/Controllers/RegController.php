<?php
require_once "App/User.php";
class RegController extends Controller
{
    public function out($params = [])
    {
        echo output('registration', $params);
    }

    public function registration()
    {
        if (isset($_POST['send-lpp'])) {
            $nickname = htmlspecialchars($_POST['nick-in']);
            $email = htmlspecialchars($_POST['email']);
            $pass = htmlspecialchars($_POST['pas-in']);
            $pass_2 = htmlspecialchars($_POST['pas-in2']);
            //setcookie('login-in', $login);
            //setcookie('mail', $mail);
            $obj = new User();
            if (trim($nickname) == '') {
                $this->errors[] = "Введіть логін!";
            }
            $tmp = $obj->validNickname($nickname);
            if (count($tmp) > 0) {
                $this->errors[] = "Користувач з таким ніком вже існує!";
            }
            if ((trim($email) == '') || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->errors[] = "Введіть e-mail!";
            }
            $tmp = $obj->validEmail($email);
            if (count($tmp) > 0) {
                $this->errors[] = "Користувач з таким e-mail вже існує!";
            } else
                if ($pass == '') {
                    $this->errors[] = "Введіть пароль!";
                } else
                    if ($pass != $pass_2) {
                        $this->errors[] = "Повторний пароль введено неправильно!";
                    }
            if (empty($this->errors)) {
                $obj->addUser($nickname, $email, $pass);
                $this->answer_reg = "Ви успішно зареєструвалися!";
            }
        }
        $this->out();
    }
}