<?php
    $hostname = "localhost";
    $banco = "teste";
    $usuario = "root";
    $senha = "";

    $mysqli = mysqli_connect($hostname, $usuario, $senha, $banco);
    if($mysqli->connect_errno){
        echo"Falha ao conectar: (" . $mysqli->connect_errno .")" . $mysqli->connect_error;
    }
?>