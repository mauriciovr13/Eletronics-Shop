<?php
	include_once("../model/produto.php");

	class ProdutoDAO {
		function cadastrar($produto, $link) {
			$query = "INSERT INTO Produto (nome, precoCompra, precoVenda, idFornecedor,qtd) values ('".($produto->getNome())."','".($produto->getPrecoCompra())."','".($produto->getPrecoVenda())."','".($produto->getidFornecedor())."', '".($produto->getQuantidade())."')";
			echo $query;
			if(!mysqli_query($link, $query)) {
				die("Erro ao tentar cadastrar produto!");
			}else{
				header("Location: ../views/viewAdmin.php");
			}
		}

		function consultar($cod, $link) {
			$query = "SELECT * FROM Produto WHERE codProduto = '".$cod."'";
			$consulta = mysqli_query($link, $query);
			$rows = mysqli_num_rows($consulta);
			if(!$consulta || $rows==0) {
				die("ERRO. PRODUTO NÃO ENCONTRADO.");
			}
			return $consulta;
		}

		function alterar($produto, $link) {
			$query = "UPDATE Produto SET nome='".($produto->getNome())."', precoCompra='".($produto->getPrecoCompra())."',
			 precoVenda='".($produto->getPrecoVenda())."', idFornecedor='".($produto->getIdFornecedor())."', qtd='".($produto->getQuantidade())."'
			 WHERE codProduto ='".($produto->getCodigo())."'";
			echo $query;
			if(!mysqli_query($link, $query)) {
				die("ERRO! NAO SALVOU OS DADOS.");
			}
			header("Location: ../views/viewAdmin.php");
		}
		
		function excluir($cod, $link) {
			$query = "DELETE FROM Produto WHERE codProduto = '".$cod."'";
			if(!mysqli_query($link, $query)) {
				die("ERRO. PRODUTO NÃO EXCLUIDO.");
			}
			header("Location: ../views/viewAdmin.php");
		}
		
		
	}
?>