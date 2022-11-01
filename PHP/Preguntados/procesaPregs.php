<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El total</title>
</head>
<body>
    <?php
    $correctas=0;
    $mal=0;
    $total=0;
    $audi=$_REQUEST["audi"];
    $bentley=$_REQUEST["bentley"];
    $mercedes=$_REQUEST["mercedes"];
    $chevy=$_REQUEST["chevy"];
    $ferrari=$_REQUEST["ferrari"];
    $mazda=$_REQUEST["mazda"];
    $mitsu=$_REQUEST["mitsu"];
    $subie=$_REQUEST["subie"];
    $toyota=$_REQUEST["toyota"];
    $volks=$_REQUEST["volks"];
    
    if($audi=="correcto"){
        $correctas++;
    }
    if ($audi=="mal"){
        $mal+=1;
    }
    if($bentley=="correcto"){
        $correctas++;
    }
    if ($bentley=="mal"){
        $mal+=1;
    }
    if($mercedes=="correcto"){
        $correctas++;
    }
    if ($mercedes=="mal"){
        $mal+=1;
    }
    if($chevy=="correcto"){
        $correctas++;
    }
    if ($chevy=="mal"){
        $mal+=1;
    }
    if($ferrari=="correcto"){
        $correctas++;
    }
    if ($ferrari=="mal"){
        $mal+=1;
    }
    if($mazda=="correcto"){
        $correctas++;
    }
    if ($mazda=="mal"){
        $mal+=1;
    }
    if($mitsu=="correcto"){
        $correctas++;
    }
    if ($mitsu=="mal"){
        $mal+=1;
    }
    if($subie=="correcto"){
        $correctas++;
    }
    if ($subie=="mal"){
        $mal+=1;
    }
    if($toyota=="correcto"){
        $correctas++;
    }
    if ($toyota=="mal"){
        $mal+=1;
    }
    if($volks=="correcto"){
        $correctas++;
    }
    if ($volks=="mal"){
        $mal+=1;
    }
    $total=$correctas;
    echo("<h1>Tuviste $total respuestas correctas</h1>")

    ?>
</body>
</html>