<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caja1</title>
</head>
<body>
    <?php
    $fila=$_REQUEST["valor"];
    $x="x";
        echo("<table border='1px'>");
        echo("<th>$x</th>");
    for($i=1;$i<=$fila;$i++){
        echo("<th>$i</th>"); 
    }
    for($y=1;$y<=$fila;$y++){
        echo("<tr>");
        for ($r=0;$r<=$fila;$r++){
            if ($r==0){
                echo("<th> $y </th>");
            }
            else{
                $z=$y*$r;
                echo("<td> $z </td>");
            }   
        }
        echo("</tr>");
    }
        echo("</table>");
    ?>
</body>
</html>