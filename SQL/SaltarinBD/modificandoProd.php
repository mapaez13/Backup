<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificando</title>
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>
<body>
    <!--Aqui modificamos los datos del código que el usuario ingresó-->
    <ul>
        <li><a href="main.php">INICIO</a></li>
        <li><a href="agregar.php">AGREGAR</a></li>
        <li><a href="listar.php">LISTAR</a></li>
        <li><a href="modificar.php">MODIFICAR</a></li>
        <li><a href="eliminar.php">ELIMINAR</a></li>
        <li class="name"><img class="nav" src="../SaltarinBD/logo_main.png"></li>
    </ul>
    <form action="updatedProd.php">
        <?php
            include 'conexion.php';
            $codigo=$_REQUEST['codigo'];
            $sql="SELECT * FROM Productor WHERE codigo='$codigo'";
            $resultado=mysqli_query($link,$sql);
            $nfilas=mysqli_num_rows ($resultado);
            if ($nfilas==0){
                echo "<script>
                    alert('No existe el Productor!!');
                    window.location.href='modProd.php';
                </script>";
            }
            else{
                $fila=mysqli_fetch_array($resultado);
                echo ("<div class='flex-container'><div class='flex-uno'><input type=hidden name='codigo' value='$codigo'>");

                echo ("<p> Descripcion: <input type='text' name='descripcion' value=".$fila['descripcion']."></p>");
                
                echo ("<p> Precio: <input type='number' name='precio' value=".$fila['precio']."></p>");

                echo("<p> Marca: <input type='text' name='marca' value=".$fila['marca']."></p>");

                echo("<input type='submit' value='Actualizar'>");
            }
        ?>
    </form>
</body>
</html>