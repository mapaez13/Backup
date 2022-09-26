<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Procesa Articulo</title>
</head>
<body>
    <!--Procesa y guarda en la tabla todos los datos agregados-->
    <?php
    include 'conexion.php';

    $codigo=$_REQUEST['codigo'];
    $descripcion=$_REQUEST['descripcion'];
    $precio=$_REQUEST['precio'];
    $marca=$_REQUEST['marca'];

    $select;
    $sql="INSERT INTO Productor (codigo,descripcion,precio,marca) 
    VALUES ($codigo,'$descripcion',$precio,'$marca')";
    mysqli_query($link,$sql) or die ("Ejecutar al insertar datos");
    mysqli_close($link);
    echo "<script>
               alert('Se han cargado los datos exitosamente!');
               window.location.href='main.php';
             </script>";
    ?>
</body>
</html>