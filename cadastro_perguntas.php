<?php
    session_start();
    include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/StyleIndex.css">
    <link rel="stylesheet" href="css/Stylecadas.css">
    <title>Cadastrar perguntas</title>
</head>
<body>
    <nav class="barra primaria">
        <a href="#">Logo</a>
        <a href="index.php">Home</a>
        <a href="confirmaSim.php">Simulado</a>
        <a href="rank.php">Ranking</a>
        <a href="#">Provas Anteriores</a>
        <a href="sobre.php">Sobre</a>
        <a href="#">Cadastrar Pergunta</a>
    </nav>

    <div class="cartao">
        <form action="cadper.php" method="post">

            <h2>Digite o enunciado:</h2>
            <input class="enunciado" type="text" name="enunciado" required>

            <h2>Alternativas:</h2>
            <div class="alter">
                <h2>A</h2>
                <input class="alternativas" type="text" name="A" required>
            </div>
            <div class="alter">
                <h2>B</h2>
                <input class="alternativas" type="text" name="B" required>
            </div>
            <div class="alter">
                <h2>C</h2>
                <input class="alternativas" type="text" name="C" required>
            </div>
            <div class="alter">
                <h2>D</h2>
                <input class="alternativas" type="text" name="D" required>
            </div>
            
            <div class="alter">
                <h2>Gabarito:</h2>
                <select name="gabarito" id="" required>
                    <option value="1">A</option>
                    <option value="2">B</option>
                    <option value="3">C</option>
                    <option value="4">D</option>
                </select>

                <h2>Qual o ano da questão:</h2>
                <select name="ano" id="" required>
                    <option value="2008">2008</option>
                </select>
            </div>

            <div class="alter">
                <h2>Matéria:</h2>
                <select name="materia" id="" required>
                    <?php
                        //$alternativas = "SELECT sigla, nome FROM materia";
                        //$resulta = $mysqli->query($sql);
                        //while ($row = $result->fetch_assoc()) {
                            //$selected = ($row['nome'] == $valorPreselecionado) ? 'selected' : '';
                            //echo "<option value='" . $row['sigla'] . "'>" . $row['nome'] . "</option>";
                        //}
                    ?>
                    <option value="ADRD">Administração de Redes</option>
                    <option value="ARQS">Arquitetura de Software</option>
                    <option value="BDA">Banco de Dados</option>
                    <option value="CTGR">Conteúdo Geral</option>
                    <option value="DDMO">Desenvolvimento para Dispositivos Móveis</option>
                    <option value="ENSW">Engenharia de Software</option>
                    <option value="ESD">Estrutura de Dados</option>
                    <option value="IOTS">Internet das Coisas</option>
                    <option value="LPR">Linguagem de Programação</option>
                </select>

                <h2>Conteúdo:</h2>
                <select name="conteudo" id="" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <center>
            <input type="submit" value="Enviar" name="enviar">
            </center>
            <br>
            <br>
        </form>
    


    </div>

</body>
</html>