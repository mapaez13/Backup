<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repaso Uno</title>
</head>
<body>
    <?php
    $peso=$_REQUEST["peso"];
    $altura=$_REQUEST["altura"];

    echo("<h1>El peso que ingresaste es: $peso</h1>");
    echo("<h1>La altura que ingresaste es: $altura</h1>");
    $bmi=$peso/$altura**2;
    echo("<h1>Tu masa de indice corporal es de: $bmi</h1>");
    if ($bmi<=18.4){
        echo("<h1>Tenes que ir al doctor, estas delgado ($bmi)");
    }
    if ($bmi >=18.5 and $bmi<=24.9){
        echo("<h1>Mantene tu cuerpo asi, estas bien ($bmi)");
    }
    if ($bmi >=25 and $bmi<=39.9){
        echo("<h1>Tenes que ir al doctor, estas gordo ($bmi)");
    }
    if ($bmi>40){
        echo("<h1>Esto es grave, anda ya mismo al doctor ($bmi)");
    }
    echo("<h1>Para que tengas una idea, esta es la tabla de los indices</h1>");
    echo("<img src='bmi.jpg'></img>");
    ?>
</body>
</html>