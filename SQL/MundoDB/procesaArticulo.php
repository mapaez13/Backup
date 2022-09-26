<?php
session_start();
if (!(isset ($_SESSION['idUser']))){
    header ("Location:error.html"); 
}?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Procesa Articulo</title>
</head>
<body>
    <ul>
        <li><a href="postLogin.php">Home</a></li>
        <li><a href="cargaArticulo.php">Cargar Articulos</a></li>
        <li><a href="venta.php">Cargar Ventas</a></li>
        <li><a href="consultaArticulos.php">Listar Articulos</a></li>
        <li><a href="consultaVentas.php">Listar Ventas</a></li>
        <li class="name"><?php echo($_SESSION['name']);?></li>
        <li class="name"><img width="50px" alt="Sin foto" src="data:image/jpg;base64,<?php echo (base64_encode ($_SESSION['foto']));?>"></li>
    </ul>
    <?php
    include 'conexion.php';

    $codigo=$_REQUEST['codigo'];
    $nombre=$_REQUEST['nombre'];
    $precioCompra=$_REQUEST['precioCompra'];
    $precioPublico=$_REQUEST['precioPublico'];
    $cant=$_REQUEST['cant'];

    $fotoArticulo='archivos/'.basename($_FILES['imagen']['name']);
    move_uploaded_file($_FILES['imagen']['tmp_name'], $fotoArticulo);

    $select;
    $sql="INSERT INTO articulos (codigo,nombre,precioCompra,precioPublico,Stock,fotoArticulo) VALUES ($codigo,'$nombre',$precioCompra,$precioPublico,$cant,'$fotoArticulo')";
    mysqli_query($link,$sql) or die ("Ejecutar al insertar datos");
    echo("<h1> Se cargo correctamente</h1>");
    mysqli_close($link);
    ?>
</body>
</html>