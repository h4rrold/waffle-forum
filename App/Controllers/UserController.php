<?php
require_once 'App/User.php';

class UserController extends Controller
{
    public function out(){
        $user = new User();
        $data = $user->loadUserData();
        echo $this->buildPage(output('profile', $data));
    }
}