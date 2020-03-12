<?php

session_start();
include_once("conexao.php");

$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
if ($senha) {
    echo "Tente logar";
}else {
    $_SESSION['msg'] = "Não validado !!!";
    header("Location: index.php");
}

?>