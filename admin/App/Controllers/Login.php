<?php
require_once("App/ProcessAuth.php");
class Login extends Controller
{
    private $username, $password;

    private $username_err, $password_err;

    public function draw()
    {
        echo(output("login", ["username" => $this->username, "username_err" => $this->username_err, "password_err" => $this->password_err]));
    }
    
    public function auth()
    {
        if(empty(trim($_POST["username"]))){
            $this->username_err = "Please enter username.";
        } else{
            $this->username = trim($_POST["username"]);
        }
        
        if(empty(trim($_POST["password"]))){
            $this->password_err = "Please enter your password.";
        } else{
            $this->password = trim($_POST["password"]);
        }
        $auth = new ProcessAuth();
        $res = $auth->validateCredentials($this->username, $this->password, $this->username_err, $this->password_err);
        if($res[0] == false)
        {
            $this->username_err = $res[1];
            $this->password_err = $res[2];
            $this->draw();
        }
        else 
        {
            header('Location: panel');
        }
    }
    public function logout()
    {
        $_SESSION["loggedin"] = false;
        $_SESSION["id"] = null;
        $_SESSION["username"] = null; 
        $this->draw();   
    }
    
}

