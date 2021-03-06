<?php
session_start();
include_once('conexao.php');

$result_unidade = "SELECT * FROM tb_unidades WHERE id_unidade = '1' ";
$resultado_unidade = mysqli_query($conn, $result_unidade);
$row_unidade = mysqli_fetch_assoc($resultado_unidade);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href='../css/bootstrap.css' rel="stylesheet">

    <!--Link Font Awesome-->
    <script src="https://kit.fontawesome.com/e7b4566ef7.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <!--Style-->
    <link href='../css/estilo.css' rel="stylesheet">

    <!--Icone da aba, aba do navegador-->
    <link rel="icon" href='../imagens/logo_aba_engrenagem.png'>

    <title>Editar Unidade</title>
    <style>
        body {
            background-color: #CDCDCD;
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

        <div class="titulo" style="background-color: #28a745;">
            <h2>Editar Unidade</h2>
        </div>

        <form method="POST" action="processa_editar_criar_unidade.php" autocomplete="off">
            <input type="hidden" name="id_unidade" value="<?php echo $row_unidade['id_unidade']; ?>">
            <div class="row">
                <div class="col-md-12">
                    <label for=""><i class="fas fa-university"></i> Nome da unidade</label>
                    <input type="text" name="nome_da_unidade" class="form-control" id="exampleInputEmail1" placeholder="Ex: UBS Mar Paulista, AMA Jd Alfredo " value="<?php echo $row_unidade['nome_da_unidade']; ?>" required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <label for=""><i class="fas fa-user-tie"></i> Responsável / Gerente</label>
                    <input type="text" name="nome_gerente" class="form-control" id="exampleInputEmail1" placeholder="Nome" value="<?php echo $row_unidade['nome_gerente']; ?>">
                </div>
                <div class="col-md-6">
                    <label><i class="fas fa-sort-numeric-up"></i> CNES</label>
                    <input type="text" name="cnes" class="form-control" id="exampleInputEmail1" placeholder="Cadastro Nacional de Estabelecimentos de Saúde" value="<?php echo $row_unidade['cnes']; ?>" required>
                </div>
            </div>

            <div class="cadastrar">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <input class="btn btn-outline-success" id="bt_cadastrar" type="submit" value="Dados alterados">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <div class="dmr">
        Sistema desenvolvido por Paulo Albuquerque - 2019 .
    </div>

    <script>
        $(document).ready(function() {
            $("input [name = 'nome_da_unidade']").blur(function() {
                var $cnes = $("input[name = 'cnes']");
                $.getJSON('function.php', {
                    nome_da_unidade: $(this).val()
                }, function(json) {
                    $cnes.val(json.cnes);
                });
            });
        });
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>