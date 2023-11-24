<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/rank.css">
    <title>Rank</title>
</head>
<body>
    <div class="mt-2 container d-flex flex-column justify-content-center p-2 align-items-center" id="container-da-barra-de-pesquisa">
        <h1 class="mt-3 text-center">RANK</h1>
        <h5 class="text-center" id="subtitulo">Veja quanto outros alunos têm se preparado para o Enade</h5>
        <!-- barra de pesquisa -->
        <div class="border-2 d-flex justify-content-between border-dark border mt-3 mb-3 slide-in" id="barra-de-pesquisa">
            <small class="pt-3 pb-3 p-4 align-middle">procure um usuário...   </small>
            <i class="p-4 fa-solid fa-magnifying-glass fa-xl"></i>
        </div>
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
                    $rank = new Rank();
                    
                    $rank->exibirTabela();                    
                ?>  
            </tbody>    

            <!--<tbody>
                <tr>
                    <td>1</td>
                    <td>Pablito</td>
                    <td>1000000</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Pablito</td>
                    <td>1000000</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Pablito</td>
                    <td>1000000</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Pablito</td>
                    <td>1000000</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Pablito</td>
                    <td>1000000</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Pablito</td>
                    <td>1000000</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Pablito</td>
                    <td>1000000</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Pablito</td>
                    <td>1000000</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Pablito</td>
                    <td>1000000</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Pablito</td>
                    <td>1000000</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Pablito</td>
                    <td>1000000</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Pablito</td>
                    <td>1000000</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Pablito</td>
                    <td>1000000</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Pablito</td>
                    <td>1000000</td>
                </tr>
            </tbody>-->
        </table> 
    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- FontAwesome (ícones) -->
    <script src="https://kit.fontawesome.com/00d2f0105d.js" crossorigin="anonymous"></script>
</body>
</html>

<?php
    include_once("conexao.php");
    //Implementando os métodos de exibição da tabela.
    class Rank
    {
        public $rank, $resultado;
        
        public function __construct() 
        {
            $queryRank = 'SELECT * FROM USUARIO';
            
            $this->resultado = mysqli_query($mysqli, $queryRank);            

            if($this->resultado) 
            {
                $this->rank = mysqli_fetch_assoc($this->resultado);
            }
        }
        public function exibirTabela() 
        {
            if ($this->resultado) 
            {
                for ($i = 1; $i <= mysqli_num_rows($this->resultado); $i++) 
                {
                    echo 
                    "<tr>"
                        . "<td>". $i . "</td>"
                        . "<td>" . $this->rank["login"] . "</td>" 
                        . "<td>" . $this->rank["pontuacao_maxima"] . "</td>"
                    . "</tr>";
                }
            }
            else
            {
                echo
                "<tr>
                    <td> 1 </td>
                    <td> ERRO </td>
                    <td> ERRO </td>
                </tr>";
            }
        }
    }
?>