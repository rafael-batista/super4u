<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
$perfil_usuario_id = filter_input(INPUT_POST, 'perfil_usuario_id', FILTER_SANITIZE_NUMBER_INT);

$result_usuarios = "UPDATE usuarios SET usuario='$usuario', perfil_usuario_id='$perfil_usuario_id' WHERE idusuarios='$id'";

$resultado_usuarios = mysqli_query($conn, $result_usuarios);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Editado com sucesso</p>";
	header("Location: usuarios.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Não foi editado com sucesso</p>";
	header("Location: edit_usuarios.php?id=$id");
}
