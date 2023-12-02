<?php
include_once("conexao.php");
session_start();
var_dump($_SESSION['email']);

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
        echo "Sua pontuação foi atualizada com sucesso. Pontuação atual: $pontuacao";
        echo"<br>";
        echo $email_usuario;
    } else {
        echo "Erro ao atualizar a pontuação. Por favor, tente novamente.";
    }
} else {
    echo "Método de requisição inválido";
}
?>
