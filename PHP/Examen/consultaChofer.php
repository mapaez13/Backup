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

    $sql="SELECT * FROM chofer";
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
            <th>Cedula de Identidad del Conductor</th>
            <th>Nombre del Conductor </th>
            <th>Telefono</th>
            ");
        }
        else{
            $fila=mysqli_fetch_array($tabla);
            echo("<tr>");
            echo("<td>".$fila["ci"]."</td>");
            echo("<td>".$fila["nombre"]."</td>");
            echo("<td>".$fila["celular"]."</td>");
            echo("</tr>");
        }
        }
        echo("</table>");
        mysqli_close($link);
        echo("<a href='carga.html'><input type='button' value='Cargar Otro'></a>");
    ?>
</body>
</html>