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
    $sql="SELECT * FROM empleados WHERE apellidoEmp like 'Lopez'";
    $valor="SELECT * FROM empresa";
    mysqli_select_db($link, 'empresa') or die ("No encuentro la base de datos");
    
    $tabla=mysqli_query($link,$sql) or die ("Error en la consulta");
    
    $cantFilas=mysqli_num_rows($tabla);
    
    echo("<hr>");
    echo("<br>");
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
            echo("<td>".$fila["DNI"]."</td>");
            echo("<td>".$fila["nombreEmp"]."</td>");
            echo("<td>".$fila["apellidoEmp"]."</td>");
            echo("<td>".$fila["departEmp"]."</td>");
            echo("</tr>");
        }
        }
        echo("</table>");
        mysqli_close($link);
        echo("<a href='cargaEmp.html'><input type='button' value='Cargar valores'></a><br>");
        echo("<a href='consultaEmp.php'><input type='button' value='Consultar Todo'></a><br>");
    ?>
</body>
</html>