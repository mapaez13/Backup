<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="procesaLogin.php" method="post" enctype="multipart/form-data">
        <h1>Escribe tu usuario y password para tu login</h1>
        <p>User: <input type="text" name="user"></p>
        <p>Password: <input type="password" name="pass"></p>
        <input type="submit" name="Login">
    </form>
</body>
</html>