<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesa Registro</title>
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
    $mail=$_REQUEST['email'];
    $user=$_REQUEST['user'];
    $password=$_REQUEST['password'];

    $foto='archivos/'.basename($_FILES['foto']['name']);
    move_uploaded_file($_FILES['foto']['tmp_name'], $foto);


    $sql="INSERT INTO vendedor (username,password,email,photo) VALUES ('$user','$password','$mail','$foto')";
    mysqli_query($link,$sql) or die ("Error en la consulta");
    echo("
    <script>
        alert ('Datos cargados exitosamente')  
    </script>");
    header("Location: login.php");
    mysqli_close($link);
    ?>
</body>
</html>