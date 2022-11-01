<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Varios Elementos</title>
</head>
<body>
    <?php
    $numeros=$_REQUEST["valor"];
    echo("Preformateado<br>");
    for($i=1;$i<=$numeros;$i++){
        echo("<pre> $i </pre>");
    }
    echo("Parrafo");
    for($i=1;$i<=$numeros;$i++){
        echo("<p> $i </p>");
    }
    ?>
</body>
</html>