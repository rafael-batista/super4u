<?php

include_once("conexao.php");
session_start();

$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);
$idfilial = filter_input(INPUT_POST, 'filial_id', FILTER_SANITIZE_NUMBER_INT);
$capacidadeDisponivel = 0;

//Busca a capacidade do armazém
$buscaCapacidade = "SELECT capacidade FROM filiais WHERE idfilial = $idfilial";
$resultado_Capacidade = mysqli_query($conn, $buscaCapacidade);
$capacidadeFetch = mysqli_fetch_assoc($resultado_Capacidade);
$capacidade = $capacidadeFetch['capacidade'] ;
	
//Verifica se a ocupação permite a inserção de nova carga
$buscaOcupacao = "SELECT ocupacao FROM filiais WHERE idfilial = $idfilial";
$resultado_Ocupacao = mysqli_query($conn, $buscaOcupacao);
$ocupacaoFetch = mysqli_fetch_assoc($resultado_Ocupacao);
$ocupacao = $ocupacaoFetch['ocupacao'];

$capacidadeDisponivel = $capacidade - $ocupacao;

if ($capacidadeDisponivel < $quantidade) {
	echo '<script>alert("Este armazém não possui capacidade de armazenamento para sua carga! Por favor, selecione outro armazém."); </script>';
} else {
	//Preenche ocupação na filial
	$ocupacao = $ocupacao + $quantidade;
	$result_update = "UPDATE filiais SET ocupacao = $ocupacao WHERE idfilial = $idfilial";
	$resultado_update = mysqli_query($conn, $result_update);

	//Insere produto
	$result_produtos = "INSERT INTO produtos (descricao, quantidade, idfilial) VALUES ('$descricao', '$quantidade', $idfilial)";
	$resultado_produtos = mysqli_query($conn, $result_produtos);
	
	//Exibe mensagem
	if(mysqli_insert_id($conn)){
	echo '<script>alert("Cadastro realizado com sucesso!"); </script>';
		//header("Location: produtos.php");
	} else {
		echo '<script>alert("Ocorreu um erro!"); </script>';
	//	header("Location: cad_produtos.php");
	}
}

?>