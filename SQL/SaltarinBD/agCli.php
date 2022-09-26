<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Agregar Cliente</title>
</head>
<body>
    <!--Aqui agregamos todos nuestros datos para la tabla-->
    <ul>
        <li><a href="main.php">INICIO</a></li>
        <li><a href="agregar.php">AGREGAR</a></li>
        <li><a href="listar.php">LISTAR</a></li>
        <li><a href="modificar.php">MODIFICAR</a></li>
        <li><a href="eliminar.php">ELIMINAR</a></li>
        <li class="name"><img class="nav" src="../SaltarinBD/logo_main.png"></li>
    </ul>
    <h1>Carga Articulo</h1>
    <div class="flex-container">
        <div class="flex-uno">
            <form action="procesaCli.php" method="post">
                <p>Codigo: <input type="number" name="codigo"></p>
                <p>Nombre: <input type="text" name="nombre"></p>
                <p>Dirección: <input type="text" name="direccion"></p>
                <p>Teléfono: <input type="number" name="telefono"></p>
                <input type="submit" value="Registrar">
            </form>
        </div>
    </div>
</body>
</html>