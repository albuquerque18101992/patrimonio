<?php
session_start();

$titulo = 'Administrador';
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
    <script type="text/javascript" src="jquery-3.4.1.min.js"></script>

    <!--Style-->
    <link href='../css/estilo.css' rel="stylesheet">

    <!--Icone da aba, aba do navegador-->
    <link rel="icon" href='../imagens/logo_aba_engrenagem.png'>

    <title><?php echo $titulo; ?></title>
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
        <div class="row">
            <div class="col-md-12">
            <h1 class="display-4">Hello World!</h1>
                <div class="pos-f-t">
                    <nav class="navbar navbar-dark bg-dark">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </nav>
                    <div class="collapse" id="navbarToggleExternalContent">
                        <div class="bg-dark p-4">
                            <h5 class="text-white h4">Área Administrativa</h5>
                            <span class="text-white">Espaço de criação e exclusão de usuários e unidades, no botão <strong>Administrador</strong> tem duas abas <strong>Adicionar Usuário</strong> e <strong>Adicionar Unidade</strong> para possíveis unidades e colaboradores que vinherem integrar nossa equipe . OS Santa Catarina juntos somos mais fortes .</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="dmr">
        Sistema desenvolvido por Paulo Albuquerque - 2019 .
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>