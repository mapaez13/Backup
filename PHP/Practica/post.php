<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
if (isset($_POST['enviar'])) {
    if (is_array($_POST['musica'])) {
        $selected = '';
        $num_musica = count($_POST['musica']);
        $current = 0;
        foreach ($_POST['musica'] as $key => $value) {
            if ($current != $num_musica-1)
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