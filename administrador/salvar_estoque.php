<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Salvar estoque</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container theme-showcase" role="main">
        <?php
        include_once('conexao.php');
        $nome_produto = $_POST['nome_produto'];
        $codigo_mv = $_POST['codigo_mv'];
        $guardados = $_POST['guardados'];

        $estoque_guardando = "INSERT INTO tb_estoque (nome_produto, codigo_mv, guardados) VALUES ( '$nome_produto', '$codigo_mv', '$guardados')";

        $estoque_guardando = mysqli_query($conn, $estoque_guardando);


        if (mysqli_affected_rows($conn) > 0) { ?>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Produto cadastrato no estoque com sucesso !</h4>
                        </div>
                        <div class="modal-body">
                            <?php echo $nome_produto; ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info" data-dismiss="modal">Corrigir Cadastro</button>
                            <a href="estoque_home.php"><button type="button" class="btn btn-success"> Ok </button></a>
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
                            <?php echo $nome_produto; ?>
                        </div>
                        <div class="modal-footer">
                            <a href="estoque_home.php"><button type="button" class="btn btn-danger">Ok</button></a>
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