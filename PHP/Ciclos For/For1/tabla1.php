<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla 1</title>
</head>
<body>
    <h1>Varios elementos (Formulario)</h1>
    <?php
    $valor=$_REQUEST["indice"];
    echo("<h2>Tabla con una sola fila(&lt;table&gt;)</h2>");
    echo("<table border='1'>");
    for ($i=1;$i<=$valor;$i++)
    {    
        echo("<th> $i </th>");
    }
    echo("</table>"); 
    ?>
</body>
</html>