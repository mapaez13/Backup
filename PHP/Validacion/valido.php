<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion</title>
</head>
<body>
    <?php
    $nombre=$_REQUEST["nombre"];
    if($nombre==empty($_REQUEST)){
        echo ("<h3>No hay nada</h3>");
    }
    else{
        echo ("<h3>$nombre</h3>");
    }
    $apellido=$_REQUEST["apellido"];
    if($apellido==empty($_REQUEST)){
        echo ("<h3>No hay nada</h3>");
    }
    else{
        echo ("<h3>$apellido</h3>");
    }
    $menu=$_REQUEST["menu"];
    if($menu==empty($_REQUEST)){
        echo ("<h3>No hay nada</h3>");
    }
    else{
        echo ("<h3>$menu</h3>");
    }
    $peso=$_REQUEST["peso"];
    if($peso==empty($_REQUEST)){
        echo ("<h3>No hay nada</h3>");
    }
    else{
        echo ("<h3>$peso kg</h3>");
    }
    $hm=NULL;
    if(!empty($_REQUEST ["hm"])){
        $hm=$_REQUEST["hm"];
        echo("<h3>$hm</h3>");
    }
    else{
    echo("<h3>No hay nada</h3>");}
    $estadocivil=NULL;
    if(!empty($_REQUEST ["civil"])){
        $civil=$_REQUEST["civil"];
        echo("<h3>$civil</h3>");
    }
    else{
    echo("<h3>No hay nada</h3>");}
    $aficiones=NULL;
    if(!empty($_REQUEST ["aficiones"])){
        $aficiones=$_REQUEST["aficiones"];
        foreach($aficiones as $value)
        echo("<h3>$value</h3>");
    }
    else{
        echo("<h3>No hay nada</h3>");}
    ?>
</body>
</html>