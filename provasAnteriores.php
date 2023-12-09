<?php
    session_start();
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
  </style>
  <title>Simulado</title>
</head>

<?php
  include_once("conexao.php");
?>

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
  
  <h1 style="display: flex; justify-content: center; align-items: center;">Provas anteriores</h1>
  <div class="lista">
    <ul>
        <li><a href="https://download.inep.gov.br/download/Enade2008_RNP/TECNOLOGIA_DESENVOLVIMENTO_SISTEMAS.pdf">Prova 2008</a></li>
        <li><a href="https://download.inep.gov.br/download/Enade2008_RNP/GABARITO_TECNOLOGIA_EM_ANALISE_DESENVOLVIMENTO_SISTEMAS.pdf">Gabarito 2008</a></li>
        <br><br>

        <li><a href="https://download.inep.gov.br/educacao_superior/enade/provas/2011/ANALISE_E_DESENVOLVIMENTO_DE_SISTEMAS.pdf">Prova 2011</a></li>
        <li><a href="https://download.inep.gov.br/educacao_superior/enade/gabaritos/2011/Enade2011_Gab_Def_Tec_Analise_Des_Sistemas.pdf">Gabarito 2011</a></li>
        <br><br>

        <li><a href="https://download.inep.gov.br/educacao_superior/enade/provas/2014/40_tecnologia_analise_desenv_sistemas.pdf">Prova 2014</a></li>
        <li><a href="https://download.inep.gov.br/educacao_superior/enade/gabaritos/2014/40_gab_tecnologia_analise_desenv_sistemas.pdf">Gabarito 2014</a></li>
        <br><br>

        <li><a href="https://download.inep.gov.br/educacao_superior/enade/provas/2017/41_TEC_ANA_DES_SIS_BAIXA.pdf">Prova 2017</a></li>
        <li><a href="https://download.inep.gov.br/educacao_superior/enade/gabaritos/2017/41_CST_Analise_e_Desenvolvimento_de_Sistemas.pdf">Gabarito 2017</a></li>
        <br><br>

        <li><a href="https://download.inep.gov.br/enade/provas_e_gabaritos/2021_PV_tecnologia_analise_desenvolvimento_sistemas.pdf">Prova 2021</a></li>
        <li><a href="https://download.inep.gov.br/enade/provas_e_gabaritos/2021_GB_tecnologia_analise_desenvolvimento_sistemas.pdf">Gabarito 2021</a></li>


    </ul>

  </div>
</body>
</html>