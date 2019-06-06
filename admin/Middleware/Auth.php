<?php
class Auth extends Middleware
{
    function handle()
    {
        if((Route::getCorrectRoute() !== "login" && Route::getCorrectRoute() !== "auth") && (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)){
            header("location: login");
            exit;
        }
        else if(Route::getCorrectRoute() === "login" && Route::getCorrectRoute() === "auth" && isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
            header("location: panel");
            exit;
        }
    }
}