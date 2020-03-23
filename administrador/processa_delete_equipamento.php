<?php
session_start();
include_once("conexao.php");
$id_equipamento = filter_input(INPUT_GET, 'id', [FILTER_SANITIZE_NUMBER_INT]);
$result_usuario = "DELETE FROM cadastrar_ativos WHERE id_equipamento='$id_equipamento'";

$resultado_usuario = mysqli_query($conn, $result_usuario);

?>
