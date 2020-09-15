<?php

namespace App\Models;

class Usuarios extends \NCP\Models\Model{

    private $id;
    private $usuario;
    private $senha;
    private $email;
    private $nome;
    private $publico;

    /* Setters and Getters */
    public function setUsuario($usuario){
        $this->usuario = preg_replace('/[^a-z0-9._]/', '', strtolower($usuario));
    }

    public function setSenha($senha){
        $this->senha = password_hash($senha, PASSWORD_BCRYPT, array('cost' => 12));
    }

    public function setEmail($email){
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        
        if($email == null){
            throw new \Exception('Email inválido');
        }else{
            $this->email = $email;
        }

    }

    public function setNome($nome){
        $this->nome = preg_replace('/[^a-zA-Z ]/', '', strtolower($nome));
    }

    public function setPublico(bool $publico){
        $this->publico = $publico;
    }

    public function __get($attr){
        return $this->$attr;
    }


    public function cadastrar(){
        $query = 'INSERT INTO ncp_users(nome, usuario, senha, email, publico) VALUES (:nome, :usuario, :senha, :email, :publico)';
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':nome', $this->__get('nome'));
        $stmt->bindValue(':usuario', $this->__get('usuario'));
        $stmt->bindValue(':senha', $this->__get('senha'));
        $stmt->bindValue(':email', $this->__get('email'));
        $stmt->bindValue(':publico', 'true');
        $stmt->execute();

        return $this;
    }


}