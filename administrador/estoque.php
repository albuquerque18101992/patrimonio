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

    <title>Estoque</title>
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
            <h2>Controle interno de produtos, visão geral.</h2>
        </div>

        <br>
        <div class="container-fluid text-center">
            <div class="tituloss">
                <h1>Produtos Armazenados</h1>
                <?php
                include_once('conexao.php');
                $result_usuario = "SELECT * FROM tb_estoque";
                $resultado_usuario = mysqli_query($conn, $result_usuario);


                //Verificar se encontrou resultado na tabela "usuarios"
                if (($resultado_usuario) and ($resultado_usuario->num_rows != 0)) {
                ?>
                    <table class="table table-hover table-sm text-center table-bordered table-responsive-lg">
                        <thead class="thead-dark">
                            <tr>
                                <th>Código dentro do MV</th>
                                <th>Produto</th>
                                <th>Estocado</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row_usuario = mysqli_fetch_assoc($resultado_usuario)) {
                            ?>
                                <tr>
                                    <td><?php echo $row_usuario['codigo_mv']; ?></td>
                                    <td><?php echo $row_usuario['nome_produto']; ?></td>
                                    <td><?php echo $row_usuario['guardados']; ?></td>
                                    <td>
                                        <span class="d-none d-md-block">
                                            <a class="btn btn-outline-info btn-sm" href="#" role="button" data-toggle="modal" data-target=".bd-example-modal-lg">Detalhes</a>
                                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        INFORMAÇÕES ...

                                                        modal ...
                                                    </div>
                                                </div>
                                            </div>

                                            <a class="btn btn-outline-success btn-sm" href="#">Editar</a>

                                            <a class="btn btn-outline-danger btn-sm" href="#" role="button" data-toggle="modal" data-target="#exampleModal">Apagar</a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-danger text-white">
                                                            <h5 class="modal-title" id="exampleModalLabel">EXCLUIR ARQUIVO</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Você tem certeza que deseja deletar o item selecionado ?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-success" data-dismiss="modal">Voltar</button>
                                                            <button type="button" class="btn btn-danger">Apagar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </span>
                                        <div class="dropdown d-block d-md-none">
                                            <button class="btn btn- btn-outline-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Ações
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                                                <a class="dropdown-item" href="#">Detalhes</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target=".bd-example-modal-xl">Editar</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Apagar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                            } ?>
                        </tbody>
                    </table>
                <?php
                } else {
                    echo "<div class='alert alert-danger' role='alert'>Nenhum item encontrado!</div>";
                }

                ?>
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