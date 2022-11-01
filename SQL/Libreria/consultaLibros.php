<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Libros</title>
</head>
<body>
<h1>Tabla de Libros</h1>
    <?php
    include 'conexion.php';
    $sql="SELECT * FROM libros";
    $valor="SELECT * FROM libreria1";
    mysqli_select_db($link, 'libreria1') or die ("No encuentro la base de datos");
    
    $tabla=mysqli_query($link,$sql) or die ("Error en la consulta");
    
    $cantFilas=mysqli_num_rows($tabla);

    echo("<hr>");
    echo("<br>");
    echo("<a href='cargaLibros.html'>Cargar Otro: </a>");
        echo("<table border='2'>");
        for ($z=0;$z<=$cantFilas;$z++){
        if ($z==0){
            echo("
            <th>idLibro</th>
            <th>Año</th>
            <th>Nacionalidad</th>
            ");
        }
        else{
            $fila=mysqli_fetch_array($tabla);
            echo("<tr>");
            echo("<td>".$fila["idLibro"]."</td>");
            echo("<td>".$fila["yearDate"]."</td>");
            echo("<td>".$fila["nationality"]."</td>");
            echo("</tr>");
        }
        }
        echo("</table>");
        mysqli_close($link);
        
    ?>
</body>
</html>