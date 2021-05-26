<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Administrador super4u</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
  		function defineCadastroProdutoIframe(){
    	document.getElementById("mainFrame").src = "cad_produtos.php"; 
  		}
		
		function defineCadastroUsuarioIframe(){
    	document.getElementById("mainFrame").src = "cad_usuarios.php"; 
  		}
		
		function defineConsultaUsuarioIframe(){
    	document.getElementById("mainFrame").src = "usuarios.php"; 
  		}
		
		function defineConsultaPerfisIframe(){
    	document.getElementById("mainFrame").src = "perfil_usuario.php"; 
  		}
		
		function defineConsultaProdutoIframe(){
    	document.getElementById("mainFrame").src = "produtos.php"; 
  		}

		function defineCadastroMateriaPrimaIframe(){
    	document.getElementById("mainFrame").src = "cad_materiaprima.php"; 
  		}

		function defineConsultaMateriaPrimaIframe(){
    	document.getElementById("mainFrame").src = "materiaprima.php"; 
  		}

		  function defineCadastroFilialframe(){
    	document.getElementById("mainFrame").src = "cad_filiais.php"; 
  		}

		  function defineConsultaFiliaisIframe(){
    	document.getElementById("mainFrame").src = "filiais.php"; 
  		}
		  
	</script>
</head>
<body>
<div align="right" class="divTopo">
	<?php
	session_start();

	if ($_SESSION['usuarioNiveisAcessoId'] == "1") {
		$perfilAtual = "administrador";
	} elseif ($_SESSION['usuarioNiveisAcessoId'] == "2") {
		$perfilAtual = "almoxarife";
	} elseif ($_SESSION['usuarioNiveisAcessoId'] == "3") {
		$perfilAtual = "comprador";
	} elseif ($_SESSION['usuarioNiveisAcessoId'] == "4") {
		$perfilAtual = "engprod";
	} else {
		$perfilAtual = "gerente";
	}
	
	?>
	
	<table>
		<tr>
			<td style='color:white'>Perfil: <?php echo $perfilAtual?> / </td> 
			<td style='color:white'>Usuário: <?php echo $_SESSION['usuarioNome']?></td> 
			<td><a href="sair.php"><button class="botaoSair">Sair</button></a></td>
    	</tr>
	</table>
</div>
	
</div>

	<div class="container">
    
	<div class="ctnFlex">
		<div class="divEsquerda">
			<div align="center" class="DivInterna" >
				<Center class="tituloInterno">Cadastro</Center>
				<a href="#" onclick="defineCadastroProdutoIframe();return false;"></a> 
					<input type="button" class="botaoInterno" onclick="defineCadastroProdutoIframe()" value="Produtos" />
				<a href="#" onclick="defineCadastroProdutoIframe();return false;"></a> 
  					<input type="button" class="botaoInterno" onclick="defineCadastroUsuarioIframe()" value="Usuários" />
				<a href="#" onclick="defineCadastroMateriaPrimaIframe();return false;"></a> 
  					<input type="button" class="botaoInterno" onclick="defineCadastroMateriaPrimaIframe()" value="Matérias-primas" />
				<a href="#" onclick="defineCadastroFilialframe();return false;"></a> 
  					<input type="button" class="botaoInterno" onclick="defineCadastroFilialframe()" value="Filiais" />
			</div>
			<div align="center" class="DivInterna">
				<Center class="tituloInterno">Consulta de Usuário</Center>
				<a href="#" onclick="defineCadastroProdutoIframe();return false;"></a> 
					<input type="button" class="botaoInterno" onclick="defineConsultaUsuarioIframe()" value="Usuários" />
				<a href="#" onclick="defineCadastroProdutoIframe();return false;"></a> 
  					<input type="button" class="botaoInterno" onclick="defineConsultaPerfisIframe()" value="Perfis" />
			</div>
			<div align="center" class="DivInterna">
				<Center class="tituloInterno">Consulta de Estoque</Center>
				<a href="#" onclick="defineCadastroProdutoIframe();return false;"></a> 
  					<input type="button" class="botaoInterno" onclick="defineConsultaProdutoIframe()" value="Produtos" />
				<a href="#" onclick="defineConsultaMateriaPrimaIframe();return false;"></a> 
  					<input type="button" class="botaoInterno" onclick="defineConsultaMateriaPrimaIframe()" value="Matérias-primas" />
				<a href="#" onclick="defineConsultaFiliaisIframe();return false;"></a> 
  					<input type="button" class="botaoInterno" onclick="defineConsultaFiliaisIframe()" value="Filiais" />
			</div>
		</div>
		<iframe id="mainFrame" class="frameDireita"></iframe>
	</div>
</body>

</html>