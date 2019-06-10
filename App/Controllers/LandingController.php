<?php


class LandingController extends Controller
{
    public function out($params = [])
    {
        echo $this->buildPage(output('landing', $params));
    }
}