<?php
    include_once("conexao.php");
    session_start();
    $senha = $_POST["senha"];
    $email = $_POST["email"];

    if ($email == "admin@admin.com") {
        $result = "SELECT * FROM USUARIO WHERE EMAIL = '$email' LIMIT 1";
        $resultado = mysqli_query($mysqli, $result);
        if ($resultado && $usuario = mysqli_fetch_assoc ($resultado)) {
            if (password_verify($senha, $usuario["SENHA"])) {
                if (password_needs_rehash($usuario["SENHA"], PASSWORD_DEFAULT)) {
                    $hashAtualizado = password_hash($senha, PASSWORD_DEFAULT);// Atualiza o hash 
                    $atualizaSenha = "UPDATE USUARIO SET SENHA = '$hashAtualizado' WHERE EMAIL = '$email'";//Insere hash atualizado no banco
                    $resultado = mysqli_query($mysqli, $atualizaSenha);
                }
                header("Location: cadastroAdmin_tela.php");//Cadastro do ADM
            }else{
                header("Location: login_tela.php");
                $_SESSION['loginErro'] = 'Email ou senha inválido!';
            }
        }
    } else {
        $result = "SELECT * FROM USUARIO WHERE EMAIL = '$email' LIMIT 1";
        $resultado = mysqli_query($mysqli, $result);

        if ($resultado && $usuario = mysqli_fetch_assoc($resultado)) {
            if (isset($usuario["SENHA"]) && password_verify($senha, $usuario["SENHA"])) {
                if (password_needs_rehash($usuario["SENHA"], PASSWORD_DEFAULT)) {
                    $hashAtualizado = password_hash($senha, PASSWORD_DEFAULT);// Atualiza o hash 
                    $atualizaSenha = "UPDATE USUARIO SET SENHA = '$hashAtualizado' WHERE EMAIL = '$email'";//Insere hash atualizado no banco
                    $resultado = mysqli_query($mysqli, $atualizaSenha);
                }
                $_SESSION["email"] = $usuario["EMAIL"];
                $_SESSION["nome"] = $usuario["NOME"];
                $_SESSION["sobreNome"] = $usuario["SOBRENOME"];
                $_SESSION["foto"] = $usuario["FOTO"];
                /*inserir if(campo adm == 1 ){
                    direcionar a pagina de adms com cadastro de perguntas
                }*/
                header("Location: index.php");//Entrar na tela de inicio
            } else {
                header("Location: login_tela.php");
                $_SESSION['loginErro'] = 'Email ou senha inválido!';
            }
        } else {
            header("Location: login_tela.php");
            $_SESSION['loginErro'] = 'Email ou senha inválido!';
        }
    }
?>
