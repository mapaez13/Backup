<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario</title>
    <link rel="stylesheet" href="salario.css">
</head>
<body>
    <?php
    $name=$_REQUEST["name"];
    $surname=$_REQUEST["surname"];
    $salario=$_REQUEST["salario"];
    $monto=$_REQUEST["monto"];
    $horasT=$_REQUEST["horasT"];
    $ips=$_REQUEST["ips"];
    $asociado=$_REQUEST["asociado"];
    $menu=$_REQUEST["menu"];
    $cien=100;

    echo(" <div class='title'><h1>Sistema calculo del salario</h1></div>");
    if($name==empty($_REQUEST) and $surname==empty($_REQUEST)){
        echo ("<h3>Campo Obligatorio</h3>");
    }
    else{
        echo ("<div class='title1'><h1>Bienvenido, $name $surname</h1></div>");
    }
    if($salario==empty($_REQUEST)){
        echo ("<h3>No hay nada</h3>");
    }
    else{
        $formattedsalario=number_format($salario);
        echo ("<h3>Tu sueldo base es $formattedsalario ₲s</h3>");
    }
    if($monto==empty($_REQUEST)){
        echo ("<h3>No hay nada</h3>");
    }
    else{
        echo ("<h3>Ganas $monto ₲ por hora trabajada</h3>");
    }
    if($menu==empty($_REQUEST)){
    }
    else{
        $porcphijo=($menu*3);
        $parhijo=$cien/$porcphijo;
        $tothijo=$monto/$parhijo;
    }
    $montotal=$salario*$horasT;
    $parips=$cien/$ips;
    $totips=$salario/$parips;
    $paraso=$cien/$asociado;
    $totaso=$salario/$paraso;
    
    if($menu==empty($_REQUEST)){
        $final=$salario-($totaso+$totips);
        $formattedfinal= number_format($final);
        echo("<h1>Tu salario es de: $formattedfinal ₲</h1>");
    }
    else{
        $final=($salario+$tothijo)-($totaso+$totips);
        $formattedfinal= number_format($final);
        echo("<h1>Tu salario es de: $formattedfinal ₲</h1>");
    }
    ?>
</body>
</html>