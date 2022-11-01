<?php
    session_start();
    include 'conexion.php';
    $user=$_REQUEST['user'];
    $pass=$_REQUEST['pass'];

    $sql="SELECT * FROM usuario WHERE username='$user' AND password='$pass'";
    $resultado=mysqli_query($link,$sql);
    $numFilas=mysqli_num_rows($resultado);
    $fila=mysqli_fetch_array($resultado);
    $id=$fila['id'];
    $name=$fila['username'];
    $foto=$fila['foto'];
    
    if ($numFilas > 0){
        //Id del usuario, puede llamarse de cualquier manera
        $_SESSION ['idUser'] = $id;
        $_SESSION ['name'] = $name;
        $_SESSION ['foto'] = $foto;
        header ('Location:bien.php');
    }
    else{
        header ('Location:registro.html');
    }
    mysqli_close($link);
?>