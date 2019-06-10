<?php

class HomeController extends Controller
{
    public function out($params = [])
    {
        echo $this->buildPage(output('home', $params));
    }
}