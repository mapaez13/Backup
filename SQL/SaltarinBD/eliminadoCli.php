<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminado</title>
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>
<body>
    <!--Aqui borramos la fila que el usuario pidió mediante el código que ingresó-->
    <?php
    include 'conexion.php';
    $codigo=$_REQUEST['codigo'];
            $sql="SELECT * FROM Clientes WHERE codCliente=$codigo";
            $resultado=mysqli_query($link,$sql);
            $nfilas=mysqli_num_rows ($resultado);
            if ($nfilas==0){
                echo "<script>
                    alert('No existe el Cliente!!');
                    window.location.href='elCli.php';
                </script>";
            }
            else{
                $sql="DELETE FROM Clientes WHERE codCliente=$codigo";
                mysqli_query($link,$sql);
                echo "<script>
                    alert('Se borraron los Datos Exitosamente!!');
                    window.location.href='listCli.php';
                </script>";
            }
    ?>
</body>
</html>