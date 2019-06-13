<?php

class CabinetController extends Controller{
    public function getCabinet($params = [])
    {
        echo $this->buildPage(output('cabinet', $params));
    }

    public function logout()
    {
        unset($_SESSION['logged-user']);
        if (isset($_COOKIE['session_id'])) {
            setcookie('session_id', "", 1);
            unset($_COOKIE['session_id']);
        }
        session_regenerate_id();
        header('Location: '.ROUTE_PATH);
    }
}