<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repaso Dos</title>
</head>
<body>
    <?php
    $dividendo=$_REQUEST["dividendo"];
    $divisor=$_REQUEST["divisor"];

    $cociente=$dividendo/$divisor;

    $resto=$dividendo%$divisor;

    $rounded=(floor($cociente));

    echo("El resultado es $rounded<br>");

    if ($resto==0){
        echo("Tu resto es exacto ($resto)");
    }
    else{
        echo("Tu resto no es exacto ($resto). Para que sea exacto, tu cociente tiene que ser $cociente");
    }
    ?>
</body>
</html>