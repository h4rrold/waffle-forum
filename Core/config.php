<?php
if(getenv("CLEARDB_DATABASE_URL") !== false)
{
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);
}
else 
{
    $server = 'localhost';
    $username = 'root';
    $password = 'admin';
    $db = '1waffle_forum';
}