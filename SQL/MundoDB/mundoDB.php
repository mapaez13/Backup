<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>
<body>
    <?php
    include 'conexion.php';

    $sql="CREATE DATABASE mundoDB";

    $sql1="CREATE TABLE vendedor(
        idVendedor INT AUTO_INCREMENT,
        username varchar (20),
        password varchar (20),
        email varchar (30),
        foto longblob,
        PRIMARY KEY (idVendedor)
    )";
    $sql2="CREATE TABLE articulos(
        codigo int,
        nombre varchar (20),
        precioCompra int,
        precioPublico int,
        stock int,
        fotoArticulo longblob,
        PRIMARY KEY (codigo)
    )";
    $sql3="CREATE TABLE ventas(
        idVenta int AUTO_INCREMENT,
        idVendedor int,
        fecha datetime,
        codigoArticulo int,
        ganancia int,
        PRIMARY KEY (idVenta),
        FOREIGN KEY (idVendedor) REFERENCES vendedor (idVendedor),
        FOREIGN KEY (fecha) REFERENCES articulos (codigo)
    )";
    ?>
</body>
</html>