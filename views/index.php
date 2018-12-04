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
		<div class="header">
			<div class="header-top">
				<div class="container">
					<div class="search">
						<form>
							<input type="text" value="Search " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
							<input type="submit" value="Go">
						</form>
					</div>
					<div class="header-left">		
						<ul>
							<li ><a href="login.php">Login</a></li>
							<li><a  href="cadastrar.php">Cadastrar</a></li>
						</ul>
						<div class="cart box_1">
							<a href="checkout.php">
								<h3> <div class="total">
									<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
									<img src="../images/cart.png" alt=""/></h3>
							</a>
							<p><a href="javascript:;" class="simpleCart_empty">Esvaziar carrinho</a></p>
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
					<div class=" h_menu4">
						<ul class="memenu skyblue">
							<li class="active grid"><a class="color8" href="index.php">Inicio</a></li>	
							<li><a class="color1" href="#">Categorias</a>
								<div class="mepanel">
									<div class="row">
										<div class="col1">
											<div class="h_nav">
												<ul>
													<li><a href="products.html">Accessories</a></li>
													<li><a href="products.html">Leather Jackets</a></li>
													<li><a href="products.html">Long Sleeve T-Shirts</a></li>
													<li><a href="products.html">Loungewear</a></li>
												</ul>	
											</div>							
										</div>
									</div>
								</div>	
							</li>
							<li class="grid"><a class="color2" href="#">Paginas</a>
								<div class="mepanel">
									<div class="row">
										<div class="h_nav">
											<ul>
												<li><a href="products.html">Accessories</a></li>
												<li><a href="products.html">Bags</a></li>
												<li><a href="products.html">Loungewear</a></li>
											</ul>	
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
		
		<div class="banner">
			<div class="container">
				<script src="../js/responsiveslides.min.js"></script>
				<script>
					$(function () {
					$("#slider").responsiveSlides({
						auto: true,
						nav: true,
						speed: 500,
						namespace: "callbacks",
						pager: true,
					});
					});
				</script>
				<div id="top" class="callbacks_container">
					<ul class="rslides" id="slider">
						<li>	
							<div class="banner-text">
								<h3>Lorem Ipsum is not simply dummy  </h3>
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor .</p>
								<a href="single.html">Learn More</a>
							</div>
						</li>
						<li>
							<div class="banner-text">
								<h3>There are many variations </h3>
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor .</p>
								<a href="single.html">Learn More</a>
							</div>
						</li>
						<li>
							<div class="banner-text">
								<h3>Sed ut perspiciatis unde omnis</h3>
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor .</p>
								<a href="single.html">Learn More</a>
							</div>	
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!--content-->

		<div class="content">
			<div class="container">
			<div class="content-top">
				<h1>Recomendados para você</h1>
				<div class="grid-in">
					<div class="col-md-4 grid-top">
						<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="../img-responsive" src="../images/pi.jpg" alt="">
							<div class="b-wrapper">
								<h3 class="b-animate b-from-left b-delay03 ">
									<span>T-Shirt</span>	
								</h3>
							</div>
						</a>
						<p><a href="single.html">Contrary to popular</a></p>
					</div>
					<div class="col-md-4 grid-top">
						<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="../img-responsive" src="../images/pi1.jpg" alt="">
							<div class="b-wrapper">
								<h3 class="b-animate b-from-left b-delay03">
									<span>Shoe</span>
								<h3>
							</div>
						</a>
						<p><a href="single.html">classical Latin</a></p>
					</div>
					<div class="col-md-4 grid-top">
						<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="../img-responsive" src="../images/pi2.jpg" alt="">
							<div class="b-wrapper">
								<h3 class="b-animate b-from-left    b-delay03 "> <span>Bag</span> </h3>
							</div>
						</a>
						<p><a href="single.html">undoubtable</a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="grid-in">
					<div class="col-md-4 grid-top">
						<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="../img-responsive" src="../images/pi3.jpg" alt="">
							<div class="b-wrapper"> <h3 class="b-animate b-from-left    b-delay03 "> <span>Shirt</span>	</h3></div>
						</a>
						<p><a href="single.html">suffered alteration</a></p>
					</div>
					<div class="col-md-4 grid-top">
						<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="../img-responsive" src="../images/pi4.jpg" alt="">
							<div class="b-wrapper">
								<h3 class="b-animate b-from-left    b-delay03 "> <span>Bag</span></h3>
										</div>
						</a>
					<p><a href="single.html">Content here</a></p>
					</div>
					<div class="col-md-4 grid-top">
						<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="../img-responsive" src="../images/pi5.jpg" alt="">
							<div class="b-wrapper">
											<h3 class="b-animate b-from-left    b-delay03 ">
												<span>Shoe</span>	
											</h3>
										</div>
						</a>
					<p><a href="single.html">readable content</a></p>
					</div>
							<div class="clearfix"> </div>
				</div>
			</div>
			
			<!----->
			
			
			</div>
			
		</div>
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
						
							<p>
		Contrary to popular belief</p>
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
							<p>Sign Up to get all news update
		and promo</p>
							<form>
								<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
								<input type="submit" value="Sign up">
							</form>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="footer-class">
				<p >© 2015 New store All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
				</div>
				</div>
	</body>
</html>