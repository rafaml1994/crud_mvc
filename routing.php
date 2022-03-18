<?php
//Variable controlador donde meteremos los distintos controladores y acciones.
$controllers=array(

    //$controller ----- $action
    'alumno' => ['index','show','create','save','update','delete','error'],
    'profesor' => ['index','show','create','update','delete','error'],
    'curso' => ['index','show','create','update','delete','error']
);

//El controlador es el objeto/clase y la acción es el método.

//Ahora usamos un identificador de array
if (array_key_exists($controller,$controllers)) {
    if (in_array($action,$controllers[$controller])) {
        call($controller,$action);
    }else {
        call($controller,'error');
    }
}else {
    call($controller,'error');
}

//Definimos la función "call()" que es la encargada del routing.

function call($controller,$action){
require_once('controllers/'.$controller.'Controller.php');   
    switch ($controller) {
        case 'alumno':
            //Usamos los métodos del modelo que se necesite en cada caso.
            require_once('model/alumno.php');
            $controller=new AlumnoController(); 
            break;
        case 'profesor':
            //Usamos los métodos del modelo que se necesite en cada caso.
            require_once('model/profesor.php');
            $controller= new ProfesorController();
            break;
        case 'curso':
            //Usamos los métodos del modelo que se necesite en cada caso.
            require_once('model/curso.php');
            $controller= new CursoController(); 
            break;
        default:
            # code...
            break;
    }//Cierra swicht
    $controller->{$action}();
}


