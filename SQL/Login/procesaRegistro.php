<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesa Registro</title>
</head>
<body>
    <?php
    include 'conexion.php';
    $user=$_REQUEST['user'];
    $password=$_REQUEST['password'];

    $foto=addslashes(file_get_contents($_FILES ['foto']['tmp_name']));

    $sql="INSERT INTO usuario (username,password,foto) VALUES ('$user','$password','$foto')";
    mysqli_query($link,$sql) or die ("Error en la consulta");
    echo("
    <script>
        alert ('Datos cargados exitosamente')  
    </script>");
    header("Location: login.php");
    mysqli_close($link);
    ?>
</body>
</html>