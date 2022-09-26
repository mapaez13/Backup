<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Registrarse</title>
</head>
<body>
    <div class="flex-container">
        <form action="procesaRegistro.php" enctype="multipart/form-data" method="post">
            <p>Email: <input type="email" name="email"></p>
            <p>Usuario: <input type="text" name="user"></p>
            <p>Password: <input type="password" name="password"></p>
            <p>Foto: <input type="file" name="foto"></p>
            <div class="INICIO"><input type="submit" value="Registrar"></div>
        </form>
    </div>
</body>
</html>