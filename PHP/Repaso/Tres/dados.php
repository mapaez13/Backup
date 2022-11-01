<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repaso 3</title>
</head>
<body>
    <?php
    echo("Actualice la pagina para mostrar una nueva tirada");
    echo("<h3>3 Dados</h3>");
    echo("");
    $uno=(rand(1,6));
    $dos=(rand(1,6));
    $tres=(rand(1,6));
    echo("<img src='../Tres/dados/$uno.png' width='200px'></img>");
    echo("<img src='../Tres/dados/$dos.png' width='200px'></img>");
    echo("<img src='../Tres/dados/$tres.png' width='200px'></img><br>");
    if ($uno > $dos and $uno > $tres){
        echo("El mayor es el $uno<br>");
    }
    if ($dos >$uno and $dos >$tres){
        echo("El mayor es el $dos<br>");
    }
    if ($tres > $uno and $tres > $dos){
        echo("El mayor es el $tres<br>");
    }
    if ($uno == $dos or $uno == $tres or $dos == $tres){
        echo("Dos numeros coincidieron");
    }
    ?>
</body>
</html>