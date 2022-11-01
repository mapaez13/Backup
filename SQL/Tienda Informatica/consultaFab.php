<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Libros</title>
</head>
<body>
<h1>Tabla de Autores</h1>
    <?php
    include 'conexion.php';
    $sql="SELECT * FROM fabricantes";
    $valor="SELECT * FROM tiendaInf";
    mysqli_select_db($link, 'tiendaInf') or die ("No encuentro la base de datos");
    
    $tabla=mysqli_query($link,$sql) or die ("Error en la consulta");
    
    $cantFilas=mysqli_num_rows($tabla);
    
    echo("<hr>");
    echo("<br>");
    echo("<a href='cargaAutor.html'>Cargar Otro: </a>");
        echo("<table border='2'>");
        for ($z=0;$z<=$cantFilas;$z++){
        if ($z==0){
            echo("<tr class='title'>
            <th>Codigo Fabricante</th>
            <th>Nombre del Fabricante</th>
            </tr>");
        }
        else{
            $fila=mysqli_fetch_array($tabla);
            echo("<tr>");
            echo("<td>".$fila["codigoFab"]."</td>");
            echo("<td>".$fila["nombreFab"]."</td>");
            echo("</tr>");
        }
        }
        echo("</table>");
        mysqli_close($link);
        
    ?>
</body>
</html>