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

//Receber o número da página
$pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

//consultar no banco de dados
$result = "SELECT * FROM produtos ORDER BY idprodutos ASC;";
$resultado = mysqli_query($conn, $result);

//Verificar se encontrou resultado na tabela "usuarios"
if (($resultado) and ($resultado->num_rows != 0)) {
?>
	<table class="table table-striped table-bordered table-hover" border="1" align="center">
		<thead>
			<tr>
				<th>ID do Produto</th>
				<th>Descrição</th>
				<th>Quantidade</th>
				<th>Filial</th>
			</tr>
		</thead>
		<tbody>
			<?php
			while ($row = mysqli_fetch_assoc($resultado)) {
			?>
				<tr>
					<th><?php echo $row['idprodutos']; ?></th>
					<td><?php echo $row['descricao']; ?></td>
					<td><?php echo $row['quantidade']; ?></td>		
					<td><?php echo $row['idfilial']; ?></td>			
					<td><?php echo "<a href='edit_produtos.php?id=" . $row['idprodutos'] . "'>Editar</a>"; ?></td>
					<td><?php echo "<a href='excluir_produtos.php?id=" . $row['idprodutos'] . "'>Apagar</a>"; ?></td>
				</tr>
			<?php
			} ?>
		</tbody>
	</table>

<?php


} else {
	echo "<div class='alert alert-danger' role='alert'>Nenhum registro encontrado</div>";
}
