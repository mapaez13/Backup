<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesa Autores</title>
</head>
<body>
    <?php
    include 'conexion.php';

    $idAutor=$_REQUEST['idAutor'];
    $nombreAut=$_REQUEST['nombreAut'];
    $apellidoAut=$_REQUEST['apellidoAut'];
    $nacimientoAut=$_REQUEST['nacimiento'];
    $nacionalidadAut=$_REQUEST['nacionalidadAut'];

    mysqli_select_db($link,'libreria1') or die ("No encuentro la base de datos");
    #el sql que permitira introducir los datos

    $sql="insert into autor (idAutor,firstName,lastName,yearBorn,nationality) 
    values ($idAutor,'$nombreAut','$apellidoAut',$nacimientoAut,'$nacionalidadAut')";

    #ejecutar el comando SQL
    mysqli_query($link,$sql) or die ("Ejecutar al insertar datos");
    echo("<h3>Se cargaron los datos: </h3>");
    mysqli_close($link);
    echo("<a href='cargaAutores.html'> Cargar otro</a><br>");
    echo("<a href='consultaAutores.php'> Consultar Tabla</a>");
    ?>
</body>
</html>