<?php
    $hostname = "localhost";
    $banco = "enade";
    $usuario = "root";
    $senha = "";

    $mysqli = mysqli_connect($hostname, $usuario, $senha, $banco);
    if($mysqli->connect_errno){
        echo"Falha ao conectar: (" . $mysqli->connect_errno .")" . $mysqli->connect_error;
    }
    /*Dar include neste arquivo sempre que quiser acessar o banco de dados*/
?>
