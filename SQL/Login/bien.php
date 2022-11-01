<?php
session_start();
if (!(isset ($_SESSION['idUser']))){
    header ("Location:error.html");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bien</h1>
    <?php
    echo("<h2>Bienvenido");
    echo("\n");
    echo($_SESSION['name']);
    echo("</h2>");
    ?>
     <img width=500px
     alt="Sin foto"
     src="data:image/jpg;base64,
     <?php echo (base64_encode ($_SESSION['foto']));?>">
</body>
</html>