<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Articulo</title>
</head>
<body>
    <?php
    include 'conexion.php';
    mysqli_select_db($link, 'tiendaInf') or die ("No encuentro la base de datos");
    
    $sql="insert into articulos (codigoArt,codigoFab,nombreArt,precio) 
    values (7,8,'JBL Xtreme 2',170)";

    mysqli_query($link,$sql) or die ("Error en la consulta");
    mysqli_close($link);
    echo("<a href='consultaArt.php'><input type='button' value='Consultar Tabla'></a><br>");
    ?>
</body>
</html>