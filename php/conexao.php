<?php

$server = "localhost";
$user = "root";
$password = "root";
$database = "bd_livraria";

$conexao = new mysqli($server, $user, $password, $database);

if ($conexao->connect_error){
    die('falhou a conexão'. $conexao->connect_error);
}else{
   echo 'conexão realizada com sucesso';
}


?>