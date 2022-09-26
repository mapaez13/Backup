<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de Datos</title>
</head>
<body>
    <!--Creacion de Base de Datos y tablas-->
    <?php
    include 'conexion.php';
    $sql="CREATE DATABASE saltarinBD";
    $sql1="CREATE TABLE Productor(
        codigo int NOT NULL,
        descripcion varchar(255),
        precio int NOT NULL,
        marca varchar (50),
        PRIMARY KEY (codigo)
        )";
    $sql2="CREATE TABLE Clientes(
        codCliente int NOT NULL,
        nombre varchar (50),
        direccion varchar (255),
        telefono int NOT NULL,
        PRIMARY KEY (codCliente)
        )";

    $conexion=$link;
    mysqli_query($conexion,$sql) or die ("No se pudo ejecutar el comando sql");
    echo("<br>Base de datos creada exitosamente!");

    mysqli_select_db($conexion, "saltarinBD")or die ("No existe la base de datos");
    mysqli_query($conexion,$sql1) or die ("No se pudo ejecutar el comando sql");
    echo("<br>La tabla productor se creo exitosamente");
    mysqli_query($conexion,$sql2) or die ("No se pudo ejecutar el comando sql");
    echo("<br>La tabla clientes se creo exitosamente");
    mysqli_close($conexion);
    ?>
</body>
</html>