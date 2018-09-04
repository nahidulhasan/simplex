<?php

class Router {


    public $routes = [

        'GET' => [],

        'POST' => []

    ];


    public static function load($file)
    {
        $router = new static();

        require  $file;

        return $router;

    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }


    public  function register( array $routes)
    {
        $this->routes = $routes;

    }

    public function direct($uri, $requestType)
    {

        if(array_key_exists($uri, $this->routes[$requestType]))
        {
            return $this->routes[$requestType][$uri];
        }


        throw new Exception('No routes defined for this uri');


    }

}