<?php
    include_once("conexao.php");
    session_start();
    /*var_dump($_SESSION["email"]);*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/StyleIndex.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .alternativa{
            margin: 20px;
            margin-left: 370px;
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
            margin-left: 875px;
        }
        .botao:hover{
            background: #000000aa;
        }
    </style>
    <script src="javaScript/timer.js"></script>
    <title>Simulado</title>
</head>
<body>

<nav class="container-fluid p-auto bg-primary primaria m-0 text-center">
    <a href="index.php"><img src="./img/sirius.png" alt=""></a>
    <a href="index.php">Home</a>
    <a href="confirmaSim.php">Simulado</a>
    <a href="rank.php">Ranking</a>
    <a href="provasAnteriores.html">Provas Anteriores</a>
    <a href="sobre.html">Sobre</a>
  </nav>


    <p>Tempo Restante: <span id="timer"></span></p>
    

    <?php
    $query_pergunta = "SELECT ID, enunciado, ano FROM PERGUNTA ORDER BY RAND() LIMIT 10";
    $result_pergunta = $mysqli->query($query_pergunta);

    if ($result_pergunta && $result_pergunta->num_rows != 0) {
        echo "<form method='post' action='verificaRespostas.php'>";
        while ($row_pergunta = $result_pergunta->fetch_assoc()) {
            extract($row_pergunta);
            echo "<div class='pergunta'>";
            echo "(" . $ano . ") " . $enunciado . "<br><br>";
            echo "</div>";

            $query_resposta = "SELECT ID AS ID_ALTERNATIVA, TEXTO, ALTERNATIVA AS VALOR FROM ALTERNATIVA WHERE PERGUNTA = $ID ORDER BY RAND()";
            $result_resposta = $mysqli->query($query_resposta);

            if ($result_resposta && $result_resposta->num_rows != 0) {
                echo "<div class='alternativa'>";
                while ($row_resposta = $result_resposta->fetch_assoc()) {
                    extract($row_resposta);
                    echo "<input type='radio' name='respostas[$ID]' value='$VALOR'>";
                    echo $TEXTO . "<br>";
                }
                echo "</div>";
            } else {
                echo "Resposta não encontrada";
            }

            echo "<br>";
        }
        echo "<input type='submit' value='Enviar Respostas' class='botao'>";
        echo "</form>";
    }
?>

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

