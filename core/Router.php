<?php

namespace App\Core;


class Router
{

    /**
     * @var array
     * Storage location for all routes
     */
    public $routes = [
        'GET' => [],
        'POST' => []
    ];


    /**
     * @param $file
     * @return static
     * Takes a file with route definitions and loads them
     */
    public static function load($file)
    {
        // instantiate the router
        $router = new static;
        // require route definitions
        require $file;
        return $router;
    }

    /**
     * @param $uri
     * @param $controller
     * Method for defining GET request routes
     */
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    /**
     * @param $uri
     * @param $controller
     * Method for defining POST request routes
     */
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }


    /**
     * @param $uri
     * @param $requestType
     * @return mixed
     * @throws \Exception
     * If a route is defined that matches the uri argument, this method will attempt
     * to call the controller method for that route
     */
    public function direct($uri, $requestType)
    {
        if(array_key_exists($uri, $this->routes[$requestType])) {
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }

        throw new \Exception("No route defined for {$uri}");
    }


    /**
     * @param $controller
     * @param $action
     * @return mixed
     * * @throws \Exception
     * instantiates the controller variable and attempts to call the action method on that controller
     */
    private function callAction($controller, $action)
    {
        $controller = "App\\Controller\\{$controller}";
        $controller = new $controller;

        if(!method_exists($controller, $action)) {
            throw new \Exception("{$controller} has no method {$action}");
        }

        return $controller->$action();
    }

}