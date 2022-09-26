<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma Total Presupuesto</title>
</head>
<body>
    <?php
    include 'conexion.php';
    $sql="SELECT SUM(presupuestoDep) AS sumaPresupuesto FROM departamentos";
    $valor="SELECT * FROM empresa";
    mysqli_select_db($link, 'empresa') or die ("No encuentro la base de datos");
    
    $tabla=mysqli_query($link,$sql) or die ("Error en la consulta");
    
    $fila=mysqli_fetch_array($tabla);
    echo("<h1>La suma total de los presupuestos es ". $fila['sumaPresupuesto']);
        mysqli_close($link);
        echo("<br><br><a href='consultaDep.php'><input type='button' value='Consultar valores'></a><br>");
    ?>
</body>
</html>