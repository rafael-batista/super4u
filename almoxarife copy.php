<!DOCTYPE HTML>
<html lang="pt-br">

<div align="right">
	<?php
	session_start();
	echo "Usuario: " . $_SESSION['usuarioNome'];
	?>
	<br>
	<a href="sair.php">Sair</a>
</div>

<head>
	<meta charset="utf-8">
	<title>Administrador super4u</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
	<table border="0" align="center">
		<thead> <br><br>
			<h2>
				<center>Clique nos botões abaixo para listar, editar ou apagar</center>
			</h2>
			<tr>
				<th>
					<form method="POST" action="produtos.php">
						<input type="submit" value="Produtos">
					</form>
				</th>
				<th>
					<form method="POST" action="materiaprima.php">
						<input type="submit" value="Matérias-Primas">
					</form>
				</th>
					</form>
				</th>
			</tr>
		</thead>

</body>

</html>