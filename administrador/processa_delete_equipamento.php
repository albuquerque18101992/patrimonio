<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
	$result_equipamento = "DELETE FROM cadastrar_ativos WHERE id='$id'";
	$resultado_equipamento = mysqli_query($conn, $result_equipamento);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Equipamento apagado com sucesso</p>";
		header("Location: equipamentos.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro, o equipamento não foi apagado com sucesso</p>";
		header("Location: equipamentos.php");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um equipamento</p>";
	header("Location: equipamentos.php");
}