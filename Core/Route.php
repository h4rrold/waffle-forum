<?php
require_once "App.php";
class Route
{
    use Singleton;
    private $routes = [];
    private $params = [];
    private $cor_route;

    public static function get($route, $controll)
    {
        self::getInstance()->routes[] = [$route, $controll];
        return self::getInstance();
    }

    public static function post($route, $controll)
    {
        self::getInstance()->routes[] = [$route, $controll];
        return self::getInstance();
    }

    public function middleware($middleware)
    {

        $temp = end($this->routes);
        $mw = $temp[2] ?? [];
        $mw[] = $middleware;
        $temp[2] = $mw;
        array_pop($this->routes);
        $this->routes[] = $temp;
        return self::getInstance();
    }

    public function parse()
    {
        $correct_route = [];
        $uri = $_GET['route'] ?? substr($_SERVER['REQUEST_URI'],6);


        $arr_route = explode('/', $uri);
        if($uri == ''){
            return ['LandingController', 'out'];
        }

        foreach ($this->routes as $route) {
            $find_route = explode('/', $route[0]);
            $n = 0;
            if (count($find_route) == count($arr_route)) {
                for ($i = 0; $i < count($arr_route); $i++) {
                    if ($find_route[$i]{0} == '{') $n++;
                    else{
                        if ($arr_route[$i] == $find_route[$i]) $n++;
                        else break;}
                }
            } else continue;
            if ($n == count($arr_route)) {
                $correct_route = $route;
                break;
            }
        }
        if(empty($correct_route)){http_response_code(404);
        header('Location:http://localhost/site/pages/404.html');
        }
        $route = explode('/', $correct_route[0]);
        for($i = 0; $i < count($route); $i++) {
            if ($route[$i]{0} == '{') $this->params[] = $arr_route[$i];
        }
        
        $this->cor_route = $correct_route;
        $contrl = explode('@', $correct_route[1]);
        return $contrl;
    }

    public function getAllMiddleware($from_controller)
    {
        $middleware = [];
        foreach (App::getMiddleware() as $value){
            $middleware[] = $value;
        }
        foreach ($from_controller->middleware as $value){
            $middleware[] = $value;
        }
        foreach ($this->cor_route[2] ?? [] as $value){
            $middleware[] = $value;
        }
        foreach ($middleware as $value){
            $obj = new $value();
            if($obj->handle())break;
        }
    }

    public static function run()
    {
        $ctrl = self::getInstance()->parse();
        $obj = new $ctrl[0]();
        self::getInstance()->getAllMiddleware($obj);
        if(empty(self::getInstance()->params)) call_user_func([$obj, $ctrl[1]]);
        else {
            call_user_func_array([$obj, $ctrl[1]], self::getInstance()->params);
        }
    }
}
