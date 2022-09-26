<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesa Departamentos</title>
</head>
<body>
    <?php
    include 'conexion.php';

    $codigoDep=$_REQUEST['codigoDep'];
    $nombreDep=$_REQUEST['nombreDep'];
    $presupuestoDep=$_REQUEST['presupuestoDep'];
    
    

    mysqli_select_db($link,'empresa') or die ("No encuentro la base de datos");
    #el sql que permitira introducir los datos

    $sql="insert into departamentos (codigoDep,nombreDep,presupuestoDep) 
    values ($codigoDep,'$nombreDep',$presupuestoDep)";

    #ejecutar el comando SQL
    mysqli_query($link,$sql) or die ("Ejecutar al insertar datos");
    echo("<h3>Se cargaron los datos: </h3>");
    echo("<a href='cargaDep.html'>Cargar Otro: </a>");
    mysqli_close($link);
    ?>
</body>
</html>