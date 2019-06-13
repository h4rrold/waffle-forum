<?php
require_once 'App/User.php';

class UserController extends Controller
{
    public function outProfile(){
        $user = new User();
        $data = $user->loadUserData();
        echo $this->buildPage(output('profile', $data));
    }
    public function logout()
    {
        unset($_SESSION['logged-user']);
        if (isset($_COOKIE['session_id'])) {
            setcookie('session_id', "", 1);
            unset($_COOKIE['session_id']);
        }
        session_regenerate_id();
        header('Location: '.ROUTE_PATH . '/community/home');
    }
}