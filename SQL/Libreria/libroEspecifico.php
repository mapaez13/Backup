<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro Especifico</title>
</head>
<body>
    <?php
    include 'conexion.php';
    mysqli_select_db($link, 'libreria1') or die ("No encuentro la base de datos");

    $idRecuperado=$_REQUEST['idLibro'];
    $sql="SELECT * FROM libros WHERE idLibro=$idRecuperado";
    $tabla=mysqli_query ($link,$sql) or die ("Error de conexion");
    $fila=mysqli_fetch_array($tabla);
    echo("<br>");
    echo("<br>");
    echo("<strong>Codigo de Libro: </strong>".$fila['idLibro']);
    echo("<br>");
    echo("<strong>Año de publicación: </strong>".$fila['yearDate']);
    echo("<br>");
    echo("<strong>Nacionalidad: </strong>".$fila['nationality']);
    echo("<br>");
    echo("<hr>");
    mysqli_close($link)
    ?>
</body>
</html>