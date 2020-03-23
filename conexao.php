<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "bd_patrimonio";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if(!$conn){
    die("Falha na conexão - algo deu errado, faça os devidos reparos:" . mysqli_connect_error());
}else{
    //echo "Conexão realizada com sucesso";
}

?>