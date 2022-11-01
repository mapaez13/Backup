<?php
    $user='root';
    $pass='';
    $db='login';
    $servidor='localhost';

    $link=mysqli_connect($servidor,$user,$pass) or die ("No se pudo conectar correctamente");
    mysqli_select_db($link,$db) or die ("No se encontro la base de datos");
?>