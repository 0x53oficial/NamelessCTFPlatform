<?php

namespace App;

class Connection{

    public static function getDB(){
        $pdo = new \PDO(
            "mysql:host=localhost;dbname=nameless;charset=utf8",
            "root",
            ""
        );

        return $pdo;
    }


}