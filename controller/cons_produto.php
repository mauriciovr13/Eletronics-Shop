<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
	<head>
		<title>Produtos - Eletronics Shop</title>
		<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="../js/jquery.min.js"></script>
		<!-- Custom Theme files -->
		<!--theme-style-->
		<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />	
		<!--//theme-style-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="New Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--fonts-->
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'><!--//fonts-->
		<!-- start menu -->
		<link href="../css/memenu.css" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript" src="../js/memenu.js"></script>
		<script>$(document).ready(function(){$(".memenu").memenu();});</script>
		<script src="../js/simpleCart.min.js"> </script>
	</head>
	<body>
		<!--header-->
		<?php
			session_start();
		?>
		<div class="header">
			<div class="header-top">
				<div class="container">
					<div class="search">
						<form>
							<input type="text" value="Buscar um produto " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
							<input type="submit" value="Buscar">
						</form>
					</div>
					<div class="header-left">		
                        <ul>
							<?php
								if(isset($_GET['acao']) && $_GET['acao'] == 'sair'){
									unset($_SESSION['login']);
									unset($_SESSION['senha']);
									unset($_SESSION['user']);
									unset($_SESSION['nome']);
                                    session_destroy();
                                    header('location:../views/index.php');
							 	}
								if (isset($_SESSION['login'])) {
									if ($_SESSION['user'] == "admin") {
							?>
							<li><a href="../views/viewAdmin.php"><?php echo $_SESSION['user']; ?></a></li>
							<li><a href="?acao=sair">Sair</a></li>
							<?php
									} else {
							?>
							<li><a href="login.php"><?php echo $_SESSION['nome']; ?></a></li>
							<li><a href="?acao=sair">Sair</li>
							<?php
									}
								} else {
							?>
							<li><a href="login.php">Login</a></li>
							<li><a href="cadastrar.php">Cadastrar</a></li>
							<?php
									}
							?>
						</ul>
						<div class="cart box_1">
							<a href="checkout.php">
								<h3> 
									<div class="total">
										<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)
									</div>
									<img src="../images/cart.png" alt=""/>
								</h3>
							</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="container">
				<div class="head-top">
					<div class="logo">
						<a href="../views/index.php"><img src="../images/logo.png" alt=""></a>	
					</div>
					<div class=" h_menu4">
						<ul class="memenu skyblue">
							<li class="active grid"><a class="color8" href="../views/index.php">Inicio</a></li>	
							<li><a class="color1" href="#">Categorias</a>
								<div class="mepanel">
									<div class="row">
										<div class="col1">
											<div class="h_nav">
												<ul>
													<li><a href="products.html">Categoria1</a></li>
													<li><a href="products.html">Categoria2</a></li>
													<li><a href="products.html">Categoria4</a></li>
													<li><a href="products.html">Categoria5</a></li>
												</ul>	
											</div>							
										</div>
									</div>
								</div>	
							</li>
							<li><a class="color6" href="../views/contato.php">Contato</a></li>
						</ul> 
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>

        <div class="container">
		    <div class="head-top">
			    <div class="row">
				    <div class="col-md-auto" style="text-align: center;">
					    <h1>Informações do Produto</h1>
				    </div>
			    </div>
			    <hr class="my-4" style="padding-bottom: 50px;">
			    <div class="row justify-content-center" style="padding-bottom: 50px;">
				    <div class="col-md-12">
                        <?php
                            require "../persistence/database.php";

                            include_once("../model/produto.php");
                            include_once("../persistence/connection.php");
                            include_once("../persistence/produtoDAO.php");

                            $produtoDAO = new ProdutoDAO();
							
                            $consulta = $produtoDAO->consultar($_POST["codigo"], $conexao->getLink());
                            $view = mysqli_fetch_array($consulta);
                        ?>
                        <form action="atualizar_produto.php" method="POST">
                            <div class="col-md-6 register-top-grid">
								<div>
                                    <span>Codigo do produto</span>
                                    <input type="text" name="cod" value="<?php echo $view['codProduto']; ?>">
                                </div>
                                <div>
                                    <span>Nome</span>
	                                    <input type="text" name="nome" value="<?php echo $view['nome']; ?>">
                                </div>
                                <div>
                                    <span>Quantidade disponivel</span>
                                    <input type="text" name="qtdDisp" value="<?php echo $view['qtd']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6 register-top-grid">
								<div>
                                    <span>Preço de compra</span>
                                    <input type="text" name="pCompra" value="<?php echo $view['precoCompra']; ?>">
                                </div>
                                <div>
                                    <span>Preço de venda</span>
                                    <input type="text" name="pVenda" value="<?php echo $view['precoVenda']; ?>">
                                </div>
								<div>
                                    <span>Id do Fornecedor</span>
                                    <input type="text" name="idFornecedor" value="<?php echo $view['idFornecedor']; ?>">
                                </div>
                                
                                <button type="button"><a href="../views/listarProdutos.php">Voltar</a></button>
                                <input type="submit" value="Atualizar dados">
                            </div>
                        </form>
			        </div>
                    
			        <div style="padding-top: 50px;"></div>
		        </div>
			    <hr class="my-4">
			    <div style="padding-top: 50px;"></div>
		    </div>
	    </div>

        <div class="footer">
			<div class="container">
				<div class="footer-top-at">
					<div class="col-md-6 amet-sed ">
						<h4>Eletronics Shop</h4>
						<p>Universidade Federal de Lavras</p>
						<p>Lavras - MG</p>
						<p>telefone: +55 35 3634 1112</p>
						<ul class="social">
							<li><a href="#"><i> </i></a></li>						
							<li><a href="#"><i class="twitter"> </i></a></li>
							<li><a href="#"><i class="rss"> </i></a></li>
							<li><a href="#"><i class="gmail"> </i></a></li>
						</ul>
					</div>
					<div class="col-md-6 amet-sed">
						<h4>Newsletter</h4>
						<p>Assine nossa newsletter para receber promoçoes</p>
						<form>
							<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
							<input type="submit" value="Enviar">
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="footer-class">
				<p>© 2018 Eletronics Shop All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			</div>
		</div>
	</body>
</html>
