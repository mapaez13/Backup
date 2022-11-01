<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //aqui ingresamos los datos que recuperamos del html
    $nombre=$_REQUEST["name"];
    echo ("<h1>".$nombre."</h1><br>");
    $mail=$_REQUEST["mail"];
    echo("<h1>".$mail."</h1><br>");
    $tel=$_REQUEST["tel"];
    echo("<h1>".$tel."</h1><br>");
    $address=$_REQUEST["address"];
    echo("<h1>".$address."</h1><br>");
    $postCode=$_REQUEST["postCode"];
    echo("<h1>".$postCode."</h1><br>");
    $country=$_REQUEST["country"];
    echo("<h1>".$country."</h1><br>");
    $card=$_REQUEST["card"];
    echo("<h1>".$card."</h1><br>");
    $cardNumber=$_REQUEST["cardNumber"];
    echo("<h1>".$cardNumber."</h1><br>");
    $cardCode=$_REQUEST["cardCode"];
    echo("<h1>".$cardCode."</h1><br>");
    $cardName=$_REQUEST["cardName"];
    echo("<h1>".$cardName."</h1><br>");
    if (isset($_POST['enviar'])) {
        if (is_array($_POST['card'])) {
            $selected = '';
            $num_musica = count($_POST['card']);
            $current = 0;
            foreach ($_POST['card'] as $key => $value) {
                if ($current != $num_card-1)
                    $selected .= $value.', ';
                else
                    $selected .= $value.'.';
                $current++;
            }
    
        echo '<div>Has seleccionado: '.$selected.'</div>';
}
    }
    ?>
</body>
</html>