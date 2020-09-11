<?php

namespace App\Controllers;

class IndexController extends \NCP\Controllers\Action{

   public function index(){
       $this->render('index');
   }

   public function ranking(){
       echo 'ranking';
   }

}