<?php
class Controller{
public $middleware = [];

    /**
     * @return array
     */
    public function getMiddleware(): array
    {
        return $this->middleware;
    }

    /**
     * @param array $middleware
     */
    public function setMiddleware(array $middleware): void
    {
        $this->middleware = $middleware;
    }

    protected function redirect($url){
        header('Location: '.$url);
    }

    protected function load_model($name){
        if (file_exists('App/'.$name.'.php')) {
            require 'App/'.$name.'.php';
        } else {
            throw new Exception('Model file has not found');
        }
        return new $name;
    }

}
