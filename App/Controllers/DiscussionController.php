<?php

class DiscussionController extends Controller
{
    public function out()
    {
        echo output('discussion', []);
    }

    public function getTopic()
    {
        $this->out();
    }
}