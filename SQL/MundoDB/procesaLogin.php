<?php
    session_start();
    include 'conexion.php';
    $user=$_REQUEST['user'];
    $pass=$_REQUEST['pass'];

    $imagen='archivos/'.basename($_FILES['foto']['name']);

    move_uploaded_file($_FILES['foto']['tmp_name'], $imagen);

    $sql="SELECT * FROM vendedor WHERE username='$user' AND password='$pass'";
    $resultado=mysqli_query($link,$sql);
    $numFilas=mysqli_num_rows($resultado);
    $fila=mysqli_fetch_array($resultado);
    $id=$fila['idVendedor'];
    $name=$fila['username'];
    $foto=$fila['foto'];
    
    if ($numFilas > 0){
        //Id del usuario, puede llamarse de cualquier manera
        $_SESSION ['idUser'] = $id;
        $_SESSION ['name'] = $name;
        $_SESSION ['foto'] = $foto;
        header ('Location:postLogin.php');
    }
    else{
        header ('Location:error.html');
    }
    mysqli_close($link);
?>