<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/StyleIndex.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/rank.css">
    <title>Rank</title>
</head>
<?php
    include_once("conexao.php"); //conexão com o banco
?>
<body>
<!-- Header -->
    <nav class="container-fluid p-auto bg-primary primaria m-0 text-center">
        <a href="index.php"><img src="./img/sirius.png" alt=""></a>
        <a href="index.php">Home</a>
        <a href="confirmaSim.php">Simulado</a>
        <a href="rank.php">Ranking</a>
        <a href="provasAnteriores.html">Provas Anteriores</a>
        <a href="sobre.html">Sobre</a>
    </nav>
    <div class="mt-2 container d-flex flex-column justify-content-center p-2 align-items-center" id="container-da-barra-de-pesquisa">
        <h1 class="mt-3 text-center">RANK</h1>
        <h5 class="text-center" id="subtitulo">Veja quanto outros alunos têm se preparado para o Enade</h5>
        <!-- barra de pesquisa -->
        <!-- <div id="barra-de-pesquisa"> -->
            <!-- <small class="pt-3 pb-3 p-4 align-middle">procure um usuário...   </small> -->
            <form action="rank.php" method="post" class="border-2 d-flex justify-content-between border-dark border mt-3 mb-3 slide-in" id="barra-de-pesquisa">
                <input type="text" placeholder="procure um usuário..." class=" d-flex m-0 border-0 w-100 p-2" name="pesquisar">
                <button type="submit" class="border-top-0 border-right-0 border-bottom-0"><i class="p-4 fa-solid fa-magnifying-glass fa-xl"></i></button>
            </form>
        <!-- </div> -->
    </div>
    <div class="container d-flex p-0 mt-3 slide-in" id="container-do-rank">
        <table class="table align-middle table-striped table-secondary table-bordered border border-dark border-2">
            <thead>
                <tr>
                    <th >#</th>
                    <th >USUÁRIO</th>
                    <th>PONTUAÇÃO MÁXIMA</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $pesquisar = isset($_POST['pesquisar']) ? mysqli_real_escape_string($mysqli, $_POST['pesquisar']) : null;

                    $rank = new Rank($mysqli, $pesquisar);
                    
                    $rank->exibirTabela();                    
                ?>  
            </tbody>    
        </table> 
    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- FontAwesome (ícones) -->
    <script src="https://kit.fontawesome.com/00d2f0105d.js" crossorigin="anonymous"></script>
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


<?php
//Implementando os métodos de exibição da tabela.
class Rank
{
    public $resultado, $rank = NULL;

    public function __construct($mysqli, $buscar = NULL) 
    {
        if (is_null($buscar) || $buscar === '') 
        {
            $queryRank = 'SELECT * FROM USUARIO';
        } 
        else 
        {
            $queryRank = "SELECT * FROM USUARIO WHERE nome = '$buscar'";
        }

        $this->resultado = mysqli_query($mysqli, $queryRank);

        if ($this->resultado) 
        {            
            $this->rank = $this->calcRank();
        }
        else
        {
            throw new Exception(mysqli_error($mysqli));
        }
    }

    public function exibirTabela() 
    {
        if ($this->resultado) 
        {
            $i = 1;
            foreach ($this->rank as $linha) 
            {
                echo 
                "<tr>"
                    . "<td>". $i . "</td>"
                    . "<td>" . $linha["Nome"] . "</td>" 
                    . "<td>" . $linha["pontuacao_maxima"] . "</td>"
                . "</tr>";

                $i++;
            }
        }
        else
        {
            echo
            "<tr>
                <td> 0 </td>
                <td> ERRO DE CONEXÃO </td>
                <td> ERRO DE CONEXÃO </td>
            </tr>";
        }
    }
    private function calcRank($int = 1)
    {
        $tabela = array();

        while ($linha = mysqli_fetch_assoc($this->resultado)) 
        {
            $tabela[] = $linha;
        }

        return ($int == 1) ? $this->maiorMenor($tabela) : $this->menorMaior($tabela);
    }

    private function maiorMenor($arr)
    {
        $n = count($arr);

        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($arr[$j]['pontuacao_maxima'] < $arr[$j + 1]['pontuacao_maxima']) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
        }

        return $arr;
    }

    private function menorMaior($arr)
    {
        $n = count($arr);

        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($arr[$j]['pontuacao_maxima'] > $arr[$j + 1]['pontuacao_maxima']) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
        }

        return $arr;
    }

}
?>
