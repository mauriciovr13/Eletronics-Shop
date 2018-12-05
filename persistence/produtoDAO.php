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
			 precoVenda='".($produto->gePrecoVenda())."', idFornecedor='".($produto->getIdFornecedor())."', qtd='".($produto->getQuantidade())."'
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
		
		function montarCatalogo($link) {
			$query = mysqli_query($link, "SELECT * FROM Produto");
			$rows = mysqli_num_rows($query);
			if(!$query) {
				die("ERRO. NENHUM PRODUTO ENCONTRADO.");
			}

			for ($i=0; $i < $rows ; $i++) {
				$result = mysqli_fetch_array($query);
				echo '<div class="col-md-4">';
				echo 	'<div class="product-at">';
				echo 		'<a href="single.php">';
				echo 			'<img class="img-responsive" src="../images/pi3.jpg" alt="">';
				echo 			'<div class="pro-grid">';
				echo 				'<span class="buy-in">Comprar</span>';
				echo 			'</div>';
				echo 		'</a>';
				echo 	'</div>';
				echo 	'<div style="text-align: center; padding-top: 15px; padding-bottom: 15px"><b>'.$result['nome'].'</b></div>';
				echo 	'<a class="item_add" href="checkout.php?acao=add&idProduto='.$result['idProduto'].'"><p class="number item_price"><i> </i>R$ '.$result['precoVenda'].'</p></a>';
				echo 	'<div style="padding-bottom: 70px"></div>';
				echo '</div>';
			}
		}
		
	}
?>