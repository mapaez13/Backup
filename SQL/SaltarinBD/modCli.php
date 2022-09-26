<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Modificar</title>
</head>
<body>
    <!--Pedimos al usuario que ingrese el código a ser modificado-->
    <ul>
        <li><a href="main.php">INICIO</a></li>
        <li><a href="agregar.php">AGREGAR</a></li>
        <li><a href="listar.php">LISTAR</a></li>
        <li><a href="modificar.php">MODIFICAR</a></li>
        <li><a href="eliminar.php">ELIMINAR</a></li>
        <li class="name"><img class="nav" src="../SaltarinBD/logo_main.png"></li>
    </ul>
    <?php
    include 'conexion.php';
    $sql="SELECT * FROM Clientes";
    $valor="SELECT * FROM saltarinBD";
    $select;
    $tabla=mysqli_query($link,$sql) or die ("Error en la consulta");
    $cantFilas=mysqli_num_rows($tabla);

        echo("<table border='1'>");
        for ($z=0;$z<=$cantFilas;$z++){
        if ($z==0){
            echo("
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Telefono</th>
            ");
        }
        else{
            $fila=mysqli_fetch_array($tabla);
            echo("<tr>");
            echo("<td>".$fila["codCliente"]."</td>");
            echo("<td>".$fila["nombre"]."</td>");
            echo("<td>".$fila["direccion"]."</td>");
            echo("<td>".$fila["telefono"]."</td>");
        }
        }
        echo("</table>");
        mysqli_close($link);
    ?>
    <form action="modificandoCli.php" method="post">
        <div class="flex-container">
            <div class="flex-dos">
                <p>Ingrese el codigo de la fila que modificará<input type="number" name="codigo"></p>
                <input type="submit" value="Aceptar">
            </div>
        </div>
    </form>
</div>
</body>
</html>