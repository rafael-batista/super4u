<?php
session_start();
include_once("conexao.php");

$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$perfil_usuario_id = filter_input(INPUT_POST, 'perfil_usuario_id', FILTER_SANITIZE_NUMBER_INT);

$result_usuarios = "INSERT INTO usuarios (usuario, senha, perfil_usuario_id) VALUES ('$login', '$senha', '$perfil_usuario_id')";
$resultado_usuarios = mysqli_query($conn, $result_usuarios);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Cadastro efetuado com sucesso/p>";
	header("Location: usuarios.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>O cadastro não foi efetuado</p>";
	header("Location: cad_usuarios.php");
}
