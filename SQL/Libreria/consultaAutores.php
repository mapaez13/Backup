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
    $sql="SELECT * FROM autor";
    $valor="SELECT * FROM libreria1";
    mysqli_select_db($link, 'libreria1') or die ("No encuentro la base de datos");
    
    $tabla=mysqli_query($link,$sql) or die ("Error en la consulta");
    
    $cantFilas=mysqli_num_rows($tabla);
    
    echo("<hr>");
    echo("<br>");
    echo("<a href='cargaAutor.html'>Cargar Otro: </a>");
        echo("<table border='2'>");
        for ($z=0;$z<=$cantFilas;$z++){
        if ($z==0){
            echo("<tr class='title'>
            <th>idLibro</th>
            <th>Año</th>
            <th>Nacionalidad</th>
            </tr>");
        }
        else{
            $fila=mysqli_fetch_array($tabla);
            echo("<tr>");
            echo("<td>".$fila["idAutor"]."</td>");
            echo("<td>".$fila["firstName"]."</td>");
            echo("<td>".$fila["lastName"]."</td>");
            echo("<td>".$fila["yearBorn"]."</td>");
            echo("<td>".$fila["nationality"]."</td>");
            echo("</tr>");
        }
        }
        echo("</table>");
        mysqli_close($link);
        
    ?>
</body>
</html>