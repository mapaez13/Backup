<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HREF EJERICIOS</title>
</head>
<body>
    <?php
    $user=$_REQUEST["user"];
    $pswrd=$_REQUEST["psswrd"];
    if($user=="admin" and $pswrd=="123"){
        header("location: feliz.html");
    } 
    else{
        header("location: triste.html");
    }
    ?>
</body>
</html>