<?php 

namespace NCP\Models;


abstract class Model{

    protected $db;

    public function __construct($db){
        $this->db = $db;
    }

}