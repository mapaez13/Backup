<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de Datos Alquiler</title>
</head>
<body>
    <?php
    include 'conexion.php';
    $sql="CREATE DATABASE alquiler";
    $sql1="CREATE TABLE chofer(
        ci INT NOT NULL,
        nombre varchar(20),
        celular varchar(20),
        PRIMARY KEY (ci)
    )";
    $sql2="CREATE TABLE autos(
        idAuto INT NOT NULL,
        descripcion varchar (20),
        año varchar(20),
        ci INT NOT NULL,
        PRIMARY KEY (idAuto),
        FOREIGN KEY (ci) REFERENCES chofer (ci)
    )";

    mysqli_query($link,$sql) or die ("No encontramos la base de datos");
    echo("Seleccionaste tu base de datos correctamente");

    mysqli_select_db($link,'alquiler') or die ("No se pudo conectar a la base de datos");
    mysqli_query($link,$sql1) or die ("No se creo tu tabla chofer");
    echo("Tu tabla chofer se creo exitosamente");

    mysqli_select_db($link,'alquiler') or die ("No se pudo conectar a la base de datos");
    mysqli_query($link,$sql2) or die ("No se creo tu tabla chofer");
    echo("Tu tabla autos se creo exitosamente");

    mysqli_close($link);
    ?>
</body>
</html>