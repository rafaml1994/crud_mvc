<?php

class Connection{

    function __construct(){

    }
    //Como es una función importante se puede poner static para acceder a ella fácilmente
    public static function getConnect(){
        $conn = new PDO("mysql:host=localhost;dbname=mvc",'root','');
        return $conn;
    }
}