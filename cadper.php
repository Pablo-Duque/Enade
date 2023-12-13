<?php
    include_once("conexao.php");
    $enunciado = $_POST['enunciado'];
    $A = $_POST['A'];
    $B = $_POST['B'];
    $C = $_POST['C'];
    $D = $_POST['D'];
    $E = $_POST['E'];
    $gab = $_POST['gabarito'];
    $ano = $_POST['ano'];
    $mat = $_POST['materia'];
    $con = $_POST['conteudo'];
    $nota = $_POST['nota'];

    $cadastrar = "INSERT INTO pergunta(enunciado, materia, conteudo, ano, gabarito, PONTUACAO) VALUES ('$enunciado', '$mat', '$con', '$ano', '$gab', '$nota')";
    $cas = mysqli_query($mysqli, $cadastrar);

    $ultimoId = mysqli_insert_id($mysqli);

    $acad = "INSERT INTO alternativa(alternativa, pergunta, texto) VALUES ('1', '$ultimoId', '$A')";
    $acas = mysqli_query($mysqli, $acad);
    $bcad = "INSERT INTO alternativa(alternativa, pergunta, texto) VALUES ('2', '$ultimoId', '$B')";
    $bcas = mysqli_query($mysqli, $bcad);
    $ccad = "INSERT INTO alternativa(alternativa, pergunta, texto) VALUES ('3', '$ultimoId', '$C')";
    $ccas = mysqli_query($mysqli, $ccad);
    $dcad = "INSERT INTO alternativa(alternativa, pergunta, texto) VALUES ('4', '$ultimoId', '$D')";
    $dcas = mysqli_query($mysqli, $dcad);
    $ecad = "INSERT INTO alternativa(alternativa, pergunta, texto) VALUES ('5', '$ultimoId', '$E')";
    $ecas = mysqli_query($mysqli, $ecad);

    if ($cas && $acas && $bcas && $ccas && $dcas && $ecad) {
        header("Location: cadastro_perguntas.php");
    }
    else {
        echo "Erro ao cadastrar pergunta: " . mysqli_error($mysqli);
    }
?>
