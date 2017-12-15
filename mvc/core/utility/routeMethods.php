<?php

namespace utility;


class routeMethods{



    public static function create($http_method,$action,$page,$controller,$method) {
        
        $route = new route();
        $route->http_method = $http_method;
        $route->action = $action;
        $route->page = $page;
        $route->controller = $controller;
        $route->method = $method;
        return $route;
       

    }
}

class route{

    public $page;
    public $action;
    public $method;
    public $controller;
}


?>