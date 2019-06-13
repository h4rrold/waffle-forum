<?php

class CabinetController extends Controller{
    public function getCabinet($params = [])
    {
        echo $this->buildPage(output('cabinet', $params));
    }


}