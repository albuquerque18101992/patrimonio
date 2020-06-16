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
    <link href='../css/bootstrap.css' rel="stylesheet">

    <!--Link Font Awesome-->
    <script src="https://kit.fontawesome.com/e7b4566ef7.js" crossorigin="anonymous"></script>

    <!--Style-->
    <link rel="stylesheet" type="text/css" href='../css/estilo.css'>

    <!--Icone da aba, aba do navegador-->
    <link rel="icon" href='../imagens/logo_aba_engrenagem.png'>

    <title>Home</title>


</head>

<body>

    <input type="checkbox" id="bt_menu">
    <label for="bt_menu">&#9776;</label>

    <nav class="menu">
        <ul>
            <li><a href='../administrador/home.php'>Home</a></li>
            <li><a href='../administrador/equipamentos.php'>Equipamentos</a>
                <ul>
                    <li><a href='../administrador/maquinas_patrimonio.php'>Patrimônios</a></li>
                    <li><a href='../administrador/maquinas_alugadas.php'>Alugadas</a></li>
                </ul>
            </li>
            <li><a href='../administrador/cadastrar.php'>Cadastrar</a></li>
            <li><a href='../administrador/impressoras.php'>Impressoras</a>
            <li><a href='../administrador/admin.php'>Administrador</a>
                <ul>
                    <li><a href='../administrador/criar_usuario.php'>Adicionar Usuário</a></li>
                    <li><a href='../administrador/criar_unidade.php'>Adicionar Unidade</a></li>
                </ul>
            </li>
            <li><a href='../administrador/estoque_home.php'>Materiais</a></li>
        </ul>
        <div class="posicao-btn-sair">
            <button class="btn_sair btn-green"><i class="fas fa-sign-out-alt"></i> </button>
        </div>
    </nav>


    <div class="container">
        <div class="foto-logo">
            <div class="row">
                <div class="col-md-12">
                    <img src='../imagens/logo_os.png' alt="OS-SantaCatarina" width="100%" height="100%">
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="paragrafos">
                <p> Sistema Criado para armazenamento, consulta e conhecimento das máquinas da tecnologia da informação das unidades .
                    Sistema simples, onde a idéia é ter controle dos dados de série e modelos dos computadores nas unidades da OS Santa Catarina
                    Cpu, monitores, e impressoras assim a movimentação e respectivos acréscimos de equipamentos poderão ser controladas e acompanhadas com maior facilidade .

                    <p> Mais um avanço dentro da equipe de Tecnologia da Informação da OS Santa Catarina, sempre buscando novas ferramentas e facilidades, para o dia a dia, logo abaixo algumas das ferramentas que estamos gerenciadno para melhor atender nossos colaboradores .</p>
                </p>
            </div>
        </div>
        <h2 class="text-center">Algumas das ferramentas que a equipe de tecnologia da informação gerencia e mantem sempre em funcionamento .</h2>
        <br>

        <div class="row">
            <div class="col-md-3">
                <div class="card" style="width: 15rem;">
                    <a href="http://177.66.152.194:4321/glpi/" target="_blank">
                        <img src="../imagens/ti.png" class="card-img-top" alt="GLPI - T.I">
                    </a>
                    <div class="card-body">
                        <p class="card-text">GLPI da T.I .</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 15rem;">
                    <a href="http://177.66.152.194:4321/infraestrutura/" target="_blank">
                        <img src="../imagens/infraestrutura.png" class="card-img-top" alt="GLPI - Infraestrutura">
                    </a>
                    <div class="card-body">
                        <p class="card-text">GLPI da Infraestrutura</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 15rem;">
                    <a href="http://sau.ossantacatarina.org.br/" target="_blank">
                        <img src="../imagens/sau.png" class="card-img-top" alt="S.A.U">
                    </a>
                    <div class="card-body">
                        <p class="card-text">GLPI S.A.U</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 15rem;">
                    <a href="http://facilities.ossantacatarina.org.br/facilities/index.php?noAUTO=1" target="_blank">
                        <img src="../imagens/facilities.png" class="card-img-top" alt="Facilities">
                    </a>
                    <div class="card-body">
                        <p class="card-text">GLPI Facilities</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 15rem;">
                    <a href="http://www.intranet.ossantacatarina.org.br/login" target="_blank">
                        <img src="../imagens/intranet.png" class="card-img-top" alt="Intranet OS">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Intranet da OSACSC</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 15rem;">
                    <a href="http://gestaodecaso.ossantacatarina.org.br/" target="_blank">
                        <img src="../imagens/gestaocaso.png" class="card-img-top" alt="Gestão de casos">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Sistema Gestão de Casos .</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">

            </div>
        </div>
    </div>
    <br>
    <div class="dmr">
        Sistema desenvolvido por Paulo Albuquerque - 2019 .
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>