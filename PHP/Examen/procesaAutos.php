<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesa Autos</title>
</head>
<body>
    <?php
    include 'conexion.php';

    $idAuto=$_REQUEST['idAuto'];
    $descripcion=$_REQUEST['descripcion'];
    $año=$_REQUEST['año'];
    $ci=$_REQUEST['ci'];

    mysqli_select_db($link,'alquiler') or die("No se encontro la base de datos");
    echo("Me conecte a la base de datos");

    $sql="INSERT INTO autos (idAuto,descripcion,año,ci) VALUES ($idAuto,'$descripcion','$año',$ci)";

    mysqli_query($link,$sql) or die("No se insertaron lo datos correctamente");
    echo("Se cargaron los datos!");
    mysqli_close($link);
    echo("<a href='carga.html'><input type='button' value='Cargar Otro'></a>");
    echo("<a href='consultaAutos.php'><input type='button' value='Consultar Tabla'></a>");
    ?>
</body>
</html>