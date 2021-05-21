<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
	$result_usuario = "DELETE FROM usuarios WHERE idusuarios='$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Apagado com sucesso!</p>";
		header("Location: usuarios.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro ao excluir!</p>";
		header("Location: usuarios.php");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Selecione um item</p>";
	header("Location: usuarios.php");
}