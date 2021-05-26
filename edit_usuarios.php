<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuarios = "SELECT * FROM usuarios WHERE idusuarios = '$id'";
$resultado_usuarios = mysqli_query($conn, $result_usuarios);
$row_usuarios = mysqli_fetch_assoc($resultado_usuarios);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Editar</title>
</head>

<body style='font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;'>
	<form method="POST" action="proc_edit_usuarios.php">
		<table border=0 align=center>
			<tr>
				<th><label>ID: </label></th>
				<td><input readonly type="number" name="id" value="<?php echo $row_usuarios['idusuarios']; ?>"></td>
				<td><label>Usuário: </label></td>
				<td><input type="text" name="usuario" placeholder="Digite a descrição" value="<?php echo $row_usuarios['usuario']; ?>"></td><br><br>
				<td> <label>Perfil do usuário: </label></td>
				<td>
					<p>
						<select name="perfil_usuario_id">
						<option value="" disabled selected>Selecione o novo perfil</option>
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
							<option value="2">São José dos Pinhais</option>
							<option value="3">Pato Branco</option>
							<option value="4">Londrina</option>
							<option value="5">Paranaguá</option>
							<option value="6">Ponta Grossa</option>
						</select>
					</p>
				</td>
			</tr>
		</table><br>
		<table border=0 align=center>
			<tr>
				<th><input type="submit" value="Editar"></th>
			</tr>
		</table>
	</form>
</body>

</html>