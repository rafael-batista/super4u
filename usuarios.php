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
$result = "SELECT * FROM usuarios ORDER BY idusuarios ASC;";
$resultado = mysqli_query($conn, $result);

//Verificar se encontrou resultado na tabela "usuarios"
if (($resultado) and ($resultado->num_rows != 0)) {
?>
	<table class="table table-striped table-bordered table-hover" border="1" align="center">
		<thead>
			<tr>
				<th>Matrícula do Usuário</th>
				<th>Login</th>
				<!-- <th>ID Perfil</th> -->
				<th>Perfil</th>
			</tr>
		</thead>
		<tbody>
			<?php
			while ($row = mysqli_fetch_assoc($resultado)) {
				if ($row['perfil_usuario_id'] == 1) {
					$perfil = "Administrador";
				} elseif ($row['perfil_usuario_id'] == 2) {
					$perfil = "Almoxarife";
				} elseif ($row['perfil_usuario_id'] == 3) {
					$perfil = "Comprador";
				} elseif ($row['perfil_usuario_id'] == 4) {
					$perfil = "Engenheiro de Produção";
				} elseif ($row['perfil_usuario_id'] == 5) {
					$perfil = "Gerente";
				}
			?>
				<tr>
					<th><?php echo $row['idusuarios']; ?></th>
					<td><?php echo $row['usuario']; ?></td>
					<!-- <td><?php echo $row['perfil_usuario_id']; ?></td> -->
					<td><?php echo $perfil; ?></td>
					<td><?php echo "<a href='edit_usuarios.php?id=" . $row['idusuarios'] . "'>Editar</a>"; ?></td>
					<td><?php echo "<a href='excluir_usuarios.php?id=" . $row['idusuarios'] . "'>Apagar</a>"; ?></td>
				</tr>
			<?php
			} ?>
		</tbody>
	</table>
<?php

} else {
	echo "<div class='alert alert-danger' role='alert'>Nenhum registro encontrado</div>";
}
