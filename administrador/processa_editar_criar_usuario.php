<?php
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar usuário</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container theme-showcase" role="main">
        <?php	
		$id_usuario = filter_input(INPUT_POST, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);
        $pessoa = filter_input(INPUT_POST, 'pessoa', FILTER_SANITIZE_STRING);
        $unidade = filter_input(INPUT_POST, 'unidade', FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
		$login_usuario = filter_input(INPUT_POST, 'login_usuario', FILTER_SANITIZE_STRING);
		$cracha = filter_input(INPUT_POST, 'cracha', FILTER_SANITIZE_NUMBER_INT);
		$documento = filter_input(INPUT_POST, 'documento', FILTER_SANITIZE_STRING);
		$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
		$nivel_acesso = filter_input(INPUT_POST, 'nivel_acesso', FILTER_SANITIZE_STRING);

        $result_usuario = " UPDATE tb_usuario SET pessoa='$pessoa', unidade='$unidade', senha='$senha', login_usuario='$login_usuario' cracha'$cracha', documento'$documento', sexo'$sexo', nivel_acesso'$nivel_acesso' WHERE id_usuario = '$id_usuario' ";

        $resultado_usuario = mysqli_query($conn, $result_usuario);

        if (mysqli_affected_rows($conn) > 0) { ?>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Correção realizada com sucesso!</h4>
                        </div>
                        <div class="modal-body">
                            <?php echo $pessoa; ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info" data-dismiss="modal">Corrigir Cadastro</button>
                            <a href="todos_usuarios.php"><button type="button" class="btn btn-success"> Ok </button></a>
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
                            <?php echo $pessoa; ?>
                        </div>
                        <div class="modal-footer">
                            <a href="todos_usuarios.php"><button type="button" class="btn btn-danger">Ok</button></a>
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