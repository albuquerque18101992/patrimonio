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

    <!--Style-->
    <link href='../css/estilo.css' rel="stylesheet">

    <!--Icone da aba, aba do navegador-->
    <link rel="icon" href='../imagens/logo_aba_engrenagem.png'>

    <title>Patrimônio-admin</title>
</head>

<body>

    <input type="checkbox" id="bt_menu">
    <label for="bt_menu">&#9776;</label>

    <nav class="menu">
        <ul>
            <li><a href='../administrador/home.php'>Home</a></li>
            <li><a href='../administrador/equipamentos.php'>Equipamentos</a>
                <ul>
                    <li><a href="#">Patrimônios</a></li>
                    <li><a href="#">Alugadas</a></li>
                </ul>
            </li>
            <li><a href='../administrador/cadastrar.php'>Cadastrar</a></li>
            <li><a href='../administrador/admin.php'>Administrador</a>
                <ul>
                    <li><a href='../administrador/criar_usuario.php'>Adicionar Usuário</a></li>
                    <li><a href='../administrador/criar_unidade.php'>Adicionar Unidade</a></li>
                </ul>
            </li>
            <li><a href='../administrador/estoque.php'>Estoque</a></li>
        </ul>
        <div class="posicao-btn-sair">
            <button class="btn_sair btn-green">SAIR</button>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <table class="table table-hover" style="text-align: center">
                        <thead>
                            <tr>
                                <th scope="col">Localização</th>
                                <th scope="col">Fabricante</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">N° Serie CPU, T.I</th>
                                <th scope="col">N° Serie MONITOR, T.I</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once('conexao.php');
                            $result_usuarios = "SELECT * FROM cadastrar_ativos";
                            $resultado_usuarios = mysqli_query($con, $result_usuarios);
                            while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)) {
                            }
                            ?>
                            <?php while ($dado = $con->fetch_array()) { ?>
                                <tr>
                                    <td><?php echo $dado["localizacao"]; ?></td>
                                    <td><?php echo $dado[""]; ?></td>
                                    <td><?php echo $dado[""]; ?></td>
                                    <td><?php echo $dado[""]; ?></td>
                                    <td><?php echo $dado[""]; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $dado[""]; ?></td>
                                    <td><?php echo $dado[""]; ?></td>
                                    <td><?php echo $dado[""]; ?></td>
                                    <td><?php echo $dado[""]; ?></td>
                                    <td><?php echo $dado[""]; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $dado[""]; ?></td>
                                    <td><?php echo $dado[""]; ?></td>
                                    <td><?php echo $dado[""]; ?></td>
                                    <td><?php echo $dado[""]; ?></td>
                                    <td><?php echo $dado[""]; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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