<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_materiaprima = "SELECT * FROM materia_prima WHERE idmateriaprima = '$id'";
$resultado_materiaprima = mysqli_query($conn, $result_materiaprima);
$row_materiaprima = mysqli_fetch_assoc($resultado_materiaprima);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Editar</title>
</head>

<body style='font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;'>
	<form method="POST" action="proc_edit_materiaprima.php">
		<table border=0 align=center>
			<tr>
				<th><label>ID: </label></th>
				<td><input readonly type="number" name="id" value="<?php echo $row_materiaprima['idmateriaprima']; ?>"></td>
				<td><label>Descrição: </label></td>
				<td><input type="text" name="descricao" placeholder="Digite a descrição" value="<?php echo $row_materiaprima['descricao']; ?>"></td><br><br>
				<td> <label>Quantidade: </label></td>
				<td> <input type="number" name="quantidade" step="0.01" placeholder="Digite a quantidade" value="<?php echo $row_materiaprima['quantidade']; ?>"></td><br><br>
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
				<td> <label>Filial: </label></td>
				<td>
					<p>
						<select type="number" name="idfilial">
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