<?php

$servidor = "localhost";
$usuario = "root";
$senha = "root";
$dbname = "bd_patrimonio";

//Criando a conexão.
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname );

if(!$conn){
    die("Falha na conexão:" . mysqli_connect_error());
}else{
    //echo "Conexão realizada com sucesso";
}

?>