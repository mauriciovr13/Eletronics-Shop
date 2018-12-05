<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
	<head>
		<title>Cadastrar - Eletronics Shop</title>
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
		<div class="header">
			<div class="header-top">
				<div class="container">
					<div class="search">
						<form>
							<input type="text" value="Search " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
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
						<a href="index.html"><img src="../images/logo.png" alt=""></a>	
					</div>
					<div class="h_menu4">
						<ul class="memenu skyblue">
							<li class="grid"><a class="color3" href="index.php">Inicio</a></li>	
							<li><a class="color1" href="#">Categorias</a>
								<div class="mepanel">
									<div class="row">
										<div class="col1">
											<div class="h_nav">
												<ul>
													<li><a href="products.html">Categoria1</a></li>
													<li><a href="products.html">Categoria2</a></li>
													<li><a href="products.html">Categoria3</a></li>
													<li><a href="products.html">Categoria4</a></li>
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
			
		<!--content-->
		<div class=" container">
			<div class=" register">
				<h1>Cadastro</h1>
				<form action="../controller/cad_cliente.php" method="POST"> 
					<div class="col-md-6 register-top-grid">
						<h3>Informações Pessoais</h3>
						<div>
							<span>Primeiro nome</span>
							<input name="nome" type="text"> 
						</div>
						<div>
							<span>Sobrenome</span>
							<input name="sobrenome" type="text"> 
						</div>
						<div>
							<span>CPF</span>
							<input type="text" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="ex: 111.111.111-11" required> 
						</div>
						<div>
							<span>Email</span>
							<input name="email" type="text"> 
						</div>
						<div>
							<span>Data de Nascimento</span>
							<input name="nascimento" type="text" placeholder="AAAA/MM/dd"> 
						</div>

					</div>
					<div class="col-md-6 register-bottom-grid">
						<h3>Informaçoes de LOGIN</h3>
						<div>
							<span>Senha</span>
							<input name="senha" type="password">
						</div>
						<div>
							<span>Confirmação de Senha</span>
							<input name="conf-senha" type="password">
						</div>
						<input type="submit" value="Cadastrar">
					</div>
					<div class="clearfix"> </div>
				</form>
			</div>
		</div>

		<!--//content-->
		<div class="footer">
			<div class="container">
				<div class="footer-top-at">
					<div class="col-md-4 amet-sed">
						<h4>MORE INFO</h4>
						<ul class="nav-bottom">
							<li><a href="#">How to order</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="contact.html">Location</a></li>
							<li><a href="#">Shipping</a></li>
							<li><a href="#">Membership</a></li>	
						</ul>	
					</div>
					<div class="col-md-4 amet-sed ">
						<h4>CONTACT US</h4>
						<p>Contrary to popular belief</p>
						<p>The standard chunk</p>
						<p>office:  +12 34 995 0792</p>
						<ul class="social">
							<li><a href="#"><i> </i></a></li>						
							<li><a href="#"><i class="twitter"> </i></a></li>
							<li><a href="#"><i class="rss"> </i></a></li>
							<li><a href="#"><i class="gmail"> </i></a></li>
						</ul>
					</div>
					<div class="col-md-4 amet-sed">
						<h4>Newsletter</h4>
						<p>Sign Up to get all news update and promo</p>
						<form>
							<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
							<input type="submit" value="Sign up">
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="footer-class">
				<p >© 2015 Eletronics Shop All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			</div>
		</div>
	</body>
</html>