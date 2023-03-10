<?php

namespace App\Core;

class Router {

    protected $routes = [
        'GET' => [],
        'POST' => [],
        'DELETE' => [],
    ];

    public static function load ( $file ) {

        $router = new static;

        require $file;

        return $router;
        
    }

    public function get ( $uri, $controller ) {
        
        $this->routes['GET'][$uri] = $controller;

    }

    public function post ( $uri, $controller ) {
        
        $this->routes['POST'][$uri] = $controller;

    }

    public function destroy ( $uri, $controller ) {
        
        $this->routes['DELETE'][$uri] = $controller;

    }

    public function direct ( $uri, $requestType ) {

        if ( !array_key_exists($uri, $this->routes[$requestType]) ) {
            throw new \Exception('No route defined for this URI.');
        }
        
        $this->callAction(
            ...explode('@', $this->routes[$requestType][$uri])
        );

    }

    protected function callAction ( $controller, $action ) {

        $controller = "App\\Controllers\\{$controller}";

        $controller = new $controller;
        if ( !method_exists($controller, $action) ) {

            throw new \Exception("{$controller} does not respond to the {$action} action.");
           
        }

        $controller->$action();

    }

}