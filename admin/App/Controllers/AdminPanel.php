<?php

require_once("App/Users.php");
require_once("App/Groups.php");
require_once("App/Directories.php");
require_once("App/Forum.php");
class AdminPanel extends Controller
{

    public function draw()
    {
        $users = new Users();
        $user = ($users->getUserById(intval($_SESSION['id'])))[0];
        //var_dump($user);
        $page = null;
        if(Route::getCorrectRoute() != 'panel') $page = Route::getCorrectRoute();

        echo output("panel", ['username' => $user['nickname'], 'lastlogin' => $user['last_login'], 'lastip' => $user['last_ip'], 'page' => $page]);
    }

    //save changes
    public function saveForumSettings()
    {
        $forum = new Forum();
        echo(json_encode($forum->updateForumSettings()));
    }

    public function saveUsers()
    {
        $users = new Users();
        echo(json_encode($users->updateUserById()));
    }
//responses from api

    public function saveGroups()
    {   
        $groups = new Groups();
        echo(json_encode($groups->updateGroupById()));
    }

    public function saveDirectories()
    {
        $directories = new Directories();
        echo(json_encode($directories->updateAllDirectories()));
    }

    //users
    public function getUsers()
    {
        $users = new Users();
        echo(json_encode($users->getAllUsers()));
    }

    public function getUser()
    {
        $users = new Users();
        echo(json_encode($users->getUserById()));
    }

    //groups
    public function getGroups()
    {
        $groups = new Groups();
        echo(json_encode($groups->getAllGroups()));
    }

    public function getGroup()
    {
        $groups = new Groups();
        echo(json_encode($groups->getGroupById()));
    }

    //directories
    public function getDirectories()
    {
        $directories = new Directories();
        echo(json_encode($directories->getAllDirectories()));
    }

    public function getDirectory()
    {
        $directories = new Directories();
        echo(json_encode($directories->getDirectoryById()));
    }
}