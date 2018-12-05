<?php
	require "../persistence/database.php";
	
	include_once("../model/produto.php");
	include_once("../persistence/connection.php");
	include_once("../persistence/produtoDAO.php");
	
	$produto = new Produto(null, $_POST["nome"],$_POST["pCompra"], $_POST["pVenda"], $_POST["qtdDisp"], $_POST["idFornecedor"]);
	
	$produtodao = new ProdutoDAO();
	$produtodao->cadastrar($produto, $conexao->getLink());
?>