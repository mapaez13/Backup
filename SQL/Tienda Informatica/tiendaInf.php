<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de Datos Tienda Informatica</title>
</head>
<body>
    <?php
    include 'conexion.php';
    $sql="CREATE DATABASE tiendaInf";
    $sql1="CREATE TABLE fabricantes(
        codigoFab int NOT NULL,
        nombreFab varchar(255),
        PRIMARY KEY (codigoFab)
        )";
    $sql2="CREATE TABLE articulos(
        codigoArt int NOT NULL,
        codigoFab int NOT NULL,
        nombreArt varchar (255),
        precio int NOT NULL,
        PRIMARY KEY (codigoArt)
        )";
    
    $conexion=$link;
    mysqli_query($conexion,$sql) or die ("No se pudo ejecutar el comando sql");
    echo("<br>Base de datos creada exitosamente!");

    mysqli_select_db($conexion, "tiendaInf")or die ("No existe la base de datos");
    mysqli_query($conexion,$sql1) or die ("No se pudo ejecutar el comando sql");
    echo("<br>La tabla fabricantes se creo exitosamente");
    mysqli_query($conexion,$sql2) or die ("No se pudo ejecutar el comando sql");
    echo("<br>La tabla articulos se creo exitosamente");
    mysqli_close($conexion);
    ?>
</body>
</html>