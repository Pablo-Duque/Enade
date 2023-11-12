<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/GeneralUse.css">
    <link rel="stylesheet" href="css/Style.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="envoltorio">
        <form action="cadastro.php" method="POST">
            <h1 class="titulo">Registre-se</h1>
            <div class="caixa">
                <input type="text" placeholder="Nome" name="nome" id="nome" required>
            </div>
            <div class="caixa">
                <input type="text" placeholder="Sobrenome" name="sobrenome" id="sobrenome" required>
            </div>
            <div class="caixa">
                <input type="text" placeholder="Email" name="email" id="email" required>
                <small id="textEmail" class="erro"></small>
            </div>
            <div class="caixa">
                <input type="password" placeholder="Senha" name="senha" id="senha" required>
                <small id="textSenha" class="erro"></small>
            </div>  
            <div class="caixa">
                <input type="password" placeholder="Repita a Senha" name="confirmaSenha" id="confirmaSenha" required>
                <small id="textConfirmaSenha" class="erro"></small>
            </div>
        <input type="submit" class="botao" name="submit" value="Feito">
        </form>
    </div>
</body>
</html>

