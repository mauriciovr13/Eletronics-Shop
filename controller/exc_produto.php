<?php
	require "../persistence/database.php";

	include_once("../persistence/connection.php");
	include_once("../persistence/produtoDAO.php");
	
	$produtoDAO = new ProdutoDAO();
	$produtoDAO->excluir($_POST["cod"], $conexao->getLink());
?>