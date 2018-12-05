<?php
	require "../persistence/database.php";
	
	include_once("../model/produto.php");
	include_once("../persistence/connection.php");
	include_once("../persistence/produtoDAO.php");
	
    $produto = new Produto($_POST["codigo"], $_POST["nome"], $_POST["pCompra"],	$_POST["pVenda"], 
                           $_POST["qtdDisp"], $_POST["idFornecedor"]);
	
	$produtoDAO = new ProdutoDAO();
	$produtoDAO->alterar($produto, $conexao->getLink());
?>