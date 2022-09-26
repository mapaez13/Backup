<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>
<body>
    <!--Pagina para elegir entre tablas y listar datos-->
    <ul>
        <li><a href="main.php">INICIO</a></li>
        <li><a href="agregar.php">AGREGAR</a></li>
        <li><a href="listar.php">LISTAR</a></li>
        <li><a href="modificar.php">MODIFICAR</a></li>
        <li><a href="eliminar.php">ELIMINAR</a></li>
        <li class="name"><img class="nav" src="../SaltarinBD/logo_main.png"></li>
    </ul>
    <h1>En que tabla deseas listar los datos?</h1>
    <div class="flex-container"> 
        <div class="flex-uno">
            <a href="listProd.php">
                PRODUCTOR
            </a>
        </div>
        <div class="flex-uno">
            <a href="listCli.php">
                CLIENTES
            </a>
        </div>
    </div>
</body>
</html>