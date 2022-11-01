<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla 2</title>
</head>
<body>
    <h1>Varios elementos (Formulario)</h1>
    <?php
    $valor=$_REQUEST["indice"];
    $x="x";
    echo("<h2>Tabla del $valor hasta el numero $valor(&lt;table&gt;)</h2>");
    echo("<table border='1'>");
        echo("<th> $x </th>");
    for ($i=1;$i<=$valor;$i++){
        echo("<th> $i </th>");  
    }
    for($y=1; $y<=$valor; $y++){
        echo("<tr>");
        for ($m=0; $m<=$valor;$m++){
            if ($m==0){
                echo ("<th> $y </th>");
            }
            else{
                $z=$y*$m;
                echo ("<td> $y*$m = $z </td>");
            }
        }
    }
    
    ?>
</body>
</html>