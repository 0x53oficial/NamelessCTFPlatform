<?php

namespace NCP\Init;

abstract class Bootstrap{

    /* Attributes */
    private $routes;

    /* Getter and Setter */
    protected function getRoutes(){
        return $this->routes;
    }

    protected function setRoutes(Array $routes){
        $this->routes = $routes;
    }

    /* Methods */
    protected function getPath(){
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    protected function run($uri){

        $found = false;

        foreach($this->getRoutes() as $key => $route){
            
            if($uri == $route['route']){
                $found = true;

                $class = 'App\\Controllers\\'.ucfirst($route['controller']);
                $action = $route['action'];
                $controller = new $class;
                $controller->$action();
                
            }

        }

        if(!$found){
            http_response_code(404);
            echo '404 not found';
        }

    }




}