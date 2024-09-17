<?php

$nm_funcionario = $_POST['nm_funcionario'];
$sobrenome = $_POST ['sobrenome'];
$dt_nascimento = $_POST ['dt_nascimento'];
$id_genero = $_POST ['id_genero'];
$nm_cargo = $_POST ['nm_cargo'];
$vl_salario = $_POST ['vl_salario'];
$dt_admissao = $_POST ['dt_admissao'];
$senha = $_POST ['senha'];


include 'conexao.php';

$insert_funcionario = "INSERT INTO tb_funcionario VALUES (NULL, '$nm_funcionario', '$sobrenome', '$dt_nascimento', '$id_genero', '$nm_cargo', '$vl_salario','$dt_admissao', '$senha')";


$resultado = $conexao->query($insert_funcionario);

if ($resultado){
    echo "<script>alert('Inserido com sucesso'); history.back() </script>";
}
?>