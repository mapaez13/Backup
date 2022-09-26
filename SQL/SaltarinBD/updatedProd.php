!<!DOCTYPE html>
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
    $descripcion=$_REQUEST['descripcion'];
    $precio=$_REQUEST['precio'];
    $marca=$_REQUEST['marca'];
    $sql1="UPDATE Productor SET descripcion='$descripcion',precio=$precio, marca='$marca' WHERE codigo=$codigo";
    mysqli_query($link,$sql1);
    echo"<script>
            alert('Datos Actualizados!');
            window.location.href='listProd.php';
         </script>";
    ?>
</body>
</html>