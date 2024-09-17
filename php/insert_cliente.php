<?php

$nm_cliente  = $_POST['nomeCliente'];
$sobrenome  = $_POST ['Sobrenome'];
$nm_email = $_POST ['emailCliente'];
$nr_telefone = $_POST ['telCliente'];
$nm_endereco = $_POST ['enderecoCliente'];
$nr_endereco = $_POST ['numeroEnderecoC'];

include 'conexao.php';

$insert_cliente = "INSERT INTO tb_cliente VALUES (NULL, '$nm_cliente', '$sobrenome', '$nm_email', '$nr_telefone', '$nm_endereco', '$nr_endereco')";


$resultado = $conexao->query($insert_cliente);

if ($resultado){
    echo "<script>alert('Inserido com sucesso'); history.back() </script>";
}
?>