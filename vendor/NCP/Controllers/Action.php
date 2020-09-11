<?php 

namespace NCP\Controllers;

abstract class Action{

    protected $view;

    public function __construct(){
        $this->view = new \StdClass();
    }

    protected function render($view){
        $view = preg_replace('/[^a-zA-Z]/', '', $view);
        $path = str_replace('App\\Controllers\\', '', get_class($this));
        $path = str_replace('Controller', '', $path);
        $path = strtolower($path);

        require_once '../App/Views/'.$path.'/'.$view.'.phtml';

    }


}