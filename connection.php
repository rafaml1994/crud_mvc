<?php

class Connection{

    function __construct(){

    }
    //Como es una función importante se puede poner static para acceder a ella fácilmente
    public static function getConnect(){
        $conn = new PDO("pgsql:host=localhost;port=5432;dbname=mvc",'postgres','campusfp');
        return $conn;
    }
}