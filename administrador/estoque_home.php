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
    <link href='../css/estilo.css' rel="stylesheet">


    <!--Icone da aba, aba do navegador-->
    <link rel="icon" href='../imagens/logo_aba_engrenagem.png'>

    <title>Estoquinho</title>

    <style>
        .escondido {
            display: none;
        }

        #div1,
        #div2,
        #div3 {
            border-width: 4px;
            border-style: outset;
            border-color: rgb(81, 80, 82);
            padding: 15px;
        }

        #bt1,
        #bt2,
        #bt3 {
            width: 100%;
            padding: 5px;
        }
    </style>
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

        <div class="titulo">
            <h2>Controle interno de produtos</h2>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="text-center">
                    <button id="bt1" type="button" class="btn btn-outline-primary">Entrada</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-center">
                    <button id="bt2" type="button" class="btn btn-outline-primary">Saída</button>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="text-center">
                    <a href='' class="btn btn-outline-primary" id="bt_cadastrar">Histórico</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-center">
                    <a href='../administrador/estoque.php' class="btn btn-outline-primary" id="bt_cadastrar"> Estoque</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="div1">
                <form method="POST" action="salvar_estoque.php" autocomplete="off">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="titulo">
                                <h4>Produtos armazenados em estoque para uso posteriores.</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for=""> <i class="fas fa-sitemap"></i> Código MV</label>
                                    <input type="text" class="form-control" placeholder="Códiog MV" name="codigo_mv" required>
                                </div>
                                <div class="col-md-6">
                                    <label for=""> <i class="fas fa-laptop-code"></i> Nome Produto</label>
                                    <input type="text" class="form-control" placeholder="Produto" name="nome_produto">
                                </div>
                                <div class="col-md-2">
                                    <label for=""> <i class="fas fa-cart-plus"></i> Adicionados</label>
                                    <input type="number" class="form-control" placeholder="Guardados" name="guardados">
                                </div>
                                <div class="col-md-2">
                                    <label for=""> <i class="fas fa-dollar-sign"></i> Valor</label>
                                    <input type="text" class="form-control" placeholder="$$$" name="">
                                </div>
                            </div>
                            <div class="cadastrar">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input class="btn btn-outline-primary" id="bt_cadastrar" type="submit" name="Salvar" value="Salvar entrada">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div id="div2">
                <form method="POST" action="" autocomplete="off">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="titulo">
                                <h4>Produtos Retirados do estoque para uso.</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for=""> <i class="fas fa-sitemap"></i> Código MV</label>
                                    <input type="text" class="form-control" placeholder="Códiog MV" name="codigo_mv" required>
                                </div>
                                <div class="col-md-6">
                                    <label for=""> <i class="fas fa-laptop-code"></i> Nome Produto</label>
                                    <input type="text" class="form-control" placeholder="Produto" name="nome_produto">
                                </div>
                                <div class="col-md-2">
                                    <label for=""> <i class="fas fa-cart-plus"></i> Retirados</label>
                                    <input type="number" class="form-control" placeholder="Usados" name="guardados">
                                </div>
                                <div class="col-md-2">
                                    <label for=""> <i class="fas fa-hands-helping"></i> N° chamado</label>
                                    <input type="text" class="form-control" placeholder="GLPI" name="guardados">
                                </div>
                            </div>
                            <div class="cadastrar">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input class="btn btn-outline-danger" id="bt_cadastrar" type="submit" name="Salvar" value="Salvar retirada">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>

    </div>

    <div class="dmr">
        Sistema desenvolvido por Paulo Albuquerque - 2019 .
    </div>

    <script>
        var div1;
        var div2;

        window.onload = function() {
            div1 = document.getElementById("div1");
            div2 = document.getElementById("div2");

            var bt1 = document.getElementById("bt1");
            bt1.onclick = mostrarDiv1;
            var bt2 = document.getElementById("bt2");
            bt2.onclick = mostrarDiv2;


            div1.classList.add("escondido");
            div2.classList.add("escondido");

        }

        function mostrarDiv1() {
            div1.classList.remove("escondido");
            div2.classList.add("escondido");

        }

        function mostrarDiv2() {
            div1.classList.add("escondido");
            div2.classList.remove("escondido");

        }

        function mostrarDiv3() {
            div1.classList.add("escondido");
            div2.classList.add("escondido");

        }
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>