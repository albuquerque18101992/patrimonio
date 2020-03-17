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
            <li><a href='../administrador/estoque.php'>Estoque</a></li>
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


        <form method="POST" action="salvar_estoque.php" autocomplete="off">
            <div class="row">
                <div class="col-md-4">
                    <label for=""> <i class="fas fa-laptop-code"></i> Nome Produto</label>
                    <input type="text" class="form-control" placeholder="Produto" name="nome_produto">
                </div>
                <div class="col-md-2">
                    <label for=""> <i class="fas fa-sitemap"></i> Código Produto</label>
                    <input type="text" class="form-control" placeholder="Códiog MV" name="codigo_mv" required>
                </div>
                <div class="col-md-3">
                    <label for=""> <i class="fas fa-dollar-sign"></i> Adicionados</label>
                    <input type="number" class="form-control" placeholder="Guardados" name="guardados">
                </div>
                <div class="col-md-3">
                    <label for=""> <i class="fas fa-file-signature"></i> Retirados</label>
                    <input type="number" class="form-control" placeholder="Usados" name="retirados">
                </div>
            </div>

            <div class="cadastrar">
                <div class="row">
                    <div class="col-md-12">
                        <input class="btn btn-outline-primary" id="bt_cadastrar" type="submit" name="Salvar" value="Salvar Produto">
                    </div>
                </div>
            </div>
        </form>
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
                    <table class="table table-hover ">
                        <thead>
                            <tr>
                                <th>Produto</th>
                                <th>Código dentro do MV</th>
                                <th>Estocado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row_usuario = mysqli_fetch_assoc($resultado_usuario)) {
                            ?>
                                <tr>
                                    <td><?php echo $row_usuario['nome_produto']; ?></td>
                                    <td><?php echo $row_usuario['codigo_mv']; ?></td>
                                    <td><?php echo $row_usuario['guardados'];?></td>
                                    <td>
                                        <a href="">Editar</a> ||
                                        <a href="">Deletar</a>
                                    </td>
                                </tr>
                            <?php
                            } ?>
                        </tbody>
                    </table>
                <?php
                } else {
                    echo "<div class='alert alert-danger' role='alert'>Nenhum equipamento encontrado!</div>";
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