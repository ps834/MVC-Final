<?php


include_once "autoload.php";

class routes{

    public static function getRoutes(){

 
        $routes[] = routeFactory::create('GET','show','homepage','homepageController','show'); 
        $routes[] = routeFactory::create('POST','create','homepage','homepageController','create'); 
        $routes[] = routeFactory::create('GET','show','tasks','tasksController','show'); 
        $routes[] = routeFactory::create('GET','all','tasks','tasksController','all'); 
        $routes[] = routeFactory::create('GET','all','accounts','accountsController','all'); 
        $routes[] = routeFactory::create('GET','show','accounts','accountsController','show'); 
        $routes[] = routeFactory::create('POST','login','accounts','accountsController','login');
        $routes[] = routeFactory::create('GET','delete','tasks','tasksController','delete');
        $routes[] = routeFactory::create('GET','delete','accounts','accountsController','delete');
        $routes[] = routeFactory::create('POST','delete','accounts','accountsController','delete');
        $routes[] = routeFactory::create('GET','edit','accounts','accountsController','edit');
        $routes[] = routeFactory::create('POST','save','accounts','accountsController','save');
        $routes[] = routeFactory::create('POST','save','tasks','tasksController','save');
        $routes[] = routeFactory::create('POST','insertTasks','tasks','tasksController','insertTasks');
        $routes[] = routeFactory::create('POST','insertTasks','tasks','tasksController','insertTasks');
        $routes[] = routeFactory::create('GET','register','accounts','accountsController','register');
        $routes[] = routeFactory::create('POST','register','accounts','accountsController','store');
        $routes[] = routeFactory::create('GET','logout','accounts','accountsController','logout');
        $routes[] = routeFactory::create('GET','goToProfile','tasks','tasksController','goToProfile');
        $routes[] = routeFactory::create('GET','getMyProfile','accounts','accountsController','getMyProfile');
        $routes[] = routeFactory::create('GET','callEditProfile','accounts','accountsController','callEditProfile');
        $routes[] = routeFactory::create('GET','confirmDelete','accounts','accountsController','confirmDelete');
        $routes[] = routeFactory::create('GET','confirmDelete','tasks','tasksController','confirmDelete');
        return $routes;
    }

}


class routeFactory{



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

