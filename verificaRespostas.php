<?php
    include_once("conexao.php");
    session_start();
    //var_dump($_SESSION['email']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
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
    p{
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 40px;
    }
  </style>
  <title>Simulado</title>
</head>
<body>
  <nav class="barra primaria">
    <a href="index.php">Logo</a>
    <a href="index.php">Home</a>
    <a href="confirmaSim.php">Simulado</a>
    <a href="rank.php">Ranking</a>
    <a href="provasAnteriores.php">Provas Anteriores</a>
    <a href="sobre.php">Sobre</a>
    <a href="#">Cadastrar Pergunta</a>
  </nav>
  
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $respostas_usuario = $_POST["respostas"];

        // Lógica para verificar as respostas
        $pontuacao = 0;

        foreach ($respostas_usuario as $pergunta_id => $resposta_usuario) {
            // Buscar a pontuação associada à pergunta no banco de dados
            $query_pontuacao = "SELECT PONTUACAO FROM PERGUNTA WHERE ID = $pergunta_id";
            $result_pontuacao = $mysqli->query($query_pontuacao);

            if ($result_pontuacao && $result_pontuacao->num_rows == 1) {
                $row_pontuacao = $result_pontuacao->fetch_assoc();
                $pontuacao_pergunta = $row_pontuacao["PONTUACAO"];

                // Comparar a resposta do usuário com o gabarito
                $query_gabarito = "SELECT GABARITO FROM PERGUNTA WHERE ID = $pergunta_id";
                $result_gabarito = $mysqli->query($query_gabarito);

                if ($result_gabarito && $result_gabarito->num_rows == 1) {
                    $row_gabarito = $result_gabarito->fetch_assoc();
                    $gabarito = $row_gabarito["GABARITO"];

                    if ($resposta_usuario == $gabarito) {
                        // Resposta correta, somar a pontuação associada à pergunta
                        $pontuacao += $pontuacao_pergunta;
                    }
                }
            }
        }

        // Atualizar a pontuação máxima na tabela "usuario"
        $email_usuario = $_SESSION['email'];
        $query_atualizar_pontuacao = "UPDATE usuario SET pontuacao_maxima = GREATEST(pontuacao_maxima, $pontuacao) WHERE EMAIL = '$email_usuario'";
        $resultado_atualizar_pontuacao = $mysqli->query($query_atualizar_pontuacao);

        if ($resultado_atualizar_pontuacao) {
            echo "<p>Sua pontuação: $pontuacao</p>";
            echo"<br>";
        } else {
            echo "<p>Erro ao atualizar a pontuação. Por favor, tente novamente.</p>";
        }
    } else {
        echo "<p>Método de requisição inválido</p>";
    }
?>
</body>
</html>
