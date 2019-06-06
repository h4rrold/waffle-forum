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
        $forum->updateForumSettings();
       // $this->draw();
        header("location: settings4");
    }

    public function saveUsers()
    {
        $users = new Users();
        $users->updateUserById();
       // $this->draw();
        header("location: settings1");
    }

    public function saveGroups()
    {   
        $groups = new Groups();
        $groups->updateGroupById();
        //$this->draw();
        header("location: settings2");
    }

    public function saveDirectories()
    {
        $directories = new Directories();
        $directories->updateDirectoryById();
        //$this->draw();
        header("location: settings3");
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