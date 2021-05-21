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
	<form method="POST" action="proc_cad_usuarios.php">
		<table border=0 align=center>
			<h2>
				<center>Cadastro de novos usuários</center>
			</h2>
			<tr>
				<td><label>Login: </label></td>
				<td><input type="email" name="login" placeholder="Digite o email de login"></td><br><br>
				<td> <label>Senha: </label></td>
				<td> <input type="password" name="senha" placeholder="Digite a senha"></td><br><br>
				<td> <label>Perfil: </label></td>
				<td>
					<p>
						<select name="perfil_usuario_id">
							<option value="1">Administrador</option>
							<option value="2">Almoxarife</option>
							<option value="3">Comprador</option>
							<option value="4">Engenheiro de Produção</option>
							<option value="5">Gerente</option>
						</select>
					</p>
				</td>
				<td> <label>Filial: </label></td>
				<td>
					<p>
						<select name="filial_id">
							<option value="1">Curitiba</option>
							<option value="2">Pinhais</option>
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