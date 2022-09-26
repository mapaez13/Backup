<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de Datos Empresa</title>
</head>
<body>
    <?php
    include 'conexion.php';
    $sql="CREATE DATABASE empresa";
    $sql1="CREATE TABLE departamentos(
        codigoDep int NOT NULL,
        nombreDep varchar(100),
        presupuestoDep int NOT NULL,
        PRIMARY KEY (codigoDep)
        )";
    $sql2="CREATE TABLE empleados(
        DNI varchar(8),
        nombreEmp varchar(100),
        apellidoEmp varchar(255),
        departEmp int NOT NULL,
        PRIMARY KEY (DNI),
        FOREIGN KEY (departEmp) REFERENCES departamentos (codigoDep)
        )";

    $conexion=$link;
    mysqli_query($conexion,$sql) or die ("No se pudo ejecutar el comando sql");
    echo("<br>Base de datos creada exitosamente!");

    mysqli_select_db($conexion, "empresa")or die ("No existe la base de datos");
    mysqli_query($conexion,$sql1) or die ("No se pudo ejecutar el comando sql");
    echo("<br>La tabla departamentos se creo exitosamente");
    mysqli_query($conexion,$sql2) or die ("No se pudo ejecutar el comando sql");
    echo("<br>La tabla empleados se creo exitosamente");
    mysqli_close($conexion);
    ?>
</body>
</html>