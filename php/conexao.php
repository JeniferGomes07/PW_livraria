<?php

$servidor = "localhost";
$user = "root";
$password = "root";
$banco = "bd_livraria";

$conexao = new mysqli($servidor, $user, $password, $banco);

if ($conexao->connect_error){
    die('falhou a conexão' . $conexao->connect_error);
}else{
   echo 'conexão realizada com sucesso';
}


?>