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
      <div class="materia">
        <p onclick="abrirConteudo(this)"><svg class="seta" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                    <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                  </svg>Administração de Redes</p>
                  <?php
                    $sql = "SELECT id, nome FROM conteudo where materia = 'ADRD' ORDER BY nome";
                    $pesquisar = mysqli_query($mysqli, $sql);

                    while($tupla =  mysqli_fetch_assoc($pesquisar)){
                      extract($tupla);
                      echo"<div class='conteudo'><input type='checkbox' name='conteudoSelec[]' value='$id' id='$id'><label for='$id'>$nome</label></div>";
                    }
                  ?>
      </div>
                  <div class="materia">
                    <p onclick="abrirConteudo(this)"><svg class="seta" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                      <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                  </svg>Arquitetura de Software</p>
                    <div class="conteudo"><input type="checkbox" name="" id=""></input><label for="">Opção 1</label></div>
                    <div class="conteudo"><input type="checkbox" name="" id=""></input><label for="">Opção 2</label></div>
                    <div class="conteudo"><input type="checkbox" name="" id=""></input><label for="">Opção 3</label></div>
            </div>
            <div class="materia">
                <p onclick="abrirConteudo(this)"><svg class="seta" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                    <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                  </svg>Banco de Dados</p>
                    <div class="conteudo"><input type="checkbox" name="" id=""></input><label for="">Opção 1</label></div>
                    <div class="conteudo"><input type="checkbox" name="" id=""></input><label for="">Opção 2</label></div>
                    <div class="conteudo"><input type="checkbox" name="" id=""></input><label for="">Opção 3</label></div>
                  </div>
                  <div class="materia">
                    <p onclick="abrirConteudo(this)"><svg class="seta" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                      <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                  </svg>Desenvolvimento Android</p>
                  <div class="conteudo"><input type="checkbox" name="" id=""></input><label for="">Opção 1</label></div>
                    <div class="conteudo"><input type="checkbox" name="" id=""></input><label for="">Opção 2</label></div>
                    <div class="conteudo"><input type="checkbox" name="" id=""></input><label for="">Opção 3</label></div>
                  </div>
                  <div class="materia">
                    <p onclick="abrirConteudo(this)"><svg class="seta" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                      <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                  </svg>Engenharia de Software</p>
                  <div class="conteudo"><input type="checkbox" name="" id=""></input><label for="">Opção 1</label></div>
                  <div class="conteudo"><input type="checkbox" name="" id=""></input><label for="">Opção 2</label></div>
                  <div class="conteudo"><input type="checkbox" name="" id=""></input><label for="">Opção 3</label></div>
                </div>
                <div class="materia">
                  <p onclick="abrirConteudo(this)"><svg class="seta" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                    <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                  </svg>Estrutura de Dados</p>
                  <div class="conteudo"><input type="checkbox" name="" id=""></input><label for="">Opção 1</label></div>
                  <div class="conteudo"><input type="checkbox" name="" id=""></input><label for="">Opção 2</label></div>
                  <div class="conteudo"><input type="checkbox" name="" id=""></input><label for="">Opção 3</label></div>
                </div>
                <div class="materia">
                  <p onclick="abrirConteudo(this)"><svg class="seta" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                    <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                  </svg>Inteligência Artificial</p>
                  <div class="conteudo"><input type="checkbox" name="" id=""></input><label for="">Opção 1</label></div>
                  <div class="conteudo"><input type="checkbox" name="" id=""></input><label for="">Opção 2</label></div>
                  <div class="conteudo"><input type="checkbox" name="" id=""></input><label for="">Opção 3</label></div>
            </div>
            <div class="materia">
                <p onclick="abrirConteudo(this)"><svg class="seta" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                  <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                </svg>Internet das Coisas</p>
                <div class="conteudo"><input type="checkbox" name="" id=""></input><label for="">Opção 1</label></div>
                <div class="conteudo"><input type="checkbox" name="" id=""></input><label for="">Opção 2</label></div>
                <div class="conteudo"><input type="checkbox" name="" id=""></input><label for="">Opção 3</label></div>
              </div>
              <div class="materia">
                <p onclick="abrirConteudo(this)"><svg class="seta" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                  <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                </svg>Linguagem de Programação</p>
                <div class="conteudo"><input type="checkbox" name="" id=""></input><label for="">Opção 1</label></div>
                <div class="conteudo"><input type="checkbox" name="" id=""></input><label for="">Opção 2</label></div>
                <div class="conteudo"><input type="checkbox" name="" id=""></input><label for="">Opção 3</label></div>
              </div>
              <input type="submit" name="Filtrar" class="enviar">
            </form>
          </div>
          <div class="seta-filtro" onclick="abrirFiltro()">
            <svg class="seta" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
              <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
            </svg>
          </div>
          <div class="perguntas">

          </div>
        </body>
        </html>