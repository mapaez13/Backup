<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updated</title>
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>
<body>
    <!--Actualiza en la tabla todos los datos modificados-->
    <?php
    include 'conexion.php';

    $codigo=$_REQUEST['codigo'];
    $nombre=$_REQUEST['nombre'];
    $direccion=$_REQUEST['direccion'];
    $telefono=$_REQUEST['telefono'];
    $sql1="UPDATE Clientes SET nombre='$nombre', direccion='$direccion', telefono=$telefono WHERE codCliente=$codigo";
    mysqli_query($link,$sql1);
    echo"<script>
            alert('Datos Actualizados!');
            window.location.href='listCli.php';
         </script>";
    ?>
</body>
</html>