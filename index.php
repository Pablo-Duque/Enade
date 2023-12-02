<?php
  session_start();
?>
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
    <a href="confirmaSim.php">Simulado</a>
    <a href="rank.php">Ranking</a>
    <a href="#">Provas Anteriores</a>
    <a href="sobre.php">Sobre</a>
    <a href="#">Cadastrar Pergunta</a>
  </nav>
  <div class="filtro secundaria">
    <form action="" method="post">
      <?php
      //Selects, os querys precisam estar em variaveis diferentes
      $anos = "SELECT ano FROM pergunta GROUP BY ano";
      $pesqAnoDe = mysqli_query($mysqli, $anos);
      $pesqAnoAte = mysqli_query($mysqli, $anos);

      //Saber o minimo e o maximo
      $anoMinMax = "SELECT min(ano) as minimo, max(ano) as maximo FROM pergunta";
      $pesqMinMax = mysqli_query($mysqli, $anoMinMax);
      $minMax =  mysqli_fetch_assoc($pesqMinMax);
      extract($minMax);

      echo"<div class='anos'>";
      echo"<select name='de'>";
      while($tuplaDe =  mysqli_fetch_assoc($pesqAnoDe)){
        extract($tuplaDe);
        if($ano == $minimo)
        $selected = 'selected';
      else  
        $selected = '';
        echo"<option value='$ano' label='$ano' $selected>$ano</option>";
      }
      echo"</select>";
      
      echo"<select name='ate'>";
      while($tuplaAte =  mysqli_fetch_assoc($pesqAnoAte)){
        extract($tuplaAte);
        if($ano == $maximo)
          $selected = 'selected';
        else  
          $selected = '';
        echo"<option value='$ano' label='$ano' $selected>$ano</option>";
      }
      echo"</select>";
      echo"</div>";

      //Imprime tupla por tupla das materias
      $materia = "SELECT sigla, nome FROM materia ORDER BY nome";
      $pesqMat = mysqli_query($mysqli, $materia);
      while($tuplaMat =  mysqli_fetch_assoc($pesqMat)){
        //Extrair do banco de dados, desse modo consigo utilizar as variaveis com o mesmo nome do atributo
        extract($tuplaMat);
        echo"<div class='materia'>
        <p onclick='abrirConteudo(this)'><svg class='seta' xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='currentColor' 
        class='bi bi-caret-right-fill' viewBox='0 0 16 16'>
        <path d='m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z'/>
        </svg>$nome</p>";
        
        //Imprime tupla por tupla dos conteudos das respectivas materias
        $conteudo = "SELECT id, nome FROM conteudo where materia = '$sigla' ORDER BY nome";
        $pesqCont = mysqli_query($mysqli, $conteudo);

        while($tuplaCont =  mysqli_fetch_assoc($pesqCont)){
          extract($tuplaCont);
          echo"<div class='conteudo'><input type='checkbox' name='conteudoSelec[]' value='$id' id='$id'><label for='$id'>$nome</label></div>";
        }
                  
        echo"</div>";
      }

      echo"
      <input type='submit' value='Filtrar' name='FiltrarContent' class='enviar'>
    </form>
  </div>

  <div class='seta-filtro' onclick='abrirFiltro()'>
    <svg class='seta' xmlns='http://www.w3.org/2000/svg' width='40' height='40' fill='currentColor' class='bi bi-caret-right-fill' viewBox='0 0 16 16'>
      <path d='m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z'/>
    </svg>
  </div>
  <div class='contentPerguntas'>
    <form action='' method='post'>
    ";
    //Armazenar questões selecionadas
    $marcado = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    
    //Atribuir um valor se nada for selecionado, pois eu uso esse valor tanto usando o filtro como nao
    //Porque se eu nao selecionar nenhuma checkbox o filtro nao ativaria por causa do primeiro if !empty
    if (isset($_POST['de']) && isset($_POST['ate'])) {
      $de = $_POST['de'];
      $ate = $_POST['ate'];
  
    } else {
      $de = $minimo;
      $ate = $maximo;
    }

    //Variaveis de controle
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
      //Imprime as perguntas
      $pergunta = "SELECT enunciado, id, ano FROM pergunta WHERE conteudo IN($conjuntoValores) AND ano BETWEEN $de AND $ate ORDER BY RAND()";
      $pesqPerg = mysqli_query($mysqli, $pergunta);

      while($tuplaPerg = mysqli_fetch_assoc($pesqPerg)){
        extract($tuplaPerg);
        
        echo"<div class = 'pergunta'>($ano) $enunciado<br>";
        
        //Imprime as alternativas de cada pergunta
        $alternativa = "SELECT texto, pergunta as questao, alternativa as valor FROM alternativa WHERE pergunta = $id ORDER BY RAND()";
        $pesqAlt = mysqli_query($mysqli, $alternativa);
        
        echo"<div class = 'alternativas'>";
        while($tuplaAlt = mysqli_fetch_assoc($pesqAlt)){
          extract($tuplaAlt);
          echo"<input type='radio' id='$valor' name='$questao' value='$valor'>
          <label for='$valor'>$texto</label><br>";
        }
        echo"</div>";
        echo"</div>";

        $i++;
        if($i >= $max)
          break;
        }
      }
      else{
        //Descobrir qual a ultima questao armazenada
        $maxQuest = "SELECT count(*) as ultimaQuestao FROM pergunta";
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
          //Se o numero de questoes for menor que o maximo para de gerar, para evitar o nao carregamento da pagina
          if(count($gerar) >= $ultimaQuestao)
            break;
        }                    
        //Adiciona virgula depois de cada numero para usar no IN()
        $aleatorios = implode(', ', $gerar);

        //Buscar questoes aleatorias
        $pergunta = "SELECT enunciado, id, ano FROM pergunta WHERE id IN($aleatorios) AND ano BETWEEN $de AND $ate ORDER BY RAND()";
        $pesqPerg = mysqli_query($mysqli, $pergunta);

        while($tuplaPerg = mysqli_fetch_assoc($pesqPerg)){
          extract($tuplaPerg);
          echo"<div class = 'pergunta'>($ano) $enunciado<br>";
          
          //Imprime as alternativas de cada pergunta
          $alternativa = "SELECT texto, pergunta as questao, alternativa as valor FROM alternativa WHERE pergunta = $id ORDER BY RAND()";
          $pesqAlt = mysqli_query($mysqli, $alternativa);
          echo"<div class = 'alternativas'>";
          while($tuplaAlt = mysqli_fetch_assoc($pesqAlt)){
            extract($tuplaAlt);
            echo"<input type='radio' id='$valor' name='$questao' value='$valor'>
            <label for='$valor'>$texto</label><br>";
          }
          echo"</div>";
          echo"</div>";

          $i++;
          if($i >= $max)
            break;
        }
      }
      ?>
      </input>
    </div>
</body>
</html>
