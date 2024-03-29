<?php


class App
{
    use Singleton;
    private $middleware= ["Auth"];

    /**
     * @return array
     */
    public static function getMiddleware(): array
    {
        return self::getInstance()->middleware;
    }

    /**
     * @param array $middleware
     */
    public static function setMiddleware(array $middleware): void
    {
        self::getInstance()->middleware = $middleware;
    }

}
require_once 'Middleware/Auth.php';