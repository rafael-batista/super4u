<?php
session_start();
include_once("conexao.php");

$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$unidade = filter_input(INPUT_POST, 'unidade', FILTER_SANITIZE_STRING);

$result_materiaprima = "INSERT INTO materia_prima (descricao, quantidade) VALUES ('$descricao', '$quantidade', '$unidade')";
$resultado_materiaprima = mysqli_query($conn, $result_materiaprima);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Cadastro efetuado com sucesso/p>";
	header("Location: materiaprima.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>O cadastro não foi efetuado</p>";
	header("Location: cad_materiaprima.php");
}
