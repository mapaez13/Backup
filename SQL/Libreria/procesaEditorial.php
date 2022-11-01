<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesa Editorial</title>
</head>
<body>
    <?php
    include 'conexion.php';
    $idEditorial=$_REQUEST['idEditorial'];
    $nombreEd=$_REQUEST['nombreEd'];
    $mail=$_REQUEST['mail'];

    mysqli_select_db($link,'libreria1') or die ("No encuentro la base de datos");
    #el sql que permitira introducir los datos
    $sql="insert into editorial (idEditorial,firstName,eAddress) 
            values ($idEditorial,'$nombreEd','$mail')";
    #ejecutar el comando SQL
    mysqli_query($link,$sql) or die ("Ejecutar al insertar datos");
    echo("<h3>Se cargaron los datos: </h3>");
    mysqli_close($link);
    echo("<a href='cargaEditorial.html'> Cargar otro</a><br>");
    echo("<a href='consultaEditorial.php'> Consultar Tabla</a>");
    ?>
</body>
</html>