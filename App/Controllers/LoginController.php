<?php 

namespace App\Controllers;

class LoginController extends \NCP\Controllers\Action{

    public function login(){
        $this->render('login');
    }

}