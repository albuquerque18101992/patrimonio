<?php
include("conexao.php");

$consulta = "SELECT * FROM cadastrar_ativos";
$con = $mysqli->query($consulta) or die($mysqli->error);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta-test</title>
</head>
<body>
    
</body>
</html>