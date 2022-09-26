<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Login</title>
</head>
<body>
    <h1>Sistema de Venta</h1>
    <h3>Iniciar Sesión</h3>
    <div class="flex-container">
        <div class="">
            <form action="procesaLogin.php" method="post">
            <p>Usuario: <input type="text" name="user"></p>
            <p>Password: <input type="password" name="pass"></p>
            <div class="INICIO"><input type="submit" value="Sign In"></div>
            </form>
            <div class="INICIO"><a href="registro.php"><input type="submit" value="Sign Up"></a></div>
        </div> 
    </div>
</body>
</html>