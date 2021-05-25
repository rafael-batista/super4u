<?php
session_start();
include_once("conexao.php");

$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$ocupacao = filter_input(INPUT_POST, 'ocupacao', FILTER_SANITIZE_NUMBER_INT);
$capacidade = filter_input(INPUT_POST, 'capacidade', FILTER_SANITIZE_NUMBER_INT);


$result_filiais = "INSERT INTO filiais (descricao, ocupacao, capacidade) VALUES ('$descricao', '$ocupacao', $capacidade)";
$resultado_filiais = mysqli_query($conn, $result_filiais);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Cadastro efetuado com sucesso/p>";
	header("Location: filiais.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>O cadastro não foi efetuado</p>";
	header("Location: cad_filiais.php");
}
