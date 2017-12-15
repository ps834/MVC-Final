<?php

include '../routes/routes.php';
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


?>