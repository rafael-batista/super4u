<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Cadastrar</title>
</head>

<body style='font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;'>
	<form method="POST" action="proc_cad_filiais.php">
		<table border=0 align=center>
			<h2>
				<center>Cadastro de novas filiais</center>
			</h2>
			<tr>
				<td><label>Descrição: </label></td>
				<td><input type="text" name="descricao" placeholder="Digite a descrição"></td><br><br>
				<td> <label>Ocupação: </label></td>
				<td> <input type="number" name="ocupacao" placeholder="Digite a ocupação"></td><br><br>
				<td> <label>Capacidade: </label></td>
				<td> <input type="number" name="capacidade" placeholder="Digite a capacidade"></td><br><br>
			</tr>
		</table><br>
		<table border=0 align=center>
			<tr>
				<th><input type="submit" value="Cadastrar"></th>
			</tr>
		</table>
	</form>

</html>