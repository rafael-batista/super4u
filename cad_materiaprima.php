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
				<td> <input type="number" name="quantidade" placeholder="Digite a quantidade"></td><br><br>
				<td> <label>Unidade: </label></td>
				<td>
					<p>
						<select name="unidade_id">
							<option value="1">Kg</option>
							<option value="2">Litros</option>
							<option value="3">Unidades</option>
							<option value="4">Caixas</option>
							<option value="5">Potes</option>
							<option value="6">Frascos</option>
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