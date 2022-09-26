<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>
<body>
    <!--Pagina para elegir entre tablas y eliminar datos-->
    <ul>
        <li><a href="main.php">INICIO</a></li>
        <li><a href="agregar.php">AGREGAR</a></li>
        <li><a href="listar.php">LISTAR</a></li>
        <li><a href="modificar.php">MODIFICAR</a></li>
        <li><a href="eliminar.php">ELIMINAR</a></li>
        <li class="name"><img class="nav" src="../SaltarinBD/logo_main.png"></li>
    </ul>
    <h1>En que tabla deseas eliminar los datos?</h1>
    <div class="flex-container"> 
        <div class="flex-uno">
            <a href="elProd.php">
                PRODUCTOR
            </a>
        </div>
        <div class="flex-uno">
            <a href="elCli.php">
                CLIENTES
            </a>
        </div>
    </div>
</body>
</html>