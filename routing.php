<?php
//Variable controlador donde meteremos los distintos controladores y acciones.
$controllers=array(

    //$controller ----- $action
    'alumno' => ['index','show','create','update','delete','error'];
    'profesor' => ['index','show','create','update','delete','error'];
    'curso' => ['index','show','create','update','delete','error'];
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
    switch ($controller) {
        case 'alumno':
            echo "<h3>Estoy en alumno</h3>"; 
            break;
        case 'profesor':
            echo "<h3>Estoy en profesor</h3>"; 
            break;
        case 'curso':
            echo "<h3>Estoy en curso</h3>"; 
            break;
        default:
            # code...
            break;
    }
}


//Todavía no hemos creado los controllers.
require_once('controllers/'.$controller.'Controller.php');