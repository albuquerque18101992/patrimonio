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
        session_start();
        include_once('conexao.php');
        $localizacao = $_POST['localizacao'];
        $fabricante = $_POST['fabricante'];
        $contrato = $_POST['contrato'];
        $numero_serie_cpu = $_POST['numero_serie_cpu'];
        if (empty($_POST['numero_serie_cpu'])) {
            echo "Preencha campo";
            $_SESSION['vazio_numero_serie_cpu'] = "Preencha o campo";
            $url = 'http://localhost/patrimonio/administrador/cadastrar.php';
            echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>";
        } else {
            $_SESSION['value_numero_serie_cpu'] = $_POST['numero_serie_cpu'];
        }
        $numero_serie_monitor = $_POST['numero_serie_monitor'];
        if (empty($_POST['numero_serie_monitor'])) {
            echo "Preencha campo";
            $_SESSION['vazio_numero_serie_monitor'] = "Preencha o campo";
            $url = 'http://localhost/patrimonio/administrador/cadastrar.php';
            echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>";
        } else {
            $_SESSION['value_numero_serie_monitor'] = $_POST['numero_serie_monitor'];
        }
        $numero_serie_mouse = $_POST['numero_serie_mouse'];
        if (empty($_POST['numero_serie_mouse'])) {
            echo "Preencha campo";
            $_SESSION['vazio_numero_serie_mouse'] = "Preencha o campo";
            $url = 'http://localhost/patrimonio/administrador/cadastrar.php';
            echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>";
        } else {
            $_SESSION['value_numero_serie_mouse'] = $_POST['numero_serie_mouse'];
        }
        $numero_serie_teclado = $_POST['numero_serie_teclado'];
        if (empty($_POST['numero_serie_teclado'])) {
            echo "Preencha campo";
            $_SESSION['vazio_numero_serie_teclado'] = "Preencha o campo";
            $url = 'http://localhost/patrimonio/administrador/cadastrar.php';
            echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>";
        } else {
            $_SESSION['value_numero_serie_teclado'] = $_POST['numero_serie_teclado'];
        }
        $numero_ti_cpu = $_POST['numero_ti_cpu'];
        if (empty($_POST['numero_ti_cpu'])) {
            echo "Preencha campo";
            $_SESSION['vazio_numero_ti_cpu'] = "Preencha o campo";
            $url = 'http://localhost/patrimonio/administrador/cadastrar.php';
            echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>";
        } else {
            $_SESSION['value_numero_ti_cpu'] = $_POST['numero_ti_cpu'];
        }
        $numero_ti_monitor = $_POST['numero_ti_monitor'];
        if (empty($_POST['numero_ti_monitor'])) {
            echo "Preencha campo";
            $_SESSION['vazio_numero_ti_monitor'] = "Preencha o campo";
            $url = 'http://localhost/patrimonio/administrador/cadastrar.php';
            echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>";
        } else {
            $_SESSION['value_numero_ti_monitor'] = $_POST['numero_ti_monitor'];
        }
        $descricoes = $_POST['descricoes'];

        $numero_serie_cpu = mysqli_real_escape_string($conn, $_POST['numero_serie_cpu']);
        $numero_serie_monitor = mysqli_real_escape_string($conn, $_POST['numero_serie_monitor']);
        $numero_serie_mouse = mysqli_real_escape_string($conn, $_POST['numero_serie_mouse']);
        $numero_serie_teclado = mysqli_real_escape_string($conn, $_POST['numero_serie_teclado']);
        $numero_ti_cpu = mysqli_real_escape_string($conn, $_POST['numero_ti_cpu']);
        $numero_ti_monitor = mysqli_real_escape_string($conn, $_POST['numero_ti_monitor']);

        $cadastro_de_ativos = " INSERT INTO cadastrar_ativos (localizacao, fabricante, contrato, numero_serie_cpu, numero_serie_monitor, numero_serie_mouse, numero_serie_teclado, numero_ti_cpu, numero_ti_monitor, descricoes) VALUES ('$localizacao', '$fabricante', '$contrato', '$numero_serie_cpu', '$numero_serie_monitor', '$numero_serie_mouse', '$numero_serie_teclado', '$numero_ti_cpu', '$numero_ti_monitor','$descricoes')";

        $cadastro_de_ativos = mysqli_query($conn, $cadastro_de_ativos);

        if (mysqli_affected_rows($conn) > 0) { ?>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Cadastro feito com Sucesso !</h4>
                        </div>
                        <div class="modal-body">
                            Equipamento salvo no banco de dados.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info" data-dismiss="modal">Corrigir Cadastro</button>
                            <a href="cadastrar.php"><button type="button" class="btn btn-success"> Ok </button></a>
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
                            <?php echo $numero_serie_cpu; ?>
                        </div>
                        <div class="modal-footer">
                            <a href="cadastrar.php"><button type="button" class="btn btn-danger">Ok</button></a>
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