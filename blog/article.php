<!DOCTYPE html>
<html class="supports-js supports-no-touch supports-csstransforms supports-csstransforms3d supports-fontface">
<?php
session_start();
?>
<!-- Mirrored from demo.tadathemes.com/HTML_Homemarket/demo/article.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Nov 2016 17:20:22 GMT -->
<?php
					require_once('../conexion.php');
				
							
						$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
						if(!$link) {
							die('Failed to connect to server: ' . mysql_error());		
							}
						
						//Select database
						$db = mysqli_select_db($link,DB_DATABASE);
						if(!$db) {
							die("Unable to select database");
						}
				
					
?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>Article Page - Home Market Red</title>
	<!-- Font ================================================== -->
	<link rel="shortcut icon" href="../adminlogin/assets/images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700"> 
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400,500,600,700">
	<!-- Helpers ================================================== -->
	<meta property="og:type" content="website">
	<meta property="og:title" content="Home Market - Responsive HTML5 theme">
	<meta property="og:image" content="../../assets/images/logo.html">
	<meta property="og:image:secure_url" content="../../assets/images/logo.html">
	<meta property="og:url" content="#">
	<meta property="og:site_name" content="Home Market Red">
	<meta name="twitter:site" content="@">
	<meta name="twitter:card" content="summary">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<!-- CSS ================================================== -->

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link href="assets/css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/swatch.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/flexslider.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/timber.scss.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/home_market.global.scss.css" rel="stylesheet" type="text/css" media="all">
	<link href="../assets/css/home_market.style.scss.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/tada.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/spr.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/social-buttons.scss.css" rel="stylesheet" type="text/css" media="all">
	<!-- JS ================================================== -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>	
	<script src="assets/js/jquery.fancybox.min.js" type="text/javascript"></script>
	<script src="assets/js/owl.carousel.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.tweet.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.optionSelect.js" type="text/javascript"></script>
	<script src="assets/js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.easytabs.min.js" type="text/javascript"></script>
</head>

<body id="products" class="template-collection">
	<div id="NavDrawer" class="drawer drawer--left">
		<div class="drawer__header">
			<div class="drawer__title h3">
				Browse
			</div>
			<div class="drawer__close js-drawer-close">
				<button type="button" class="icon-fallback-text">
				<span class="icon icon-x" aria-hidden="true"></span>
				<span class="fallback-text">Close menu</span>
				</button>
			</div>
		</div>
		<!-- begin mobile-nav -->
		<?php include('../includes/menu_movil2.php'); ?>
	</div>
	
	<div id="CartDrawer" class="drawer drawer--right fancybox-margin">
		<div class="drawer__header">
			<div class="drawer__title h3">
				Shopping Cart
			</div>
			<div class="drawer__close js-drawer-close">
				<button type="button" class="icon-fallback-text">
				<span class="icon icon-x" aria-hidden="true"></span>
				<span class="fallback-text">"Close Cart"</span>
				</button>
			</div>
		</div>
		<div id="CartContainer">
			<form action="http://demo.tadathemes.com/HTML_Homemarket/demo/cart.html" method="post" novalidate="" class="cart ajaxcart">
				<div class="ajaxcart__inner">
					<div class="ajaxcart__product">
						<div class="ajaxcart__row" data-line="1">
							<div class="grid">
								<div class="grid__item one-quarter">
									<a href="product.html" class="ajaxcart__product-image"><img src="assets/images/demo1_cart1.jpg" alt=""></a>
								</div>
								<div class="grid__item three-quarters">
									<p>
										<a href="product.html" class="ajaxcart__product-name">Demo Product Sample</a>
										<span class="ajaxcart__product-meta">S / Red</span>
									</p>
									<div class="grid--full display-table">
										<div class="grid__item">
											<div class="ajaxcart__qty">
												<button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus icon-fallback-text" data-id="8772444163" data-qty="0" data-line="1">
												<span class="icon icon-minus" aria-hidden="true"></span>
												<span class="fallback-text">?</span>
												</button>
												<input type="text" name="updates[]" class="ajaxcart__qty-num" value="1" min="0" data-id="8772444163" data-line="1" aria-label="quantity" pattern="[0-9]*">
												<button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus icon-fallback-text" data-id="8772444163" data-line="1" data-qty="2">
												<span class="icon icon-plus" aria-hidden="true"></span>
												<span class="fallback-text">+</span>
												</button>
											</div>
										</div>
										<div class="grid__item">
											<span class="money" data-currency-usd="$34.00 USD" data-currency="USD">$34.00 USD</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="ajaxcart__product">
						<div class="ajaxcart__row" data-line="2">
							<div class="grid">
								<div class="grid__item one-quarter">
									<a href="product.html" class="ajaxcart__product-image"><img src="assets/images/demo1_cart2.jpg" alt=""></a>
								</div>
								<div class="grid__item three-quarters">
									<p>
										<a href="product.html" class="ajaxcart__product-name">Demo Product Sample</a>
										<span class="ajaxcart__product-meta">Medium / Pink</span>
									</p>
									<div class="grid--full display-table">
										<div class="grid__item">
											<div class="ajaxcart__qty">
												<button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus icon-fallback-text" data-id="10722484483" data-qty="0" data-line="2">
												<span class="icon icon-minus" aria-hidden="true"></span>
												<span class="fallback-text">?</span>
												</button>
												<input type="text" name="updates[]" class="ajaxcart__qty-num" value="1" min="0" data-id="10722484483" data-line="2" aria-label="quantity" pattern="[0-9]*">
												<button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus icon-fallback-text" data-id="10722484483" data-line="2" data-qty="2">
												<span class="icon icon-plus" aria-hidden="true"></span>
												<span class="fallback-text">+</span>
												</button>
											</div>
										</div>
										<div class="grid__item">
											<span class="money" data-currency-usd="$100.00 USD" data-currency="USD">$100.00 USD</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="ajaxcart__product">
						<div class="ajaxcart__row" data-line="3">
							<div class="grid">
								<div class="grid__item one-quarter">
									<a href="product.html" class="ajaxcart__product-image"><img src="assets/images/demo1_cart3.jpg" alt=""></a>
								</div>
								<div class="grid__item three-quarters">
									<p>
										<a href="product.html" class="ajaxcart__product-name">Demo Product Sample</a>
										<span class="ajaxcart__product-meta">XS / Black</span>
									</p>
									<div class="grid--full display-table">
										<div class="grid__item">
											<div class="ajaxcart__qty">
												<button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus icon-fallback-text" data-id="8772462979" data-qty="0" data-line="3">
												<span class="icon icon-minus" aria-hidden="true"></span>
												<span class="fallback-text">?</span>
												</button>
												<input type="text" name="updates[]" class="ajaxcart__qty-num" value="1" min="0" data-id="8772462979" data-line="3" aria-label="quantity" pattern="[0-9]*">
												<button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus icon-fallback-text" data-id="8772462979" data-line="3" data-qty="2">
												<span class="icon icon-plus" aria-hidden="true"></span>
												<span class="fallback-text">+</span>
												</button>
											</div>
										</div>
										<div class="grid__item">
											<span class="money" data-currency-usd="$89.00 USD" data-currency="USD">$89.00 USD</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div>
						<label for="CartSpecialInstructions">Special instructions for seller</label>
						<textarea name="note" class="input-full" id="CartSpecialInstructions"></textarea>
					</div>
				</div>
				<div class="ajaxcart__footer">
					<div class="grid--full">
						<div class="grid__item title-total">
							<p>
								Subtotal
							</p>
						</div>
						<div class="grid__item price-total">
							<p>
								<span class="money" data-currency-usd="$223.00 USD" data-currency="USD">$223.00 USD</span>
							</p>
						</div>
					</div>
					<p class="text-center">
						Shipping &amp; taxes calculated at checkout
					</p>
					<button type="button" class="btn btn--full cart__shoppingcart" name="shoppingCart" onclick="location.href='cart.html'">
					Shopping Cart ? </button>
					<button type="submit" class="btn btn2 btn--full cart__checkout" name="checkout">
					Check Out ? </button>
				</div>
			</form>
		</div>
	</div>
	
	<div id="PageContainer" class="is-moved-by-drawer">
		<!-- Ads Banner -->
		<div id="adv-banner">
			<div id="ads-banner" class="grid--full grid--table">
				<div class="ads-banner-slider owl-carousel">
					<div class="ads-item">
						<img src="assets/images/ads1.png" alt="ads banner 1">
					</div>						
					<div class="ads-item">
						<img src="assets/images/ads2.png" alt="ads banner 2">
					</div>
					<div class="ads-item">
						<img src="assets/images/ads3.png" alt="ads banner 3">
					</div>
				</div>
			</div>
		</div>
	
		<!-- Top Other -->
		<?php include('../includes/top_info2.php'); ?>

		<!-- Main Header -->
		<header class="site-header">
			<div class="wrapper">
				<div id="main-header" class="grid--full grid--table">
					<?php include('../includes/logo2.php'); ?>
					<div class="grid__item small--one-whole medium--one-whole four-eighths mobile-bottom">
						<div class="large--hide medium-down--show navigation-icon">
							<div class="grid">
								<div class="grid__item one-half">
									<div class="site-nav--mobile">
										<button type="button" class="icon-fallback-text site-nav__link js-drawer-open-left" aria-controls="NavDrawer" aria-expanded="false">
										<span class="icon icon-hamburger" aria-hidden="true"></span>
										<span class="fallback-text">Menu</span>
										</button>
									</div>
								</div>
							</div>
						</div>
						<?php include('../includes/busqueda2.php'); ?>
						<div class="large--hide medium-down--show navigation-cart">
							<div class="grid__item text-right">
								<div class="site-nav--mobile">
									<a href="cart.html" class="js-drawer-open-right site-nav__link" aria-controls="CartDrawer" aria-expanded="false">
									<span class="icon-fallback-text">
									<span class="icon icon-cart" aria-hidden="true"></span>
									<span class="fallback-text">Shopping Cart</span>
									</span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<?php include('../includes/options_header2.php');?>
				</div>       
			</div>
		</header>

		<!-- Navigation Bar -->
		<nav class="nav-bar">
			<div class="wrapper">
				<div class="medium-down--hide">
					<!-- begin site-nav -->
					<?php include('../includes/menu_principal2.php'); ?>
					<script>
						  $(window).ready(function($) {
							//$('.megamenu__dropdown').css("width",$('#main-header').innerWidth());
						  });
						  $( window ).resize(function() {
							//$('.megamenu__dropdown').css("width",$('#main-header').innerWidth());
						  });
					</script>
				</div>
			</div>
		</nav>    <!-- Main Content -->
    
					<?php

require_once('../conexion.php');
						$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
						if(!$link) {
							die('Failed to connect to server: ' . mysql_error());		
							}
						
						//Select database
						$db = mysqli_select_db($link,DB_DATABASE);
						if(!$db) {
							die("Unable to select database");
						}
						
						
						$id = $_REQUEST['id'];
						$consulta = mysqli_query($link, "SELECT * FROM post WHERE id_post = '$id'");
						while($registro = mysqli_fetch_array($consulta)){


						$query2 = mysqli_query($link, "SELECT * FROM comentarios_post WHERE post_id = '$id'");

?>
		<main class="main-content">
			<br>
			<div class="wrapper">
				<div class="grid">
					<article class="grid__item large--three-quarters" itemscope="" itemtype="http://schema.org/Article">
					<header class="section-header-blog">
						<div class="section-header__left">
							<h3><?php echo $registro['titulo_post'];?></h3>
							<p>
								Publicado por <strong><?php echo $registro['autor_post'];?></strong> en <time datetime="2015-11-29"><?php echo $registro['fecha_post'];?></time>
							</p>
						</div>
					</header>
					<div class="blog-image">
						
						<?php echo "<img src='imagenes/".$registro["imagen_post"]."'>"?>
					</div>
					<?php echo "<strong>Tags: </strong><i>".$registro['categoria_post']?></i><br><br>
					<div class="rte" itemprop="articleBody">
						<p>
							<?php echo htmlspecialchars($registro['descripcion_post']); ?>
						</p>
						
					</div>
					<div class="rte" itemprop="articleBody">
						<p>
							<?php echo $registro['contenido_completo_post']; ?>
						</p>
						
					</div>
					<?php } ?>
					<ul class="inline-list">						
					</ul>
					<hr>
					<aside>
<style>

.panel-shadow {
    box-shadow: rgba(0, 0, 0, 0.3) 7px 7px 7px;
}
.panel-white {
  border: 1px solid #dddddd;
}
.panel-white  .panel-heading {
  color: #333;
  background-color: #fff;
  border-color: #ddd;
}
.panel-white  .panel-footer {
  background-color: #fff;
  border-color: #ddd;
}

.post .post-heading {
  height: 95px;
  padding: 20px 15px;
}
.post .post-heading .avatar {
  width: 60px;
  height: 60px;
  display: block;
  margin-right: 15px;
}
.post .post-heading .meta .title {
  margin-bottom: 0;
}
.post .post-heading .meta .title a {
  color: black;
}
.post .post-heading .meta .title a:hover {
  color: #aaaaaa;
}
.post .post-heading .meta .time {
  margin-top: 8px;
  color: #999;
}
.post .post-image .image {
  width: 100%;
  height: auto;
}
.post .post-description {
  padding: 15px;
}
.post .post-description p {
  font-size: 14px;
}
.post .post-description .stats {
  margin-top: 20px;
}
.post .post-description .stats .stat-item {
  display: inline-block;
  margin-right: 15px;
}
.post .post-description .stats .stat-item .icon {
  margin-right: 8px;
}
.post .post-footer {
  border-top: 1px solid #ddd;
  padding: 15px;
}
.post .post-footer .input-group-addon a {
  color: #454545;
}
.post .post-footer .comments-list {
  padding: 0;
  margin-top: 20px;
  list-style-type: none;
}
.post .post-footer .comments-list .comment {
  display: block;
  width: 100%;
  margin: 20px 0;
}
.post .post-footer .comments-list .comment .avatar {
  width: 35px;
  height: 35px;
}
.post .post-footer .comments-list .comment .comment-heading {
  display: block;
  width: 100%;
}
.post .post-footer .comments-list .comment .comment-heading .user {
  font-size: 14px;
  font-weight: bold;
  display: inline;
  margin-top: 0;
  margin-right: 10px;
}
.post .post-footer .comments-list .comment .comment-heading .time {
  font-size: 12px;
  color: #aaa;
  margin-top: 0;
  display: inline;
}
.post .post-footer .comments-list .comment .comment-body {
  margin-left: 50px;
}
.post .post-footer .comments-list .comment > .comments-list {
  margin-left: 50px;
}
</style>

<form action="procesar_leer_mas.php?id=<?php echo $_GET['id'];?>" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" name="usuario" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" class="form-control" name="email_usuario" id="exampleInputPassword1" placeholder="Password">
  </div>
  <textarea class="form-control" rows="3"  name="comentario" placeholder="comentario..."></textarea><br>

  <button type="submit" class="btn btn-default">Comentar</button>
</form>

<br>

<?php

require_once('../conexion.php');
		$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
		if(!$link) {
		die('Failed to connect to server: ' . mysql_error());		
					}
						
		//Select database
		$db = mysqli_select_db($link,DB_DATABASE);
		if(!$db) {
		die("Unable to select database");
				}


		$id = $_GET['id'];
		$query = "SELECT * FROM comentarios_post WHERE post_id = '$id' ORDER BY id_comentario DESC LIMIT 6 ";
			$resultado = $link->query($query);
			while($row = $resultado->fetch_assoc()){

?>


<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="panel panel-white post panel-shadow">
                <div class="post-heading">
                    <div class="pull-left image">
                        <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                    </div>
                    <div class="pull-left meta">
                        <div class="title h5">
                            <a href="#"><b><?php echo $row['usuario_comentario'];?></b></a>
                        </div>
                        <h6 class="text-muted time">1 minute ago</h6>
                    </div>
                </div> 
                <div class="post-description"> 
                    <p><?php echo $row['comentario'];?></p>
                    
                </div>
            </div>
        </div>
        
    </div>
</div>

<?php

			}
?>
	
	
</aside>
					</article>

					<aside class="grid__item large--one-quarter" role="complementary">				
					<div class="group_sidebar blog_sidebar">
						<div class="sb-wrapper">
							<h6 class="sb-title">Articulos Recientes</h6>
							<ul class="no-bullets sb-content">
								<?php
								$query = "SELECT * FROM post ORDER BY id_post DESC";
								$resultado = $link->query($query);
								while($row = $resultado->fetch_assoc()){
									
									?>
									<li>
									<div class="title">
										<a <a href="article.php?id=<?php echo $row['id_post']; ?>"><?php echo $row['titulo_post'];?></a>
									</div>
									<time datetime="2015-11-29"><?php echo $row['fecha_post'];?></time>
									</li>
									<?php
									}
									?>
								</ul>
						</div>
					</div>
					</aside>
				</div>
			</div>
		</main>
		<footer class="site-footer">  

			<?php include('../includes/info_footer2.php'); ?>
			
			<script type="text/javascript">
			  $(function () {
				$(".fi-title").click(function(){
				  $(this).toggleClass('opentab');
				});
			  });
			</script>         
		</footer>
	</div>

	<div id="scroll-to-top" title="Scroll to Top" class="off">
		<i class="fa fa-caret-up"></i>
	</div>
    
    <script>
		var tada_index,tada_autosearchcomplete,tada_swiftype,tada_ads,tada_adsspeed,tada_slideshowtime,tada_block1gallery=false,tada_block1product=false, tada_newsletter=false;
		  tada_index=1;
		  tada_ads=1;
		  tada_adsspeed=5000;
		  tada_slideshowtime = 30000;
		  tada_block1gallery = true;
		  tada_block1product = true;
		  tada_newsletter = true;
    </script>
  
	<script src="assets/js/modernizr.min.js" type="text/javascript"></script>
	<script src="assets/js/timber.js" type="text/javascript"></script>
	
</body>