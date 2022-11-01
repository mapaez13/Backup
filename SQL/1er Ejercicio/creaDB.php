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

    $sql="CREATE DATABASE colegio";

    //primer paso: conectar el archivo con el servidor
    $connection=mysqli_connect("localhost", "paez", "12345678")or die("Error de conexion al servidor");
    echo("Conexion al servidor exitosa");
    mysqli_query($connection,$sql) or die ("No se pudo ejecutar el comando sql");
    echo("<br>Base de datos exitosamente");
    ?>
</body>
</html>