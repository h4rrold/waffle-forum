<?php

class ProcessAuth extends Model
{
    public function validateCredentials($username, $password, $username_err, $password_err)
    {
        if(empty($username_err) && empty($password_err))
        {   
            $sql = "SELECT id, nickname, pass, salt, group_id FROM users WHERE nickname = ?";
            $result = MyPDO::run($sql, [$username]);
            if(count($result) > 0)
            {                    
                $hashed_password = $result[0]['pass'];
                if(password_verify($password . $result[0]['salt'], $hashed_password))
                {
                    if($result[0]['group_id'] == 1)
                    {
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $result[0]['id'];
                        $_SESSION["username"] = $username;                            
                        
                        return [true];
                    } 
                    else 
                    {
                        $username_err = "You don't have permissions to that site.";
                    }
                } 
                else 
                {
                    $password_err = "The password you entered was not valid.";
                }
            } 
            else 
            {
                $username_err = "No account found with that username.";
            } 
        }
        return [false, $username_err, $password_err];
    }
}