<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesa Elementos</title>
</head>
<body>
    <h1>Varios elementos (Resultado)</h1>
    <?php
    $valor=$_REQUEST["indice"];
    echo("<h2>Preformateado (&lt;pre&gt;)</h2>");
    echo("<pre>");
    for ($i=1;$i<=$valor;$i++)
    {    
        echo(" $i ");
    }
    echo("</pre>");

    echo("<h2>Parrafo (&lt;p&gt;)</h2>");
    echo("<p>");
    for ($i=1;$i<=$valor;$i++)
    {    
        echo(" $i ");
    }
    echo("</p>");

    echo("<h2>Lista Desordenada (&lt;ul&gt;)</h2>");
    echo("<ul>");
    for ($i=1;$i<=$valor;$i++)
    {    
        echo("<li> $i </li>");
    }
    echo("</ul>");  

    echo("<h2>Lista Ordenada (&lt;ul&gt;)</h2>");
    echo("<ol>");
    for ($i=1;$i<=$valor;$i++)
    {    
        echo("<li> $i </li>");
    }
    echo("</ol>");  
    ?>
</body>
</html>