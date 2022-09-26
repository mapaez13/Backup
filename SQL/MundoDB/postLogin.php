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
    <title>Elementos</title>
</head>
<body>
    <ul>
        <li class="name"><?php echo($_SESSION['name']);?></li>
        <li class="name"><img width="50px" alt="Sin foto" src="data:image/jpg;base64,<?php echo (base64_encode ($_SESSION['foto']));?>"></li>
    </ul>
    <h1>Que queres hacer?</h1>
    
    <div class="flex-container">
        <a href="cargaArticulo.php"><div class="flex-uno">Carga Articulo</div></a>
        <a href="venta.php"><div class="flex-uno">Venta</div></a>
        <a href="consultaVentas.php"><div class="flex-uno">Listar Ventas</div></a>
        <a href="consultaArticulos.php"><div class="flex-uno">Listar articulos</div></a>
    </div>
</body>
</html>