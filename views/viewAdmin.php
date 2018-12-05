<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
	<head>
		<title>Eletronics Shop</title>
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
                                    header('location:index.php');
							 	}
								if (isset($_SESSION['login'])) {
									if ($_SESSION['user'] == "admin") {
							?>
							<li><a href="viewAdmin.php"><?php echo $_SESSION['user']; ?></a></li>
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
						<a href="index.php"><img src="../images/logo.png" alt=""></a>	
					</div>
					<div class=" h_menu4">
						<ul class="memenu skyblue">
							<li class="active grid"><a class="color8" href="index.php">Inicio</a></li>	
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
							<li><a class="color6" href="contato.php">Contato</a></li>
						</ul> 
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="row centralizado" style="padding-bottom: 70px; padding-top: 70px">							
			<div class="col-md-12">
				<div class="col-md-2">
					<a class="lock" href="listarProdutos.php" style="color: black;">
						<img src="../images/verProd.png"><br>
						<!--<div>Icons made by <a href="https://www.flaticon.com/authors/smalllikeart" title="smalllikeart">smalllikeart</a> from <a href="https://www.flaticon.com/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
						Consultar/Alterar produto
					</a>
				</div>

				<div class="col-md-2">
					<a class="lock" href="cadastrarProduto.php" style="color: black;">
						<img src="../images/verProd.png"><br>
						<!--<div>Icons made by <a href="https://www.flaticon.com/authors/smalllikeart" title="smalllikeart">smalllikeart</a> from <a href="https://www.flaticon.com/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
						Cadastrar produto
					</a>
				</div>

				<div class="col-md-2">
					<a class="lock" href="excluirProduto.php" style="color: black;">
						<img src="../images/verProd.png"><br>
						<!--<div>Icons made by <a href="https://www.flaticon.com/authors/smalllikeart" title="smalllikeart">smalllikeart</a> from <a href="https://www.flaticon.com/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
						Remover produto
					</a>
				</div>				
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
