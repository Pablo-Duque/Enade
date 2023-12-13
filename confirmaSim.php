<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/StyleIndex.css">
  <style>
    .lista{
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 20px;
    }
    .botao{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 45px;
        background: hsla(0, 0%, 0%, 0.439);
        border: none;
        outline: none;
        border-radius: 40px;
        box-shadow: 0 0 10px rgba(0, 0, 0, .1);
        cursor: pointer;
        font-size: 16px;
        color: #ffffff;
        font-weight: 600;
        text-decoration: none;
        margin-left: 500px;
        margin-right: 500px;
        margin-top: auto;
    }
    .botao:hover{
    background: #000000aa;
    }
  </style>
  <title>Simulado</title>
</head>

<?php
  include_once("conexao.php");
?>

<body>
<nav class="container-fluid p-auto bg-primary primaria m-0 text-center">
    <a href="index.php"><img src="./img/sirius.png" alt=""></a>
    <a href="index.php">Home</a>
    <a href="confirmaSim.php">Simulado</a>
    <a href="rank.php">Ranking</a>
    <a href="provasAnteriores.html">Provas Anteriores</a>
    <a href="sobre.html">Sobre</a>
  </nav>
  
  <h1 style="display: flex; justify-content: center; align-items: center;">Você está prestes a começar o Simulado! Leia com atenção.</h1>
  <div class="lista">
    <ol>
        <li>O simulado conta com 30 perguntas, todas são de alternativa</li>
        <li>Você terá 4 horas para completar a prova</li>
        <li>Caso não finalize no tempo concedido, você será redirecionado para a tela inicial</li>
        <li>As perguntas serão selecionadas de forma aleatória</li>
        <li>Ao final do teste, você deverá clicar no botão "Enviar Respostas"</li>
        <li>Sua pontuação será contabilizada e enviada ao ranking</li>
        <li>O simulado possui tentativas ilimitadas</li>
        <li>Apenas a sua pontuação mais alta será armazenada</li>
    </ol>

  </div>
  <a href="simulado.php" class="botao" onclick="iniciarSimulado()">Começar Simulado</a>  
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget();
    </script>
    
</body>
</html>