<?php

//Lo interesante sería implementar una interfaz. Para no tener que introducir a mano todos los métodos de cada controller.

class ProfesorController{

    //Atributos de clase. 

    //Constructor.
    function __construct(){

    }
    //Si hicieran falta los Setters y Getters.

    //Resto de métodos. - IMPLEMENTACIÓN DE APIService (CRUD).
    function index(){
        require_once('views/profesor/bienvenido.php');
    }
    function registro(){
        require_once('views/profesor/register.php');
    }
//Una ApiService: Es una recopilación de métodos.

//Una forma interesante de consumir una ApiService son las Inyecciones de dependencia (DI). 




} //Cierra la clase.