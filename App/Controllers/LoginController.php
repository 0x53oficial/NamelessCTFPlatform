<?php 

namespace App\Controllers;

class LoginController extends \NCP\Controllers\Action{

    public function login(){
        $this->render('login');
    }

    public function cadastro(){
        $this->render("cadastro");
    }

    public function recuperarSenha(){
        $this->render("recuperarsenha");
    }

}