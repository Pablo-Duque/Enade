<?php
    include_once("conexao.php");
    session_start();
    $nome = $_POST["nome"];
    $sobreNome = $_POST["sobreNome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $criptografia = password_hash($senha, PASSWORD_DEFAULT);

    $result = "INSERT INTO usuario(EMAIL, SENHA, NOME, SOBRENOME, PONTUACAO_MAXIMA,ADM) VALUES ('$email', '$criptografia', '$nome', '$sobreNome', 0, 0)";
    $resultado = mysqli_query($mysqli, $result);

    if ($resultado) {
        $_SESSION['cadastroSucesso'] = 'Usuário cadastrado com sucesso! Faça login para entrar';
        header("Location: login_tela.php");
        exit;
    } else {
        echo "Erro ao cadastrar usuário: " . mysqli_error($mysqli);
    }
?>
