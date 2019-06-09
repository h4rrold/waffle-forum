<?php
ob_start();
session_start();

//$_SESSION["loggedin"] = false;
require_once 'Core/config.php';
require_once 'Core/Middleware.php';
require_once 'Core/MyPDO.php';
MyPDO::connect("mysql:host=$server;dbname=$db;charset=utf8", $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC));

require_once 'Core/Templator.php';
require_once 'Core/Route.php';
require_once 'App/Route/web.php';
require_once 'Core/Controller.php';
require_once 'Core/Model.php';
require_once 'Core/SQLBuilder.php';
require_once 'Core/App.php';
$title = 'Admin Panel';
Route::run();
