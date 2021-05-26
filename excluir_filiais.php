<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
	$result_produtos = "DELETE FROM filiais WHERE idfilial ='$id'";
	$resultado_produtos = mysqli_query($conn, $result_produtos);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Apagado com sucesso!</p>";
		header("Location: filiais.php");
	}else{
		$_SESSION['msg'] = "<p style='color:red;'>Erro ao excluir!</p>";
		header("Location: filiais.php");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Selecione um item</p>";
	header("Location: filiais.php");
}