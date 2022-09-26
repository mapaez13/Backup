<?php
session_start();
if (!(isset ($_SESSION['idUser']))){
    header ("Location:error.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Cargar Articulo</title>
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
    <h1>Carga Articulo</h1>
<div class="flex-container">
    <form action="procesaArticulo.php" method="post" enctype="multipart/form-data">
        <p>Codigo: <input type="text" name="codigo"></p>
        <p>Nombre: <input type="text" name="nombre"></p>
        <p>Precio de Compra: <input type="number" name="precioCompra"></p>
        <p>Precio al Publico: <input type="number" name="precioPublico"></p>
        <p>Cantidad: <input type="number" name="cant"></p>
        <p>Foto: <input type="file" name="imagen"></p>
        <input type="submit" value="Registrar Articulo">
    </form>
</div>
</body>
</html>