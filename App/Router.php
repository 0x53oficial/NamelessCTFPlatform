<?php 

namespace App;

class Router extends \NCP\Init\Bootstrap{

    public function __construct(){
        $this->initRoute();
        $this->run($this->getPath());
    }

    /* Routes */

    private function initRoute(){
        
        $routes['index'] = array(
            'route' => '/',
            'controller' => 'IndexController',
            'action' => 'index'
        );

        $routes['ranking'] = array(
            'route' => '/ranking',
            'controller' => 'IndexController',
            'action' => 'ranking'
        );

        $routes['login'] = array(
            'route' => '/login',
            'controller' => 'LoginController',
            'action' => 'login'
        );

        $routes['recuperar-senha'] = array(
            'route' => '/recuperar-senha',
            'controller' => 'LoginController',
            'action' => 'recuperarSenha'
        );

        $routes['cadastro'] = array(
            'route' => '/cadastro',
            'controller' => 'LoginController',
            'action' => 'cadastro'
        );
        
        $this->setRoutes($routes);

    }

}