<?php
    session_start();
    include_once("conexao.php");

    $Co = "SELECT ID, nome FROM conteudo";
    $Conteudos = mysqli_query($mysqli, $Co);

    $Ma = "SELECT sigla, nome from materia";
    $Materia = mysqli_query($mysqli, $Ma);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/StyleIndex.css">
    <link rel="stylesheet" href="css/Stylecadas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
            <h4>Se quiser pular uma linha digite &ltbr&gt, digite duas vezes para criar um espaço entre as linhas.</h4>
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
                <h2>E</h2>
                <input class="alternativas" type="text" name="E" required>
            </div>
            
            <div class="alter">
                <h2>Gabarito:</h2>
                <select name="gabarito" id="" required>
                    <option value="">Selecione</option>
                    <option value="1">A</option>
                    <option value="2">B</option>
                    <option value="3">C</option>
                    <option value="4">D</option>
                    <option value="5">E</option>
                </select>

                <h2>Qual o ano da questão:</h2>
                <select name="ano" id="" required>
                    <option value="">Selecione</option>
                    <option value="2008">2008</option>
                    <option value="2010">2010</option>
                    <option value="2014">2014</option>
                    <option value="2017">2017</option>
                    <option value="2021">2021</option>
                </select>
            </div>

            <div class="alter">
                <h2>Matéria:</h2>
                <select name="materia" id="" required>
                    <option value="">Selecione</option>
                    <?php
                        while ($rowMateria = mysqli_fetch_assoc($Materia)) {
                            echo "<option value='" . $rowMateria['sigla'] . "'>" . $rowMateria['nome'] . "</option>";
                        }
                    ?>
                </select>

                <h2>Conteúdo:</h2>
                <select name="conteudo" id="" required>
                    <option value="">Selecione</option>
                    <?php
                        while ($rowConteudo = mysqli_fetch_assoc($Conteudos)) {
                            echo "<option value='" . $rowConteudo['ID'] . "'>" . $rowConteudo['nome'] . "</option>";
                        }
                    ?>
                </select>
            </div>

            <div class="alter">
                <h2>Selecione a dificuldade:</h2>
                <select name="nota" id="" required>
                    <option value="">Selecione</option>
                    <option value="5">Fácil</option>
                    <option value="15">Médio</option>
                    <option value="30">Díficil</option>
                </select>
            </div>
            <center>
            <input type="submit" value="Enviar" name="enviar">
            </center>
            <br>
            <br>
        </form>
    


    </div>
    
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
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>