
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
    //Requirimos la conexión de la Db en el index.
    
    require_once('connection.php');

    //Cabecera 

    //Creamos la variable controller que guardará la petición get. 
    if(isset($_GET['controller'])&&isset($_GET['action'])){
        $controller=$_GET['controller'];
        $action=$_GET['action'];
    }else{
        $controller='alumno';
        $action='index';
    }
    require_once('views/layouts/layout.php');
    //Comprobar datos:
    echo $controller;
    echo $action;
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>