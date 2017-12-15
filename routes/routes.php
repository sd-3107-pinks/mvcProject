<?php

class routes
{
    public static function getRoutes()
    {
        //You should improve this function by making functions to create routes in a factory. I will look for this when grading
        //I also use object for the route because it has data and it's easier to access.
        $route = new route();

        $route->http_method = 'GET';
        $route->page = 'homepage';
        $route->action = 'show';
        $route->controller = 'homepageController';
        $route->method = 'show';
        $routes[] = $route;


        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'signup';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'signup';
        $routes[] = $route;
        //registering new user
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'register';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'register';
        $routes[] = $route;
        //GET METHOD index.php?page=accounts&action=all
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'all';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'all';
        $routes[] = $route;
        //GET METHOD index.php?page=accounts&action=show
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'show';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'show';
        $routes[] = $route;
        //This goes in the login form action method
        //GET METHOD index.php?page=accounts&action=login
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'login';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'login';
        $routes[] = $route;
        //GET METHOD index.php?page=accounts&action=logout
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'logout';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'logout';
        $routes[] = $route;
        //GET METHOD index.php?page=accounts&action=myProf
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'myProf';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'show_profile';
        $routes[] = $route;
        //GET METHOD index.php?page=accounts&action=edit
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'edit';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'edit_profile';
        $routes[] = $route;
        //GET METHOD index.php?page=accounts&action=update
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'update';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'update_profile';
        $routes[] = $route;
        //GET METHOD index.php?page=accounts&action=showProf
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'showProf';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'show_profile';
        $routes[] = $route;
        //GET METHOD index.php?page=accounts&action=showProf
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'editPass';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'editPass';
        $routes[] = $route;
        //GET METHOD index.php?page=accounts&action=showProf
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'updatePass';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'updatePass';
        $routes[] = $route;

        //GET METHOD index.php?page=tasks&action=show
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'show';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'show';
        $routes[] = $route;
        //GET METHOD index.php?page=tasks&action=all
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'all';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'all';
        $routes[] = $route;
        //GET METHOD index.php?page=tasks&action=allOneUser
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'allOneUser';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'allOneUser';
        $routes[] = $route;

        //YOU WILL NEED TO ADD MORE ROUTES
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'delete';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'delete';
        $routes[] = $route;
        //edit a task function
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'edit';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'editTask';
        $routes[] = $route;
        //update tasks
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'update';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'update';
        $routes[] = $route;
        //add tasks page
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'create';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'create';
        $routes[] = $route;
        //add tasks function
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'addTask';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'addTask';
        $routes[] = $route;
        return $routes;
    }
}
//this is the route prototype object  you would make a factory to return this
class route
{
    public $page;
    public $action;
    public $method;
    public $controller;
}