<?php
    session_start();
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/StyleLogin.css">
    <title>Login</title>
</head>
<body>
    <div class="envoltorio">
        <form action="login.php" method="POST">
            <br>
            <h2 class="titulo">Faça seu login para continuar</h2>
            <p class="titulo">
                <br>
            <?php
                if(isset($_SESSION['loginErro'])){
                    echo $_SESSION['loginErro'];
                    unset($_SESSION['loginErro']);
                }if(isset($_SESSION['cadastroSucesso'])){
                    echo $_SESSION['cadastroSucesso'];
                    unset($_SESSION['cadastroSucesso']);
                }
            ?>
        </p>
            <div class="caixa bxvisivel">
                <label for="email"></label>
                <input type="text" placeholder="Email" name="email" id="email" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="caixa">
            <label for="senha"></label>
                <input type="password" placeholder="Senha" name="senha" id="senha" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="lembrar">
                <label><input type="checkbox">Lembre-se de Mim</label>
                <a href="">Esqueceu a Senha?</a>
            </div>
            <br>
            <input type="submit" class="botao" name="submit" value="Login">
            <div class="registro">
                <p>Não possui uma conta? <a href="cadastro_tela.php">Registre-se</a></p>
            </div>
        </form>
    </div>
</body>
</html>
