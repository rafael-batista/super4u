<?php
	session_start();	
	//Incluindo a conexão com banco de dados

	include_once("conexao.php");	
	//O campo usuário e senha preenchido entra no if para validar

	if((isset($_POST['email'])) && (isset($_POST['senha']))){
		$usuario = mysqli_real_escape_string($conn, $_POST['email']);
		$senha = mysqli_real_escape_string($conn, $_POST['senha']);
		
		//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
		$result_usuario = "SELECT * FROM usuarios WHERE usuario = '$usuario' && senha = '$senha' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
	
		//Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		if(isset($resultado)){
			$_SESSION['usuarioId'] = $resultado['idusuarios'];
			$_SESSION['usuarioNome'] = $resultado['usuario'];
			$_SESSION['usuarioNiveisAcessoId'] = $resultado['perfil_usuario_id'];
			$_SESSION['usuarioEmail'] = $resultado['usuario'];

			if($_SESSION['usuarioNiveisAcessoId'] == "1"){
				header("Location: administrador.php");
			}elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){
				header("Location: almoxarife.php");
			}elseif($_SESSION['usuarioNiveisAcessoId'] == "3"){
				header("Location: comprador.php");
			}elseif($_SESSION['usuarioNiveisAcessoId'] == "4"){
				header("Location: engprod.php");
			}else{
				header("Location: gerente.php");
			}
		}else{	
			//Váriavel global recebendo a mensagem de erro
			$_SESSION['loginErro'] = "Usuário ou senha Inválido";
			header("Location: index.php");
		}
	}else{
		$_SESSION['loginErro'] = "Usuário ou senha inválido";
		header("Location: index.php");
	}
?>