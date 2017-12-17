<?php


include_once "autoload.php";

class routes{

    public static function getRoutes(){


        //bellow adds routes to your program, routes match the URL and request method with the controller and method.
        //You need to follow this pattern to add new URLS
        //You should improve this function by making functions to create routes in a factory. I will look for this when grading

        //I also use object for the route because it has data and it's easier to access.


        //this is the index.php route for POST

        //This is an examole of the post for index


        //This is an examole of the post for tasks to show a task
        //GET METHOD index.php?page=tasks&action=show

        //This is an examole of the post for tasks to list tasks.  See the action matches the method name.
        //you need to add routes for create, edit, and delete
        //GET METHOD index.php?page=tasks&action=all


        //GET METHOD index.php?page=accounts&action=all
//https://web.njit.edu/~kwilliam/mvc/index.php?page=accounts&action=all

        //GET METHOD index.php?page=accounts&action=show



        //This goes in the login form action method
        //GET METHOD index.php?page=accounts&action=login




        //YOU WILL NEED TO ADD MORE ROUTES






/*
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'insertTasks';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'insertTasks';
        $routes[] = $route;*/

        //this is the route for the reg form
/*        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'register';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'register';
        $routes[] = $route;*/

/*      //this handles the reg post to create the user
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'register';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'store';
        $routes[] = $route;*/

 /*       $route = new route();
        $route->http_method = 'POST';
        $route->action = 'save';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'save';
        $routes[] = $route;
      */
/*
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'edit';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'edit';
        $routes[] = $route;
*/


/*                $route = new route();
        $route->http_method = 'POST';
        $route->action = 'save';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'save';
        $routes[] = $route;*/

       // $routes[] = utility\routeMethods::create('POST','register','accounts','accountsController','store');
/*        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'delete';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'delete';
        $routes[] = $route;*/


/*        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'delete';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'delete';
        $routes[] = $route;*/
/*        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'login';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'login';
        $routes[] = $route;
*/

/*        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'show';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'show';
        $routes[] = $route;*/


/*        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'all';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'all';
        $routes[] = $route;*/

/*        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'all';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'all';
        $routes[] = $route;
*/


/*        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'show';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'show';
        $routes[] = $route;*/

/*                $route = new route();
        $route->http_method = 'POST';
        $route->action = 'create';
        $route->page = 'homepage';
        $route->controller = 'homepageController';
        $route->method = 'create';
        $routes[] = $route;*/
/*        
        //this is the index.php route for GET
        //Specify the request method
        $route->http_method = 'GET';
        //specify the page.  index.php?page=index.  (controller name / method called
        $route->page = 'homepage';
        //specify the action that is in the URL to trigger this route index.php?page=index&action=show
        $route->action = 'show';
        //specify the name of the controller class that will contain the functions that deal with the requests
        $route->controller = 'homepageController';
        //specify the name of the method that is called, the method should be the same as the action
        $route->method = 'show';
        //this adds the route to the routes array.
        $routes[] = $route;*/

 
        $routes[] = routeFactory::create('GET','show','homepage','homepageController','show'); 
        $routes[] = routeFactory::create('POST','create','homepage','homepageController','create'); 
        $routes[] = routeFactory::create('GET','show','tasks','tasksController','show'); 
        $routes[] = routeFactory::create('GET','all','tasks','tasksController','all'); 
        $routes[] = routeFactory::create('GET','all','accounts','accountsController','all'); 
        $routes[] = routeFactory::create('GET','show','accounts','accountsController','show'); 
        $routes[] = routeFactory::create('POST','login','accounts','accountsController','login');
        $routes[] = routeFactory::create('POST','delete','tasks','tasksController','delete');
        $routes[] = routeFactory::create('POST','delete','accounts','accountsController','delete');
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

