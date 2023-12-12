<?php
    include_once("conexao.php");
    $enunciado = $_POST['enunciado'];
    $A = $_POST['A'];
    $B = $_POST['B'];
    $C = $_POST['C'];
    $D = $_POST['D'];
    $gab = $_POST['gabarito'];
    $ano = $_POST['ano'];
    $mat = $_POST['materia'];
    $con = $_POST['conteudo'];

    $cadastrar = "INSERT INTO pergunta(enunciado, materia, conteudo, ano, gabarito, PONTUACAO) VALUES ('$enunciado', '$mat', '$con', '$ano', '$gab', NULL)";
    $cas = mysqli_query($mysqli, $cadastrar);

    if ($cas) {
        echo "Pergunta cadastrada";
        header("Location: cadastro_perguntas.php");
    } else {
        echo "Erro ao cadastrar pergunta: " . mysqli_error($mysqli);
    }
?>
