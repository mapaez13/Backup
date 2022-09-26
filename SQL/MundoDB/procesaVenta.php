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
    <title>Ventas</title>
</head>
<body>
    <ul>
        <li><a href="postLogin.php">Home</a></li>
        <li><a href="cargaArticulo.html">Cargar Articulos</a></li>
        <li><a href="venta.php">Cargar Ventas</a></li>
        <li><a href="consultaArticulos.php">Listar Articulos</a></li>
        <li><a href="consultaVentas.php">Listar Ventas</a></li>
        <li class="name"><?php echo($_SESSION['name']);?></li>
        <li class="name"><img width="50px" alt="Sin foto" src="data:image/jpg;base64,<?php echo (base64_encode ($_SESSION['foto']));?>"></li>
    </ul>
    <?php
    include 'conexion.php';

    $sql="select * from articulos";
    $resultado=mysqli_query($link,$sql);
    $nfilas=mysqli_num_rows ($resultado);
    $fila=mysqli_fetch_array($resultado);
    $codArticulo=$_REQUEST['codigo'];
    $idVendedor=$_REQUEST['idVendedor'];
    $nombre=$_REQUEST['nombre'];
    $precioPublico=$fila['precioPublico'];
    $cantidad=$_REQUEST['cantidad'];
    $precioCompra=$fila['precioCompra'];

    if ($cantidad > $fila['Stock']){
        echo "<script>
        alert('No existe la cantidad necesaria! ');
        window.location.href='ventas.php';
        </script>";
        }
        else {
    
    $total=$precioPublico*$cantidad;
    $ganancia=($precioPublico-$precioCompra)*$cantidad;
    $stock=$fila['Stock']-$cantidad;

    $sql2="update articulos set Stock=$stock where codigo=$codArticulo";
    mysqli_query($link,$sql2);

    $sql1="INSERT INTO ventas (idVendedor,codigoArticulo,ganancia) VALUES ($idVendedor,$codArticulo,$ganancia)";
    mysqli_query($link,$sql1);
    echo "<script>
               alert('Total a Abonar '+ $total);
               window.location.href='venta.php';
             </script>";
               }
    ?>
</body>
</html>