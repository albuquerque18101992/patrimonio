<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Unidade</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container theme-showcase" role="main">
        <?php
        include_once('conexao.php');
        $localizacao = $_POST['localizacao'];
        $fabricante = $_POST['fabricante'];
        $contrato = $_POST['contrato'];
        $serial_equipamento = $_POST['serial_equipamento'];
        $numero_serie_impressora = $_POST['numero_serie_impressora'];
        $descricoes = $_POST['descricoes'];

        $salvando_impressoras = "INSERT INTO tb_impressoras (localizacao, fabricante, contrato, serial_equipamento, numero_serie_impressora, descricoes) VALUES ('$localizacao', '$fabricante', '$contrato', '$serial_equipamento', '$numero_serie_impressora', '$descricoes')";

        $salvando_impressoras = mysqli_query($conn, $salvando_impressoras);

        if (mysqli_affected_rows($conn) > 0) { ?>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Impressora cadastrada com Sucesso !</h4>
                        </div>
                        <div class="modal-body">
                            <?php echo $serial_equipamento; ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info" data-dismiss="modal">Corrigir Cadastro</button>
                            <a href="impressoras.php"><button type="button" class="btn btn-success"> Ok </button></a>
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
                            <?php echo $serial_equipamento; ?>
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