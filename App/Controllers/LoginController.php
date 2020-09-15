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

    public function cadastrar(){
        $conn = \App\Connection::getDB();
        $usuario = new \App\Models\Usuarios($conn);
        
        try{
            $usuario->setEmail($_POST['email']);
            $usuario->setUsuario($_POST['usuario']);
            $usuario->setSenha($_POST['senha']);
            $usuario->setNome($_POST['nome']);
            $usuario->cadastrar();

        } catch(\Exception $e){
            session_start();
            $_SESSION['errors'] = array($e->getMessage()); 
            header('Location: /cadastro');
            exit;
        }
    
        
    }

}