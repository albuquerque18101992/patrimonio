<?php
session_start();
include_once("conexao.php");
$id_unidade = filter_input(INPUT_GET, 'id_unidade', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id_unidade)){
	$result_unidade = "DELETE FROM tb_unidades WHERE id_unidade='$id_unidade'";
	$resultado_unidade = mysqli_query($conn, $result_unidade);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Unidade apagada com sucesso</p>";
		header("Location: todas_unidades.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro, a unidade não foi apagado com sucesso</p>";
		header("Location: todas_unidades.php");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar uma unidade</p>";
	header("Location: todas_unidades.php");
}