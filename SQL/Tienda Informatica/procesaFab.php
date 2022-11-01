<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesa Fabricantes</title>
</head>
<body>
    <?php
    include 'conexion.php';

    $codigoFab=$_REQUEST['codigoFab'];
    $nombreFab=$_REQUEST['nombreFab'];

    mysqli_select_db($link,'tiendaInf') or die ("No encuentro la base de datos");
    #el sql que permitira introducir los datos

    $sql="insert into fabricantes (codigoFab,nombreFab) 
    values ($codigoFab,'$nombreFab')";

    #ejecutar el comando SQL
    mysqli_query($link,$sql) or die ("Ejecutar al insertar datos");
    echo("<h3>Se cargaron los datos: </h3>");
    mysqli_close($link);
    echo("<a href='cargaFab.html'><input type='button' value='Cargar Otro'></a><br>");
    echo("<a href='consultaFab.php'><input type='button' value='Consultar Tabla'></a>");
    ?>
</body>
</html>