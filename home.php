<?php
session_start();
?>

<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--Style-->
    <link rel="stylesheet" type="text/css" href='../patrimonio/css/estilo.css'>

    <!--Icone da aba, aba do navegador-->
    <link rel="icon" href='../patrimonio/imagens/logo_aba.png'>


    <title>Home</title>


</head>

<body>

    <input type="checkbox" id="bt_menu">
    <label for="bt_menu">&#9776;</label>

    <nav class="menu">
        <ul>
            <li><a href='../patrimonio/home.php'>Home</a></li>
            <li><a href='../patrimonio/patrimonio.php'>Patrimônio</a>
                <ul>
                    <li><a href="#">Cpu</a></li>
                    <li><a href="#">Monitor</a></li>
                </ul>
            </li>
            <li><a href='../patrimonio/alugadas.php'>Alugadas</a>
                <ul>
                    <li><a href="#">Cpu</a></li>
                    <li><a href="#">Monitor</a></li>
                    <li><a href="#">Mouse</a></li>
                    <li><a href="#">Teclado</a></li>
                </ul>
            </li>
            <li><a href='../patrimonio/cadastrar.php'>Cadastrar</a></li>
        </ul>
        <div class="posicao-btn-sair">
            <button class="btn_sair btn-green">SAIR</button>
        </div>
    </nav>


    <div class="container">
        <div class="foto-logo">
            <div class="row">
                <div class="col-md-12">
                    <img src='../patrimonio/imagens/logo_os.png' alt="OS-SantaCatarina" width="100%" height="100%">
                </div>
            </div>
        </div>

        <div class="container">

            <h4>Sistemas para armazenamento de informações patrimoniais . </h4>
            <p> Sistema Criado para armazenamento, consulta e conhecimento das máquinas da tecnologia da informaçãa das unidades .
                Sistema simples, onde a idéia é ter controle dos dados de série e modelos dos computadores nas unidades da OS Santa Catarina
                Cpu, monitores, mouses, e teclados, assim a movimentação e respectivos arecimos de patrimônio poderão ser controladas e adicionadas com maior facilidade .
            </p>
        </div>
    </div>
    <br>
    <div class="dmr">
        Sistema de equipamentos do Setor de Tecnologia da Informação. Para Contatos (11)5613-4444 Ramal 109
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>