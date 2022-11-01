<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Autos</title>
</head>
<body>
    <?php
    include 'conexion.php';

    $sql="SELECT * FROM autos";
    $valor="SELECT * FROM alquiler";

    mysqli_select_db($link,'alquiler') or die ("No encontre la base de datos");

    $tabla=mysqli_query($link,$sql) or die ("Error al crear la consulta");
    $filas=mysqli_num_rows($tabla);

    echo("<hr>");
    echo("<br>");
    echo("<table border='1'>");
        for ($z=0;$z<=$filas;$z++){
        if ($z==0){
            echo("
            <th>Identificacion del Auto </th>
            <th>Descripcion</th>
            <th>Año</th>
            <th>Cedula de Identidad del Conductor</th>
            ");
        }
        else{
            $fila=mysqli_fetch_array($tabla);
            echo("<tr>");
            echo("<td>".$fila["idAuto"]."</td>");
            echo("<td>".$fila["descripcion"]."</td>");
            echo("<td>".$fila["año"]."</td>");
            echo("<td>".$fila["ci"]."</td>");
            echo("</tr>");
        }
        }
        echo("</table>");
        mysqli_close($link);
        echo("<a href='carga.html'><input type='button' value='Cargar Otro'></a>");
    
    ?>
</body>
</html>