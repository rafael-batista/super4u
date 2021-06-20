<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

$result_materiaprima = "UPDATE materia_prima SET descricao='$descricao', quantidade='$quantidade' WHERE idmateriaprima='$id'";

$resultado_materiaprima = mysqli_query($conn, $result_materiaprima);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Editado com sucesso</p>";
	header("Location: materiaprima.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Não foi editado com sucesso</p>";
	header("Location: edit_materiaprima.php?id=$id");
}
