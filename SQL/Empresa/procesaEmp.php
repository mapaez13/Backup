<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesa Empleados</title>
</head>
<body>
    <?php
    include 'conexion.php';

    $DNI=$_REQUEST['codigoEmp'];
    $nombreEmp=$_REQUEST['nombreEmp'];
    $apellidoEmp=$_REQUEST['apellidoEmp'];
    $departEmp=$_REQUEST['departEmp'];
    
    

    mysqli_select_db($link,'empresa') or die ("No encuentro la base de datos");
    #el sql que permitira introducir los datos

    $sql="insert into empleados (DNI,nombreEmp,apellidoEmp,departEmp) 
    values ($DNI,'$nombreEmp','$apellidoEmp',$departEmp)";

    #ejecutar el comando SQL
    mysqli_query($link,$sql) or die ("Ejecutar al insertar datos");
    echo("<h3>Se cargaron los datos: </h3>");
    echo("<a href='cargaEmp.html'>Cargar Otro: </a>");
    mysqli_close($link);
    ?>
</body>
</html>