<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD_MVC</title>
</head>
<body>
    <h1>CRUD_MVC</h1>
    <?php
    //Creamos la variable controller que guardará la petición get.
    $controller=$_GET['controller'];
    $action=$_GET['action'];

    
    if(isset($controller)&&isset($action)){

    }
    //Comprobar datos:
    echo $controller;
    echo $action;
    ?>
</body>
</html>