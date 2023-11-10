<?php
    include_once("conexao.php");

    $senha = $_POST["senha"];
    $email = $_POST["email"];

    $criptografia = base64_encode($senha);


    $result = "SELECT * FROM USUARIO WHERE EMAIL = '$email' && SENHA = '$criptografia' LIMIT 1";
    $resultado = mysqli_query($mysqli, $result);
    
    if(mysqli_num_rows($resultado) == 0){
        echo '<script language="JavaScript" charset="utf-8">alert("Login Inválido!")</script>';
		echo '<meta HTTP-EQUIV="refresh" CONTENT="0; URL=login.php">';
    }else{
        session_start();
	 	$_SESSION["email"] = $_POST["email"];
		$_SESSION["nome"]    = $sql_campos["nome"];
        $_SESSION["foto"] = $sql_campos["foto"];
		header("Location: inicio.php");//Comando para direcionar até a tela de inicio
    }
?>