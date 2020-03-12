<?php
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Unidade - admin</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container theme-showcase" role="main">
        <?php
        include_once('conexao.php');
        $nome_da_unidade = $_POST['nome_da_unidade'];
        $nome_gerente = $_POST['nome_gerente'];
        $cnes = $_POST['cnes'];

        $criacao_unidade = " INSERT INTO tb_unidades (nome_da_unidade, nome_gerente, cnes) VALUES ('$nome_da_unidade', '$nome_gerente', '$cnes')";

        $criacao_unidade = mysqli_query($conn, $criacao_unidade);

        if (mysqli_affected_rows($conn) > 0) { ?>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Unidade cadastrada com Sucesso !</h4>
                        </div>
                        <div class="modal-body">
                            <?php echo $nome_da_unidade; ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info" data-dismiss="modal">Corrigir Cadastro</button>
                            <a href="criar_unidade.php"><button type="button" class="btn btn-success"> Ok </button></a>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    $('#myModal').modal('show');
                });
            </script>
        <?php } else { ?>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">ALGO DEU ERRADO !</h4>
                        </div>
                        <div class="modal-body">
                            <?php echo $nome_da_unidade; ?>
                        </div>
                        <div class="modal-footer">
                            <a href="criar_unidade.php"><button type="button" class="btn btn-danger">Ok</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    $('#myModal').modal('show');
                });
            </script>
        <?php } ?>
    </div>
</body>
</html>