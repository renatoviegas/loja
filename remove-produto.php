<?php 
	include("banco-produto.php");
	include("conecta.php");
	
	$id = $_GET['id'];
		
	if (removeProduto($conexao, $id)) {
		header("location: produto-lista.php?removido=true");
	}