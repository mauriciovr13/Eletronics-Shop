<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Carrinho - Eletronics-Shop</title>
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
        <script type="text/javascript" src="js/memenu.js"></script>
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
                            <li><a class="lock" href="login.php">Login</a></li>
                            <li><a class="lock" href="cadastrar.php">Cadastrar</a></li>
                        </ul>
                        <div class="cart box_1">
                            <a href="#">
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
            
        <div class="container">
            <div class="check">	 
                <h1>Minha sacola</h1>
                <div class="col-md-9 cart-items">
                    <script>$(document).ready(function(c) {
                            $('.close1').on('click', function(c){
                                $('.cart-header').fadeOut('slow', function(c){
                                    $('.cart-header').remove();
                                });
                                });	  
                            });
                    </script>
                    <div class="cart-header">
                        <div class="close1"> </div>
                            <div class="cart-sec simpleCart_shelfItem">
                                <div class="cart-item cyc">
                                    <img src="../images/pic1.jpg" class="img-responsive" alt=""/>
                                </div>
                                <div class="cart-item-info">
                                    <h3><a href="#">Mountain Hopper(XS R034)</a><span>Model No: 3578</span></h3>
                                    <ul class="qty">
                                        <li><p>Size : 5</p></li>
                                        <li><p>Qty : 1</p></li>
                                    </ul>                                
                                    <div class="delivery">
                                        <p>Service Charges : Rs.100.00</p>
                                        <span>Delivered in 2-3 bussiness days</span>
                                        <div class="clearfix"></div>
                                    </div>	
                                </div>
                                <div class="clearfix"></div>                    
                            </div>
                        </div>
                        <script>$(document).ready(function(c) {
                            $('.close2').on('click', function(c){
                                    $('.cart-header2').fadeOut('slow', function(c){
                                        $('.cart-header2').remove();
                                    });
                                });	  
                            });
                        </script>
                        <div class="cart-header2">
                            <div class="close2"> </div>
                                <div class="cart-sec simpleCart_shelfItem">
                                    <div class="cart-item cyc">
                                        <img src="../images/pic2.jpg" class="img-responsive" alt=""/>
                                    </div>
                                    <div class="cart-item-info">
                                        <h3><a href="#">Mountain Hopper(XS R034)</a><span>Model No: 3578</span></h3>
                                        <ul class="qty">
                                            <li><p>Size : 5</p></li>
                                            <li><p>Qty : 1</p></li>
                                        </ul>
                                        <div class="delivery">
                                            <p>Service Charges : Rs.100.00</p>
                                            <span>Delivered in 2-3 bussiness days</span>
                                            <div class="clearfix"></div>
                                        </div>	
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>		
                        </div>
                        <div class="col-md-3 cart-total">
                            <a class="continue" href="#">Finalizar compra</a>
                            <div class="price-details">
                                <h3>Price Details</h3>
                                <span>Total</span>
                                <span class="total1">6200.00</span>
                                <span>Desconto</span>
                                <span class="total1">---</span>
                                <span>Frete</span>
                                <span class="total1">15.00</span>
                                <div class="clearfix"></div>				 
                            </div>	
                            <ul class="total_price">
                                <li class="last_price"> <h4>TOTAL</h4></li>	
                                <li class="last_price"><span>6350.00</span></li>
                                <div class="clearfix"> </div>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>

        <!--//content-->
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
			