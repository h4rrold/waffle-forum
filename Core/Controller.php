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

    public function buildPage($content)
    {
        ob_start();
        echo output('header');
        echo $content;
        echo output('footer');
        return ob_get_clean();

    }

}
