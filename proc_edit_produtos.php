<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$unidade = filter_input(INPUT_POST, 'unidade', FILTER_SANITIZE_STRING);
$idfilial = filter_input(INPUT_POST, 'idfilial', FILTER_SANITIZE_NUMBER_INT);

$result_produtos = "UPDATE produtos SET descricao='$descricao', quantidade='$quantidade', unidade='$unidade', idfilial='$idfilial' WHERE idprodutos='$id'";

$resultado_produtos = mysqli_query($conn, $result_produtos);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Editado com sucesso</p>";
	header("Location: produtos.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Não foi editado com sucesso</p>";
	header("Location: edit_produtos.php?id=$id");
}
