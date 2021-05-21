<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_produtos = "SELECT * FROM produtos WHERE idprodutos = '$id'";
$resultado_produtos = mysqli_query($conn, $result_produtos);
$row_produtos = mysqli_fetch_assoc($resultado_produtos);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Editar</title>
</head>

<body style='font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;'>
	<form method="POST" action="proc_edit_produtos.php">
		<table border=0 align=center>
			<tr>
				<th><label>ID: </label></th>
				<td><input readonly type="number" name="id" value="<?php echo $row_produtos['idprodutos']; ?>"></td>
				<td><label>Descrição: </label></td>
				<td><input type="text" name="descricao" placeholder="Digite a descrição" value="<?php echo $row_produtos['descricao']; ?>"></td><br><br>
				<td> <label>Quantidade: </label></td>
				<td> <input type="number" name="quantidade" placeholder="Digite a quantidade" value="<?php echo $row_produtos['quantidade']; ?>"></td><br><br>
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