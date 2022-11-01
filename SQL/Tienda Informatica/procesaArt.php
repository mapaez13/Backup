<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesa Articulos</title>
</head>
<body>
    <?php
    include 'conexion.php';

    $codigoArt=$_REQUEST['codigoArt'];
    $nombreArt=$_REQUEST['nombreArt'];
    $precio=$_REQUEST['precio'];
    $codigoFab=$_REQUEST['codigoFab'];
    
    

    mysqli_select_db($link,'tiendaInf') or die ("No encuentro la base de datos");
    #el sql que permitira introducir los datos

    $sql="insert into articulos (codigoArt,codigoFab,nombreArt,precio) 
    values ($codigoArt,$codigoFab,'$nombreArt',$precio)";

    #ejecutar el comando SQL
    mysqli_query($link,$sql) or die ("Ejecutar al insertar datos");
    echo("<h3>Se cargaron los datos: </h3>");
    mysqli_close($link);
    echo("<h1>Que desea hacer?</h1>");
    echo("<a href='CargaArt.html'><input type='button' value='Cargar Otro'></a><br>");
    echo("<a href='consultaArt.php'><input type='button' value='Consultar Tabla'></a><br>");
    echo("<a href='consultaMayor.php'><input type='button' value='Consultar Mayores de 200$'></a><br>");
    echo("<a href='consultaValores.php'><input type='button' value='Consultar valores puestos'></a><br>");
    echo("<a href='consultaGuaranies.php'><input type='button' value='Consultar en Guaranies'></a><br>");
    echo("<a href='consultaAvg.php'><input type='button' value='Consultar Promedio de Precio'></a><br>");
    echo("<a href='consultaMayor2.php'><input type='button' value='Consultar Mayores de 180$'></a><br>");
    ?>
</body>
</html>