<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Empleados</title>
</head>
<body>
<h1>Tabla de Empleados</h1>
    <?php
    include 'conexion.php';
    $sql="SELECT * FROM empleados";
    $valor="SELECT * FROM empresa";
    mysqli_select_db($link, 'empresa') or die ("No encuentro la base de datos");
    
    $tabla=mysqli_query($link,$sql) or die ("Error en la consulta");
    
    $cantFilas=mysqli_num_rows($tabla);
    
    echo("<hr>");
    echo("<br>");
    echo("<a href='cargaEmp.html'>Cargar Otro: </a>");
        echo("<table border='2'>");
        for ($z=0;$z<=$cantFilas;$z++){
        if ($z==0){
            echo("<tr class='title'>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Codigo de Departamento</th>
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
        echo("<a href='consultaLopez.php'><input type='button' value='Los Lopez'></a><br>");
        echo("<a href='dep14.php'><input type='button' value='Departamento 14'></a><br>");
        echo("<a href='deps3777.php'><input type='button' value='Departamentos 37 y 77'></a><br>");
    ?>
</body>
</html>