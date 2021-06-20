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
	<form method="POST" action="proc_cad_materiaprima.php">
		<table border=0 align=center>
			<h2>
				<center>Cadastro de novas matérias-primas</center>
			</h2>
			<tr>
				<td><label>Descrição: </label></td>
				<td><input type="text" name="descricao" placeholder="Digite a descrição"></td><br><br>
				<td> <label>Quantidade: </label></td>
				<td> <input type="number" step="0.01" name="quantidade" placeholder="Digite a quantidade"></td><br><br>
				<td> <label>Unidade: </label></td>
				<td>
					<p>
					<select name="unidade">
							<option value="Kg">Kg</option>
							<option value="Litros">Litros</option>
							<option value="Unidades">Unidades</option>
							<option value="Caixas">Caixas</option>
							<option value="Potes">Potes</option>
							<option value="Frascos">Frascos</option>
						</select>
					</p>
				</td>
			</tr>
		</table><br>
		<table border=0 align=center>
			<tr>
				<th><input type="submit" value="Cadastrar"></th>
			</tr>
		</table>
	</form>

</html>