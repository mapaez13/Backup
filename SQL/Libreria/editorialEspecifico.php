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

    $idRecuperado=$_REQUEST['idEditorial'];
    $sql="SELECT * FROM editorial WHERE idEditorial=$idRecuperado";
    $tabla=mysqli_query ($link,$sql) or die ("Error de conexion");
    $fila=mysqli_fetch_array($tabla);
    echo("<br>");
    echo("<br>");
    echo("<strong>Codigo de Libro: </strong>".$fila['idEditorial']);
    echo("<br>");
    echo("<strong>Año de publicación: </strong>".$fila['firstName']);
    echo("<br>");
    echo("<strong>Nacionalidad: </strong>".$fila['eAddress']);
    echo("<br>");
    echo("<hr>");
    mysqli_close($link)
    ?>
</body>
</html>