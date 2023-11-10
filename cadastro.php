<?php
    include_once("conexao.php");

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $criptografia = base64_encode($senha);

    $result = "INSERT INTO usuario(EMAIL, SENHA) VALUES ('$email', '$criptografia')";
    $resultado = mysqli_query($mysqli, $result);
?>