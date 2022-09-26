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
    <title>Consulta Ventas</title>
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
<div class="flex-container">
    <?php
    include 'conexion.php';
    $sql="SELECT * FROM ventas";
    $valor="SELECT * FROM mundosa";
    $select;
    $tabla=mysqli_query($link,$sql) or die ("Error en la consulta");
    $cantFilas=mysqli_num_rows($tabla);
        echo("<table border='2'>");
        for ($z=0;$z<=$cantFilas;$z++){
        if ($z==0){
            echo("
            <th>idVenta</th>
            <th>idVendedor</th>
            <th>Fecha</th>
            <th>Codigo del Articulo</th>
            <th>Ganancia</th>
            ");
        }
        else{
            $fila=mysqli_fetch_array($tabla);
            echo("<tr>");
            echo("<td>".$fila["idVenta"]."</td>");
            echo("<td>".$fila["idVendedor"]."</td>");
            echo("<td>".$fila["fecha"]."</td>");
            echo("<td>".$fila["codigoArticulo"]."</td>");
            echo("<td>".$fila["ganancia"]."</td>");
            echo("</tr>");
        }
    }
        echo("</table>");
        mysqli_close($link);
    ?>
</div>
</body>
</html>