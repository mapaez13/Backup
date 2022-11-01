+<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIBRERIA</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de Datos</title>
</head>
<body>
    <?php

    $sql="CREATE DATABASE libreria1";
    $sql1="CREATE TABLE libros(
        idLibro int NOT NULL,
        yearDate int,
        nationality varchar(255),
        PRIMARY KEY (idLibro)
        )";

    $sql2="CREATE TABLE autor(
        idAutor int NOT NULL,
        firstName varchar(255),
        lastName varchar(255),
        yearBorn int,
        nationality varchar(255),
        PRIMARY KEY (idAutor)
        )";    
        
    $sql3="CREATE TABLE editorial(
        idEditorial int NOT NULL,
        firstName varchar(255),
        eAddress varchar(255),
        email varchar(255),
        PRIMARY KEY (idEditorial)
        )";

    //primer paso: conectar el archivo con el servidor
    $connection=mysqli_connect("localhost", "paez", "12345678") or die("Error de conexion al servidor");
    echo("Conexion al servidor exitosa");
    mysqli_query($connection,$sql) or die ("No se pudo ejecutar el comando sql");
    echo("<br>Base de datos exitosamente");

    mysqli_select_db($connection, "libreria1") or die("No existe la base de datos");
    mysqli_query($connection,$sql1) or die ("No se pudo ejecutar el comando sql");
    echo("<br>La tabla libros se creo exitosamente");

    mysqli_select_db($connection, "libreria1") or die("No existe la base de datos");
    mysqli_query($connection,$sql2) or die ("No se pudo ejecutar el comando sql");
    echo("<br>La tabla autor se creo exitosamente");

    mysqli_select_db($connection, "libreria1") or die("No existe la base de datos");
    mysqli_query($connection,$sql3) or die ("No se pudo ejecutar el comando sql");
    echo("<br>La tabla editorial se creo exitosamente");
    mysqli_close($connection);
    ?>
</body>
</html>
