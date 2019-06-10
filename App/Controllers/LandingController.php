<?php


class LandingController extends Controller
{
    public function out($params = [])
    {
        echo output('landing', $params);
    }
}