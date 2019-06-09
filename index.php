<?php
ob_start();
session_start();
require_once "Core/Middleware.php";
require_once 'Core/MyPDO.php';
require_once 'Core/Templator.php';
require_once 'Core/Route.php';
require_once 'App/Route/web.php';
require_once 'Core/Controller.php';
require_once 'Core/Model.php';
require_once 'Core/SQLBuilder.php';
require_once 'Core/App.php';
MyPDO::connect('mysql:host=localhost;dbname=waffle_forum;charset=utf8', 'root', 'admin', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC));
echo output('header');
Route::run();
echo output('footer');
return ob_get_contents();