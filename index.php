<?php
if(dirname($_SERVER['SCRIPT_NAME']) == '/')
{
    define(ROUTE_PATH, '');
}
else define(ROUTE_PATH, $_SERVER['SCRIPT_NAME']);

ob_start();
session_start();
require_once 'Core/config.php';
require_once "Core/Middleware.php";
require_once 'Core/MyPDO.php';
require_once 'Core/Templator.php';
require_once 'Core/Route.php';
require_once 'App/Route/web.php';
require_once 'Core/Controller.php';
require_once 'Core/Model.php';
require_once 'Core/SQLBuilder.php';
require_once 'Core/App.php';

