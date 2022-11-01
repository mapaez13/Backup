<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayor a 200$</title>
</head>
<body>
    <?php
    include 'conexion.php';
    
    $sql="SELECT AVG (precio) AS promedio FROM articulos WHERE codigoFab=2";
    $valor="SELECT * FROM tiendaInf";
    mysqli_select_db($link, 'tiendaInf') or die ("No encuentro la base de datos");
    $tabla=mysqli_query($link,$sql) or die ("Error en la consulta");
    $fila=mysqli_fetch_array($tabla);
    echo("<h1>El promedio total de los precios es ". $fila['promedio']);
    mysqli_close($link);
    echo("<br><a href='consultaMayor.php'><input type='button' value='Consultar Mayores de 200$'></a><br>");
        echo("<a href='consultaValores.php'><input type='button' value='Consultar valores puestos'></a><br>");
        echo("<a href='consultaGuaranies.php'><input type='button' value='Consultar en Guaranies'></a><br>");
        echo("<a href='consultaAvg.php'><input type='button' value='Consultar Promedio de Precio'></a><br>");
        echo("<a href='consultaMayor2.php'><input type='button' value='Consultar Mayores de 180$'></a><br>");
        echo("<a href='consultaAvg.php'><input type='button' value='Consultar Promedio'></a><br>");
    ?>
</body>
</html>