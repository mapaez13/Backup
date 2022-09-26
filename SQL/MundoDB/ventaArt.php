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
        <li><a href="cargaArticulo.php">Cargar Articulos</a></li>
        <li><a href="venta.php">Cargar Ventas</a></li>
        <li><a href="consultaArticulos.php">Listar Articulos</a></li>
        <li><a href="consultaVentas.php">Listar Ventas</a></li>
        <li class="name"><?php echo($_SESSION['name']);?></li>
        <li class="name"><img width="50px" alt="Sin foto" src="data:image/jpg;base64,<?php echo (base64_encode ($_SESSION['foto']));?>"></li>
    </ul>
    <form action='procesaVenta.php' method="post">
    <?php
    include 'conexion.php';
            $codigo=$_REQUEST['codigo'];
            $sql="select * from articulos where codigo='$codigo'";
            $resultado=mysqli_query($link,$sql);
            $nfilas=mysqli_num_rows ($resultado);
            if ($nfilas==0){
                echo "<script>
                    alert('No existe el Articulo!!');
                    window.location.href='venta.php';
                </script>";
            }
            else{
                $fila=mysqli_fetch_array($resultado);
                echo ("<input type=hidden name='codigo' value='$codigo'>");

                echo ("<p>Codigo de Vendedor: <input type='number' name='idVendedor'>");
                
                echo ("<p> Articulo: ".$fila['nombre']."<input type=hidden name='nombre'></p>");

                echo ("<p> Precio: ".$fila['precioPublico']."<input type=hidden name='precioPublico'></p>");

                echo ("<p> Foto: <img width=100px src='".$fila['fotoArticulo']."<input type=hidden name='fotoArt'></p>");

                echo("<p> Cantidad: <input type='number' name='cantidad'></p>");

                echo("<p><input type='submit' value='Crear Venta'></p>");
            }
        ?>
    </form>
</body>
</html>