<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banner PHP</title>
</head>
<body>
    <?php
    $animo=$_REQUEST['animo'];
    if ($animo=="pana"){;
        echo("<img src='speed.jpg' height='300px' width='300px'>");
    }
    if ($animo=="ahi"){;
        echo("<img src='mr.jpg' height='300px' width='300px'>");
    }
    if ($animo=="offya"){;
        echo("<img src='flight.jpg' height='300px' width='300px'>");
    }
    ?>
</body>
</html>