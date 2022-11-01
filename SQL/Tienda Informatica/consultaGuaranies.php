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
    $sql="SELECT codigoArt, nombreArt, precio * 6800 AS precioGS FROM articulos";
    $valor="SELECT * FROM tiendaInf";
    mysqli_select_db($link, 'tiendaInf') or die ("No encuentro la base de datos");
    
    $tabla=mysqli_query($link,$sql) or die ("Error en la consulta");
    
    $cantFilas=mysqli_num_rows($tabla);
    
    echo("<hr>");
    echo("<br>");
    echo("<a href='cargaArt.html'>Cargar Otro: </a>");
        echo("<table border='2'>");
        for ($z=0;$z<=$cantFilas;$z++){
        if ($z==0){
            echo("<tr class='title'>
            <th>Codigo Articulo</th>
            <th>Codigo Fabricante</th>
            <th>Nombre del Articulo</th>
            <th>Precio</th>
            </tr>");
        }
        else{
            $fila=mysqli_fetch_array($tabla);
            echo("<tr>");
            echo("<td>".$fila["codigoArt"]."</td>");
            echo("<td>".$fila["codigoFab"]."</td>");
            echo("<td>".$fila["nombreArt"]."</td>");
            echo("<td>".$fila["precioGS"]."</td>");
            echo("</tr>");
        }
        }
        echo("</table>");
        mysqli_close($link);
        echo("<br><a href='consultaMayor.php'><input type='button' value='Consultar Mayores de 200$'></a><br>");
        echo("<a href='cargarValores.html'><input type='button' value='Cargar valores'></a><br>");
        echo("<a href='consultaAvg.php'><input type='button' value='Consultar Promedio de Precio'></a><br>");
        echo("<a href='consultaMayor2.php'><input type='button' value='Consultar Mayores de 180$'></a><br>");
        echo("<a href='consultaAvg.php'><input type='button' value='Consultar Promedio'></a><br>");
    ?>
</body>
</html>