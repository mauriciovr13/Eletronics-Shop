<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	require "../persistence/database.php";
	

	include_once("../model/cliente.php");
	include_once("../persistence/connection.php");
	include_once("../persistence/clienteDAO.php");
	
	$cliente = new Cliente(null, $_POST["nome"], $_POST["nascimento"], $_POST["cpf"],  $_POST["email"], $_POST["senha"]);
	
	$clientedao = new ClienteDAO();
	$clientedao->cadastrar($cliente, $conexao->getLink());
?>