<?php
session_start();

if ($_SESSION['usuarioNiveisAcessoId'] == "1") {
	$userProfile = "administrador.php";
} elseif ($_SESSION['usuarioNiveisAcessoId'] == "2") {
	$userProfile = "almoxarife.php";
} elseif ($_SESSION['usuarioNiveisAcessoId'] == "3") {
	$userProfile = "comprador.php";
} elseif ($_SESSION['usuarioNiveisAcessoId'] == "4") {
	$userProfile = "engprod.php";
} else {
	$userProfile = "gerente.php";
}

include_once "conexao.php";

//consultar no banco de dados
$result = "SELECT * FROM perfil_usuario ORDER BY idperfil_usuario ASC;";
$resultado = mysqli_query($conn, $result);

//Verificar se encontrou resultado na tabela "usuarios"
if (($resultado) and ($resultado->num_rows != 0)) {
?>
	<table class="table table-striped table-bordered table-hover" border="1" align="center">
		<thead>
			<tr>
				<th>ID do Perfil</th>
				<th>Perfil</th>
			</tr>
		</thead>
		<tbody>
			<?php
			while ($row = mysqli_fetch_assoc($resultado)) {
			?>
				<tr>
					<th><?php echo $row['idperfil_usuario']; ?></th>
					<td><?php echo $row['perfil']; ?></td>
				</tr>
			<?php
			} ?>
		</tbody>
	</table>
<?php

} else {
	echo "<div class='alert alert-danger' role='alert'>Nenhum registro encontrado</div>";
}
