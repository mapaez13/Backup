<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProcesaLibros</title>
</head>
<body>
    <?php
    include 'conexion.php';

    $id=$_REQUEST['idLibro'];
    $anho=$_REQUEST['anho'];
    $nacionalidad=$_REQUEST['nacionalidad'];

    mysqli_select_db($link,'libreria1') or die ("No encuentro la base de datos");
    #el sql que permitira introducir los datos

    #libro
    $sql="insert into libros (idLibro,yearDate,nationality) 
            values ($id,$anho,'$nacionalidad')";
    #ejecutar el comando SQL
    mysqli_query($link,$sql) or die ("Ejecutar al insertar datos");
    echo("<h3>Se cargaron los datos: </h3>");
    mysqli_close($link);
    echo("<a href='cargaLibros.html'> Cargar otro</a><br>");
    echo("<a href='consultaLibros.php'> Consultar Tabla</a>");
    ?>
</body>
</html>