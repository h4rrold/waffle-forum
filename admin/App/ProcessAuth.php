<?php

class ProcessAuth extends Model
{
    public function validateCredentials($username, $password, $username_err, $password_err)
    {
        if(empty($username_err) && empty($password_err)){
            
            $sql = "SELECT id, nickname, pass, group_id FROM users WHERE nickname = ?";
            $result = MyPDO::run($sql, [$username]);
            if(count($result) > 0){                    
                $hashed_password = $result[0]['pass'];
                    if(password_verify($password, $hashed_password))
                    {
                        session_start();
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $result[0]['id'];
                        $_SESSION["username"] = $username;                            
                        
                        header("location: panel");
                    } else{
                        $password_err = "The password you entered was not valid.";
                    }
                }
            } else{
                $username_err = "No account found with that username.";
        }
        return [$username_err, $password_err];
    }
}