<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla 3</title>
</head>
<body>
    <h1>Varios elementos (Formulario)</h1>
    <?php
    $valor=1;
    $valorUsuario=$_REQUEST["indice"];
    $x="x";
    echo("<h2>Tabla del $valorUsuario hasta el numero $valorUsuario(&lt;table&gt;)</h2>");
    for ($t=1;$t<=$valorUsuario;$t++){
        echo("<table border='1' style='margin: 10px;'>");
            for ($i=0;$i<=$valor;$i++){   
                if($i==0){
                    echo("<th> $x </th>");}
                if($i>=1){
                    echo("<th> $i </th>");}
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
    $valor=$valor+1;
    }
    
    ?>
</body>
</html>