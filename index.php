<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/StyleIndex.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="javaScript/Index.js"></script>
  <title>Inicio</title>
</head>

<?php
  include_once("conexao.php");
?>

<body>
  <nav class="barra primaria">
    <a href="#">Logo</a>
    <a href="#">Home</a>
    <a href="#">Simulado</a>
    <a href="rank.html">Ranking</a>
    <a href="#">Provas Anteriores</a>
    <a href="#">Sobre</a>
    <a href="#">Cadastrar Pergunta</a>
  </nav>
  <div class="filtro secundaria">
    <form action="" method="post">
      <?php 
      $materia = "SELECT sigla, nome FROM materia ORDER BY nome";
      $pesqMat = mysqli_query($mysqli, $materia);

      //Inclui tupla por tupla
      while($tuplaMat =  mysqli_fetch_assoc($pesqMat)){
        //Extrair do banco de dados, desse modo consigo utilizar as variaveis com o mesmo nome do atributo
        extract($tuplaMat);
        echo"<div class='materia'>
        <p onclick='abrirConteudo(this)'><svg class='seta' xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='currentColor' class='bi bi-caret-right-fill' viewBox='0 0 16 16'>
                    <path d='m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z'/>
                  </svg>$nome</p>";
                  
                    $conteudo = "SELECT id, nome FROM conteudo where materia = '$sigla' ORDER BY nome";
                    $pesqCont = mysqli_query($mysqli, $conteudo);

                    while($tuplaCont =  mysqli_fetch_assoc($pesqCont)){
                      extract($tuplaCont);
                      echo"<div class='conteudo'><input type='checkbox' name='conteudoSelec[]' value='$id' id='$id'><label for='$id'>$nome</label></div>";
                    }
                  
        echo"</div>";
      }

      ?>
              <input type="submit" value="Filtrar" name="FiltrarContent" class="enviar">
            </form>
          </div>
          <div class="seta-filtro" onclick="abrirFiltro()">
            <svg class="seta" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
              <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
            </svg>
          </div>
          <div class="perguntas">
            <?php
            //Armazenar questões selecionadas
              $marcado = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                $conjuntoValores = '';
                $i = 0;
                $max = 10;
                if(!empty($marcado['conteudoSelec'])){
                  foreach($marcado['conteudoSelec'] as $valorMarcado){
                    if(!empty($conjuntoValores)){
                      $conjuntoValores .= ", $valorMarcado";
                    }
                    else{
                      $conjuntoValores .= "$valorMarcado";
                    }
                  }
                  //Substituir pelas perguntas
                  $pergunta = "SELECT nome FROM conteudo WHERE id IN($conjuntoValores) ORDER BY nome";
                  $pesqPerg = mysqli_query($mysqli, $pergunta);
  
                  while($tuplaPerg = mysqli_fetch_assoc($pesqPerg)){
                    extract($tuplaPerg);
                    echo"$nome<br>";
                    $i++;
                    if($i >= $max)
                      break;
                  }
                }
                else{
                  //Descobrir qual a ultima questao armazenada
                  $maxQuest = "SELECT count(*) as ultimaQuestao FROM conteudo";
                  $pesqContagem = mysqli_query($mysqli, $maxQuest);
                  $intermediario = mysqli_fetch_assoc($pesqContagem);
                  extract($intermediario);

                  //Gerar numeros aleatorios
                  $gerar = array();
                  while(count($gerar) < $max){
                    $num = rand(1, $ultimaQuestao);
                    if(!in_array($num, $gerar)){
                      $gerar[] = $num;
                    }
                  }
                  $aleatorios = implode(', ', $gerar);

                  //Buscar questoes aleatorias
                  $pergunta = "SELECT nome FROM conteudo WHERE id IN($aleatorios) ORDER BY nome";
                  $pesqPerg = mysqli_query($mysqli, $pergunta);
  
                 while($tuplaPerg = mysqli_fetch_assoc($pesqPerg)){
                    extract($tuplaPerg);
                   echo"$nome<br>";
                   $i++;
                   if($i >= $max)
                    break;
                  }
                }

            ?>
          </div>
        </body>
        </html>