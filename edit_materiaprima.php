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
				<td> <input type="number" name="quantidade" placeholder="Digite a quantidade" value="<?php echo $row_materiaprima['quantidade']; ?>"></td><br><br>
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