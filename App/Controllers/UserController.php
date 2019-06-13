<?php
require_once 'App/User.php';

class UserController extends Controller
{
    public function outProfile(){
        $user = new User();
        $data = $user->loadUserData();
        echo $this->buildPage(output('profile', $data));
    }
}