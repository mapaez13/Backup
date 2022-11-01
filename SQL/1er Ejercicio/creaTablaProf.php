<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $sql="CREATE TABLE profesores(
        CI int NOT NULL,
        firstName varchar(255),
        lastName varchar(255),
        age int,
        subjectTxaught varchar(255),
        PRIMARY KEY (CI)
        )";
    $connection=mysqli_connect("localhost", "paez", "12345678")or die("Error de conexion al servidor");
    echo("Conexion al servidor exitosa");
    #esta funcion sirve para seleccionar la base de datos
    mysqli_select_db($connection, "colegio")or die("No existe la base de datos");
    mysqli_query($connection,$sql) or die ("No se pudo ejecutar el comando sql");
    echo("<br>La tabla alumnos se creo exitosamente");
    mysqli_close($connection);
    ?>
</body>
</html>