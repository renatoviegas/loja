<?php 
	include("cabecalho.php");
	include("banco-produto.php");
	include("conecta.php");
	
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$descricao = $_POST['descricao'];
	$categoria_id = $_POST['categoria_id'];
	
	if (array_key_exists('usado', $_POST) && ($_POST['usado'] == true) ) {
		$usado = "true";
	} else {
		$usado = "false";
	}
	
	if (insereProduto($conexao, $nome, $preco, $descricao, $usado, $categoria_id)) {
	?>
		<p class="alert-success">Produto <?= $nome ?>, <?= $preco ?> adicionado com sucesso!</p>
	<?php
	} else {
		$msgErro = mysqli_error($conexao);
	?>
		<p class="alert-danger">Ocorreu um erro ao tentar adicionar o produto <? = $nome ?>.</p>
		<p class="text-danger">Error: <?= $msgErro ?></p>
	<?php
	}

	include("rodape.php"); 
?>