<?php

$nm_fornecedor = $_POST['nomeForne'];
$contato = $_POST ['contatoForne'];
$nm_email = $_POST ['emailForne'];
$nr_telefone = $_POST ['telForne'];
$nm_endereco = $_POST ['enderecoForne'];
$nr_endereco = $_POST ['NumeroEndereco'];

include 'conexao.php';

$insert_fornecedor = "INSERT INTO tb_fornecedor VALUES (NULL, '$nm_fornecedor', '$contato', '$nm_email', '$nr_telefone', '$nm_endereco', '$nr_endereco')";


$resultado = $conexao->query($insert_fornecedor);

if ($resultado){
    echo "<script>alert('Inserido com sucesso'); history.back() </script>";
}
?>