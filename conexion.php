<?php

// Connection database.
class Conexion {
    static public function Conectar() {
        $link = new PDO("mysql:host=localhost; dbname=php_mysql", "usuario", "Password123*");
        $link->exec("set names utf8");
        return $link;
    }    
}
