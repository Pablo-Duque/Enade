<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Cadastro</title>
</head>
<body>
    <div class="envoltorio">
        <form action="cadastro.php" method="POST" id="form">
            <h1 class="titulo">Registre-se</h1>
            <div class="caixa">
                <input type="text" placeholder="Nome" name="nome" id="nome" >
                <i class='bx bx-check-circle bx-sm'></i>
                <i class='bx bx-error-circle bx-sm' ></i>
                <small>erro</small>
            </div>
            <div class="caixa">
                <input type="text" placeholder="Sobrenome" name="sobreNome" id="sobreNome" >
                <i class='bx bx-check-circle bx-sm'></i>
                <i class='bx bx-error-circle bx-sm' ></i>
                <small>erro</small>
            </div>
            <div class="caixa">
                <input type="text" placeholder="Email" name="email" id="email" >
                <i class='bx bx-check-circle bx-sm'></i>
                <i class='bx bx-error-circle bx-sm' ></i>
                <small>erro</small>
            </div>
            <div class="caixa">
                <input type="password" placeholder="Senha" name="senha" id="senha" >
                <i class='bx bx-check-circle bx-sm'></i>
                <i class='bx bx-error-circle bx-sm' ></i>
                <small>erro</small>
            </div>  
            <div class="caixa">
                <input type="password" placeholder="Repita a Senha" name="confirmaSenha" id="confirmaSenha" >
                <i class='bx bx-check-circle bx-sm'></i>
                <i class='bx bx-error-circle bx-sm' ></i>
                <small>erro</small>
            </div>
        <input type="submit" class="botao" name="submit" value="Feito">
        </form>
    </div>
    <script src="Script.js"></script>
</body>
</html>
