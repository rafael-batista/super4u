<?php
session_start();
include_once("conexao.php");

$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);
$idfilial = filter_input(INPUT_POST, 'filial_id', FILTER_SANITIZE_NUMBER_INT);


$result_produtos = "INSERT INTO produtos (descricao, quantidade, idfilial) VALUES ('$descricao', '$quantidade', $idfilial)";
$resultado_produtos = mysqli_query($conn, $result_produtos);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Cadastro efetuado com sucesso/p>";
	header("Location: produtos.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>O cadastro não foi efetuado</p>";
	header("Location: cad_produtos.php");
}
