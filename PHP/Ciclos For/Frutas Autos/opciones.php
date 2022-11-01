<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opciones</title>
</head>
<body>
    <?php
    $opciones=$_REQUEST["frutaut"];
    $cantidad=$_REQUEST["cantidad"];
    for ($i=1;$i<=$cantidad;$i++){
        if ($opciones=="autos"){
            echo("<img src='../Frutas Autos/img/autos/$i.jpg' width='300px'></img>");}
        if ($opciones=="frutas"){
            echo("<img src='../Frutas Autos/img/frutas/$i.jpg' width='300px'></img>");}
        }
    ?>
</body>
</html>