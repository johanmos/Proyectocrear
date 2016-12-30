<?php 
include_once("collectionLogic.php");
include_once("listacategorias.php"); 
$listacategorias2=$listacategorias;

?>
<!DOCTYPE html>
<html class="supports-js supports-no-touch supports-csstransforms supports-csstransforms3d supports-fontface">

<!-- Mirrored from demo.tadathemes.com/HTML_Homemarket/demo/collection.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Nov 2016 17:19:33 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>Collection Page  - Home Market Red</title>
	<!-- Font ================================================== -->
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
	<link href="assets/css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/swatch.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/flexslider.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/timber.scss.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/home_market.global.scss.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/home_market.style.scss.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/tada.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/spr.css" rel="stylesheet" type="text/css" media="all">
	<!-- JS ================================================== -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>	
	<script src="assets/js/jquery.fancybox.min.js" type="text/javascript"></script>
	<script src="assets/js/owl.carousel.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.tweet.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.optionSelect.js" type="text/javascript"></script>
	<script src="assets/js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script type="text/javascript">
	var arrayJS=<?php echo json_encode($ar);?>;
	
</script>
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
		<ul class="mobile-nav">
			<li class="mobile-nav__item mobile-nav__item--active">
				<a href="#" class="mobile-nav__link">Home</a>
			</li>
			<li class="mobile-nav__item" aria-haspopup="true">
				<div class="mobile-nav__has-sublist">
					<a href="collections.html" class="mobile-nav__link">Collections</a>
					<div class="mobile-nav__toggle">
						<button type="button" class="icon-fallback-text mobile-nav__toggle-open">
						<span class="icon icon-plus" aria-hidden="true"></span>
						<span class="fallback-text">See More</span>
						</button>
						<button type="button" class="icon-fallback-text mobile-nav__toggle-close">
						<span class="icon icon-minus" aria-hidden="true"></span>
						<span class="fallback-text">"Close Cart"</span>
						</button>
					</div>
				</div>
				<ul class="mobile-nav__sublist">
					<li class="mobile-nav__item ">
					<a href="collection.html" class="mobile-nav__link">Book</a>
					</li>
					<li class="mobile-nav__item ">
					<a href="collection.html" class="mobile-nav__link">Health &amp; Beatuty</a>
					</li>
					<li class="mobile-nav__item ">
					<a href="collection.html" class="mobile-nav__link">Homelife</a>
					</li>
					<li class="mobile-nav__item ">
					<a href="collection.html" class="mobile-nav__link">Home Appliances</a>
					</li>
					<li class="mobile-nav__item ">
					<a href="collection.html" class="mobile-nav__link">Smartphones &amp; Cell Phones</a>
					</li>
					<li class="mobile-nav__item ">
					<a href="collection.html" class="mobile-nav__link">Camera - Camcorder</a>
					</li>
					<li class="mobile-nav__item ">
					<a href="collection.html" class="mobile-nav__link">Accessories</a>
					</li>
					<li class="mobile-nav__item ">
					<a href="collection.html" class="mobile-nav__link">Kids &amp; Baby</a>
					</li>
					<li class="mobile-nav__item ">
					<a href="collection.html" class="mobile-nav__link">Toy and Gift</a>
					</li>
					<li class="mobile-nav__item ">
					<a href="collection.html" class="mobile-nav__link">Stationery</a>
					</li>
				</ul>
			</li>
			<li class="mobile-nav__item" aria-haspopup="true">
			<div class="mobile-nav__has-sublist">
				<a href="collection.html" class="mobile-nav__link">Shop</a>
				<div class="mobile-nav__toggle">
					<button type="button" class="icon-fallback-text mobile-nav__toggle-open">
					<span class="icon icon-plus" aria-hidden="true"></span>
					<span class="fallback-text">See More</span>
					</button>
					<button type="button" class="icon-fallback-text mobile-nav__toggle-close">
					<span class="icon icon-minus" aria-hidden="true"></span>
					<span class="fallback-text">"Close Cart"</span>
					</button>
				</div>
			</div>
			<ul class="mobile-nav__sublist megamenu__dropdown mobile_megamenu_1">
				<li class="nav-sampletext grid__item small-one-whole">
				<a href="#"><img src="assets/images/logo-b.png" alt=""></a>
				<p>
					Lorem ipsum dolor sit amet, quod fabellas hendrerit per eu, mea populo epicuri et, ea possim numquam mea.
				</p>
				<p>
					Duo harum ornatus ponderum an, at ius zril menandri praesent. Bonorum tacimates interesset has ei, pro ignota prodesset at. Vel ea velit percipitur.
				</p>
				</li>
				<li class="nav-links nav-links01 grid__item small-one-whole">
				<ul>
					<li class="list-title">1st Collections</li>
					<li class="list-unstyled nav-sub-mega">
					<a href="collection.html">Book</a>
					</li>
					<li class="list-unstyled nav-sub-mega">
					<a href="collection.html">Health &amp; Beatuty</a>
					</li>
					<li class="list-unstyled nav-sub-mega">
					<a href="collection.html">Homelife</a>
					</li>
					<li class="list-unstyled nav-sub-mega">
					<a href="collection.html">Home Appliances</a>
					</li>
					<li class="list-unstyled nav-sub-mega">
					<a href="collection.html">Smartphones &amp; Cell Phones</a>
					</li>
				</ul>
				</li>
				<li class="nav-links nav-links02 grid__item small-one-whole">
				<ul>
					<li class="list-title">2nd Collections</li>
					<li class="list-unstyled nav-sub-mega">
					<a href="collection.html">Camera - Camcorder</a>
					</li>
					<li class="list-unstyled nav-sub-mega">
					<a href="collection.html">Accessories</a>
					</li>
					<li class="list-unstyled nav-sub-mega">
					<a href="collection.html">Kids &amp; Baby</a>
					</li>
					<li class="list-unstyled nav-sub-mega">
					<a href="collection.html">Toy and Gift</a>
					</li>
					<li class="list-unstyled nav-sub-mega">
					<a href="collection.html">Stationery</a>
					</li>
				</ul>
				</li>
				<li class="nav-links nav-links03 grid__item small-one-whole">
				<ul>
					<li class="list-title">Pages</li>
					<li class="list-unstyled nav-sub-mega">
					<a href="collection.html">All Collections</a>
					</li>
					<li class="list-unstyled nav-sub-mega">
					<a href="collection-2.html">All Products</a>
					</li>
					<li class="list-unstyled nav-sub-mega">
					<a href="collection-3.html">About us</a>
					</li>
					<li class="list-unstyled nav-sub-mega">
					<a href="collection.html">Contact us</a>
					</li>
					<li class="list-unstyled nav-sub-mega">
					<a href="collection.html">Wishlist</a>
					</li>
				</ul>
				</li>
			</ul>
			</li>
			<li class="mobile-nav__item">
			<a href="collection.html" class="mobile-nav__link">Today's Deals</a>
			</li>
			<li class="mobile-nav__item">
			<a href="blog.html" class="mobile-nav__link">Blog</a>
			</li>
			<li class="mobile-nav__item">
			<a href="lookbook.html" class="mobile-nav__link">Lookbook</a>
			</li>
			<!-- Customer links -->
			<li class="mobile-nav__item">
			<a href="login.html" id="customer_login_link">Log in</a>
			</li>
			<li class="mobile-nav__item">
			<a href="register.html" id="customer_register_link">Create New Account</a>
			</li>
		</ul>
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
									<a href="product.php" class="ajaxcart__product-image"><img src="assets/images/demo1_cart1.jpg" alt=""></a>
								</div>
								<div class="grid__item three-quarters">
									<p>
										<a href="product.php" class="ajaxcart__product-name">Demo Product Sample</a>
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
									<a href="product.php" class="ajaxcart__product-image"><img src="assets/images/demo1_cart2.jpg" alt=""></a>
								</div>
								<div class="grid__item three-quarters">
									<p>
										<a href="product.php" class="ajaxcart__product-name">Demo Product Sample</a>
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
									<a href="product.php" class="ajaxcart__product-image"><img src="assets/images/demo1_cart3.jpg" alt=""></a>
								</div>
								<div class="grid__item three-quarters">
									<p>
										<a href="product.php" class="ajaxcart__product-name">Demo Product Sample</a>
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
		<div id="top-header" class="grid--full grid--table">
			<div class="wrapper">
				<div id="topother-header" class="grid--full grid--table">
					<div class="grid__item one-half top-header-left">
						 Default Welcome Msg!
					</div>
					<div class="grid__item one-half top-header-right">
						<div class="currency-picker">
							<label class="currency-picker__wrapper">
							<span class="currency-picker__label">Currency</span>
							<select class="currency-picker" name="currencies" style="display: inline; width: auto; vertical-align: inherit;">
								<option value="USD" selected="selected">USD</option>
								<option value="INR">INR</option>
								<option value="GBP">GBP</option>
								<option value="CAD">CAD</option>
								<option value="AUD">AUD</option>
								<option value="EUR">EUR</option>
								<option value="JPY">JPY</option>
							</select>
							</label>
						</div>
						<div class="fi-content inline-list social-icons">
							<a href="#" title="Twitter" class="icon-social twitter" data-toggle="tooltip" data-placement="top"><i class="fa fa-twitter-square"></i></a>
							<a href="#" title="Facebook" class="icon-social facebook" data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook-square"></i></a>
							<a href="#" title="Google+" class="icon-social google" data-toggle="tooltip" data-placement="top"><i class="fa fa-google-plus-square"></i></a>
							<a href="#" title="Pinterest" class="icon-social pinterest" data-toggle="tooltip" data-placement="top"><i class="fa fa-pinterest-square"></i></a>
							<a href="#" title="Youtube" class="icon-social youtube" data-toggle="tooltip" data-placement="top"><i class="fa fa-youtube-square"></i></a>
							<a href="#" title="Vimeo" class="icon-social vimeo" data-toggle="tooltip" data-placement="top"><i class="fa fa-vimeo-square"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Header -->
		<header class="site-header">
			<div class="wrapper">
				<div id="main-header" class="grid--full grid--table">
					<div class="grid__item small--one-whole medium--one-whole two-eighths">
						<h1 class="site-header__logo large--left" itemscope="" itemtype="http://schema.org/Organization">
						<a href="index.html" itemprop="url" class="site-header__logo-link">
						<img src="assets/images/logo.png" alt="Home Market Red" itemprop="logo">
						</a>
						</h1>
					</div>
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
						<div class="site-header__search">
							<form action="http://demo.tadathemes.com/HTML_Homemarket/demo/search.html" method="get" class="input-group search-bar">
								<div class="collections-selector">
									<select class="single-option-selector" data-option="collection-option" id="collection-option" name="collection">
												
									</select>
								</div>
								<input type="hidden" name="type" value="product">
								<input type="search" name="q" value="" placeholder="Search our store" class="input-group-field st-default-search-input" aria-label="Search our store">
								<span class="input-group-btn">
								<button type="submit" class="btn icon-fallback-text">
								<i class="fa fa-search"></i>
								<span class="fallback-text">Search</span>
								</button>
								</span>
							</form>
						</div>
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
					<div class="grid__item small--one-whole two-eighths medium-down--hide">
						<ul class="link-list">
							<li class="track-order">
								<a href="store-location.html">
									<i class="fa fa-map-marker"></i>
									<span class="name">Store Location</span>
								</a>
							</li>
							<li class="header-account">
								<a href="#loginBox" id="login_link">
									<i class="fa fa-user"></i>
									<span class="name">My Account</span>
								</a>
								<div id="loginBox" class="loginLightbox" style="display:none;">
									<div id="lightboxlogin">
										<form method="post" action="http://demo.tadathemes.com/HTML_Homemarket/demo/login.html" id="customer_login" accept-charset="UTF-8">
											<input type="hidden" value="customer_login" name="form_type"><input type="hidden" name="utf8" value="?">
											<div id="bodyBox">
												<h3>Login</h3>
												<label for="CustomerEmail" class="hidden-label">Email</label>
												<input type="email" name="customer[email]" id="CustomerEmail" class="input-full" placeholder="Email">
												<label for="CustomerPassword" class="hidden-label">Password</label>
												<input type="password" value="" name="customer[password]" id="CustomerPassword" class="input-full" placeholder="Password">
												<input type="submit" class="btn btn2 btn--full" value="Sign In">
												<div>
													<p class="forgot">
														<a href="#recover" onclick="showRecoverPasswordForm();return false;" id="RecoverPassword">Forgot your password?</a>
													</p>
													<p class="create">
														<a href="#create_accountBox" onclick="showCreateAccountForm();return false;" id="CreateAccountPassword">Create New Account</a>
													</p>
												</div>
												<p>
													<a href="#" onclick="$.fancybox.close();">Close</a>
												</p>
											</div>
										</form>
									</div>
									<div id="recover-password" style="display:none;">
										<h3>Reset your password</h3>
										<p class="note">
											We will send you an email to reset your password.
										</p>
										<form method="post" action="http://demo.tadathemes.com/HTML_Homemarket/demo/recover.html" accept-charset="UTF-8">
											<input type="hidden" value="recover_customer_password" name="form_type"><input type="hidden" name="utf8" value="?">
											<p>
												<label for="recover-email" class="label">Email</label>
											</p>
											<input type="email" value="" size="30" name="email" id="recover-email" class="text">
											<div class="action_bottom">
												<input class="btn btn2" type="submit" value="Submit">
												<a class="btn back" href="#" onclick="hideRecoverPasswordForm();return false;">Back to Login</a>
											</div>
											<p class="close">
												<a href="#" onclick="$.fancybox.close();">Close</a>
											</p>
										</form>
									</div>
									<div id="create_accountBox" style="display:none;">
										<h3>Create Account</h3>
										<div class="form-vertical">
											<form method="post" action="http://demo.tadathemes.com/HTML_Homemarket/demo/account.html" id="create_customer" accept-charset="UTF-8">
												<input type="hidden" value="create_customer" name="form_type"><input type="hidden" name="utf8" value="?">
												<label for="FirstName" class="hidden-label">First Name</label>
												<input type="text" name="customer[first_name]" id="FirstName" class="input-full" placeholder="First Name">
												<label for="LastName" class="hidden-label">Last Name</label>
												<input type="text" name="customer[last_name]" id="LastName" class="input-full" placeholder="Last Name">
												<label for="Email" class="hidden-label">Email</label>
												<input type="email" name="customer[email]" id="Email" class="input-full" placeholder="Email">
												<label for="CreatePassword" class="hidden-label">Password</label>
												<input type="password" name="customer[password]" id="CreatePassword" class="input-full" placeholder="Password">
												<p>
													<input type="submit" value="Create" class="btn btn2 btn--full">
												</p>
												<p>
													<span><a class="btn" href="#" onclick="hideRecoverPasswordForm();return false;">Back to Login</a></span>
												</p>
												<p class="close">
													<a href="#" onclick="$.fancybox.close();">Close</a>
												</p>
											</form>
										</div>
									</div>
									<script>
											function showRecoverPasswordForm() {
											  $('#recover-password').css("display",'block');
											  $('#lightboxlogin').css("display",'none');
											  $('#create_accountBox').css("display",'none');
											}
											function hideRecoverPasswordForm() {
											  $('#recover-password').css("display",'none');
											  $('#lightboxlogin').css("display",'block');
											  $('#create_accountBox').css("display",'none');
											}
											function showCreateAccountForm(){
											  $('#recover-password').css("display",'none');
											  $('#lightboxlogin').css("display",'none');
											  $('#create_accountBox').css("display",'block');
											}
										  </script>
								</div>
							</li>
							<li class="header-cart">
								<a href=".cart.html" class="site-header__cart-toggle js-drawer-open-right" aria-controls="CartDrawer" aria-expanded="false">
									<i class="fa fa-shopping-basket"></i>
									<span id="CartCount">0</span>
									<span class="name">Shopping Cart</span>
								</a>
							</li>
						</ul>
					</div>
				</div>       
			</div>
		</header>

		<!-- Navigation Bar -->
		<nav class="nav-bar">
			<div class="wrapper">
				<div class="medium-down--hide">
					<!-- begin site-nav -->
					<ul class="site-nav" id="AccessibleNav">
						<li class="site-nav--active">
							<a href="index.html" class="site-nav__link">
								<span>Home</span>
							</a>
						</li>
						<li class="site-nav--has-dropdown" aria-haspopup="true">
							<a href="collection.html" class="site-nav__link">
								<span>Collections</span>
								<span class="icon icon-arrow-down" aria-hidden="true"></span>
							</a>
							<ul class="site-nav__dropdown">
								<li>
								<a href="collection.html" class="site-nav__link">Book</a>
								</li>
								<?php 
									if($listacategorias->num_rows>0){
									while($row=$result->fetch_assoc()){
										print '<li>
										<a href="collection.html" class="site-nav__link">Book</a>
										</li>';
									}}
									?>		
							</ul>
						</li>
						<li class="mega-menu site-nav--has-dropdown" aria-haspopup="true">
							<a href="collection.html" class="site-nav__link">
								<span>Shop</span>
								<span class="icon icon-arrow-down" aria-hidden="true"></span>
								<span class="special_label hot_label">Hot</span>
							</a>
							<ul class="site-nav__dropdown megamenu__dropdown megamenu_1">
								<li class="nav-sampletext grid__item large--one-quarter">
									<a href="index.html"><img src="assets/images/logo-b.png" alt=""></a>
									<p>
										Lorem ipsum dolor sit amet, quod fabellas hendrerit per eu, mea populo epicuri et, ea possim numquam mea.
									</p>
									<p>
										Duo harum ornatus ponderum an, at ius zril menandri praesent. Bonorum tacimates interesset has ei, pro ignota prodesset at. Vel ea velit percipitur.
									</p>
								</li>
								<li class="nav-links nav-links01 grid__item large--one-quarter">
									<ul>
										<li class="list-title">1st Collections</li>
										<li class="list-unstyled nav-sub-mega">
										<a href="collection.html">Book</a>
										</li>
										<li class="list-unstyled nav-sub-mega">
										<a href="collection.html">Health &amp; Beatuty</a>
										</li>
										<li class="list-unstyled nav-sub-mega">
										<a href="collection.html">Homelife</a>
										</li>
										<li class="list-unstyled nav-sub-mega">
										<a href="collection.html">Home Appliances</a>
										</li>
										<li class="list-unstyled nav-sub-mega">
										<a href="collection.html">Smartphones &amp; Cell Phones</a>
										</li>
									</ul>
								</li>
								<li class="nav-links nav-links02 grid__item large--one-quarter">
									<ul>
										<li class="list-title">2nd Collections</li>
										<li class="list-unstyled nav-sub-mega">
										<a href="collection.html">Camera - Camcorder</a>
										</li>
										<li class="list-unstyled nav-sub-mega">
										<a href="collection.html">Accessories</a>
										</li>
										<li class="list-unstyled nav-sub-mega">
										<a href="collection.html">Kids &amp; Baby</a>
										</li>
										<li class="list-unstyled nav-sub-mega">
										<a href="collection.html">Toy and Gift</a>
										</li>
										<li class="list-unstyled nav-sub-mega">
										<a href="collection.html">Stationery</a>
										</li>
									</ul>
								</li>
								<li class="nav-links nav-links03 grid__item large--one-quarter">
									<ul>
										<li class="list-title">Pages</li>
										<li class="list-unstyled nav-sub-mega">
										<a href="collection.html">All Collections</a>
										</li>
										<li class="list-unstyled nav-sub-mega">
										<a href="product.php">All Products</a>
										</li>
										<li class="list-unstyled nav-sub-mega">
										<a href="about-us.html">About us</a>
										</li>
										<li class="list-unstyled nav-sub-mega">
										<a href="contact-us.html">Contact us</a>
										</li>
										<li class="list-unstyled nav-sub-mega">
										<a href="wishlist.html">Wishlist</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<a href="todays-deals.html" class="site-nav__link">
								<span>Today's Deals</span>
								<span class="special_label sale_label">Sale</span>
							</a>
						</li>
						<li>
							<a href="blog.html" class="site-nav__link">
								<span>Blog</span>
							</a>
						</li>
						<li>
							<a href="lookbook.html" class="site-nav__link">
								<span>Lookbook</span>
								<span class="special_label new_label">New</span>
							</a>
						</li>
					</ul>
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
    
		<main class="main-content">
			<div class="breadcrumb-wrapper">
				<nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
					<a href="index.html" title="Back to the frontpage">Home</a>
					<span aria-hidden="true">&rsaquo;</span>
					<span>Collection Page</span>
				</nav>
				<h1 class="section-header__title">Collection Page</h1>
			</div>
			<div class="wrapper">
				<div id="filter-loading" style="display:none">
					<img src="assets/images/gears.svg" alt="filter loading">
				</div>
				<div class="grid--rev" id="collection">
					<div class="grid__item large--three-quarters">
						<header class="section-header section-grid">
							<div class="section-header__right section-sorting">
								<div class="form-horizontal">
									<label for="SortBy">Sort by</label>
									<select name="SortBy" id="SortBy">
										<option value="manual">Featured</option>
										<option value="best-selling">Best Selling</option>
										<option value="title-ascending">Alphabetically, A-Z</option>
										<option value="title-descending">Alphabetically, Z-A</option>
										<option value="price-ascending">Price, low to high</option>
										<option value="price-descending">Price, high to low</option>
										<option value="created-descending">Date, new to old</option>
										<option value="created-ascending">Date, old to new</option>
									</select>
								</div>
								<div class="collection-view">
									<button type="button" title="Grid view" class="grid-button change-view change-view--active" data-view="grid">
									<span class="icon-fallback-text">
									<span class="icon icon-grid-view" aria-hidden="true"></span>
									<span class="fallback-text">Grid view</span>
									</span>
									</button>
									<button type="button" title="List view" class="list-button change-view " data-view="list">
									<span class="icon-fallback-text">
									<span class="icon icon-list-view" aria-hidden="true"></span>
									<span class="fallback-text">List view</span>
									</span>
									</button>
								</div>
							</div>
						</header>
						<div class="grid-uniform grid-uniform-category ">

											<?php 
											if($result->num_rows>0){
											
												for ($i=0; $i <count($ar) ; $i++) { 
												
												
												
										print '<div class="grid__item large--one-quarter medium--one-half">
												<div class="grid__item_wrapper">
													<div class="grid__image product-image">
														<a href="product.php?categoria='.$categoria.'&id='.$i.'">
															<img src="'.$ar[$i]["imagen"].'" alt="Demo Product Sample">
														</a>
														<div class="quickview">
															<div class="product-ajax-cart hidden-xs hidden-sm">
																<div data-handle="consequuntur-magni-dolores" class="quick_shop-div">
																	<a href="#quick-shop-modal" class="btn quick_shop">
																		<i class="fa fa-eye" title="Quick View"></i>																
																	</a>
																</div>
															</div>
														</div>
													</div>
													<div class="rating-star">
														<span class="spr-badge" id="spr_badge_3008529987" data-rating="0.0">
															<span class="spr-starrating spr-badge-starrating">
																<i class="spr-icon spr-icon-star-empty" style=""></i>
																<i class="spr-icon spr-icon-star-empty" style=""></i>
																<i class="spr-icon spr-icon-star-empty" style=""></i>
																<i class="spr-icon spr-icon-star-empty" style=""></i>
																<i class="spr-icon spr-icon-star-empty" style=""></i>
															</span>
															<span class="spr-badge-caption">No reviews </span>
														</span>
													</div>
													<p class="h6 product-title">
														<a id="nombre_producto" href="product.php?categoria='.$categoria.'&id='.$i.'">'.$ar[$i]["nombre"].'</a>
													</p>
													<p class="product-price">
														<strong>On Sale</strong>
														<span class="money" data-currency-usd="$19.99">$19.99</span>
														<span class="visually-hidden">Regular price</span>
														<s><span class="money" data-currency-usd="$24.99">$24.99</span></s>
													</p>
													<div class="list-mode-description">
														Quisque vel enim quis purus ultrices consequat, sed tincidunt massa blandit ipsum interdum tristique cras dictum, lacus eu molestie elementum nulla est auctor. Etiam dan lorem quis ligula elementum porttitor quisem. Duis eget purus urna fusce sed scelerisque ante. Lorem ipsum dolor sit amet consectetur...
													</div>
													<ul class="action-button">
														<li class="add-to-cart-form">
															<form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">							
																<div class="effect-ajax-cart">
																	<input type="hidden" name="quantity" value="1">
																	<button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now">
																		<span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Cotizar </span>
																	</button>
																</div>
															</form>
														</li>
														<li class="wishlist">
															<a class="wish-list btn" href="wish-list.html"><i class="fa fa-heart" title="Wishlist"></i></a>
														</li>
														<li class="email">
															<a target="_blank" class="btn email-to-friend" href="#"><i class="fa fa-envelope" title="Email to friend"></i></a>
														</li>
													</ul>
												</div>
											</div> ';}}?>
									
						</div>
					</div>
					<div class="grid__item large--one-quarter">
						<div class="group_sidebar">
							<div class="sb-wrapper all-collections-wrapper clearfix" data-animate="" data-delay="0">
								<h6 class="sb-title">All Categories</h6>
								<ul class="list-unstyled sb-content all-collections list-styled">
									
									<?php 
									if($listacategorias2->num_rows>0){
										while($row2=$listacategorias2->fetch_assoc()){
									print '<li>
									<a href="collection.php?categoria='.$row2["nombre"].'"><span><i class="fa fa-angle-right"></i> '.$row2["nombre"].'</span><span class="collection-count"></span></a>
									</li>';
									}}?>
								</ul>
							</div>
							<div class="sb-wrapper shop-by" data-animate="" data-delay="0">
								<h6 class="sb-title">Shop By</h6>
								<div class="shop-by-content" id="tags-filter-content">
									<div class="filter-tag-group">	
										<div class="tag-group" id="coll-filter-4">
											<p class="title cfc4" data-toggle="collapse" data-target="#cfc4">
												Color<span class="ficon"><i class="fa fa-minus"></i></span>
											</p>
											<ul id="cfc4" class="collapse in color_filter">
												<li class="swatch-tag "><span style="background-color: red; background-image: url('assets/images/red.png');"><a href="collection.html"></a></span></li>
												<li class="swatch-tag "><span style="background-color: blue; background-image: url('assets/images/blue.png');"><a href="collection.html"></a></span></li>
												<li class="swatch-tag white-color"><span style="background-color: white; background-image: url('assets/images/white.png');"><a href="collection.html"></a></span></li>
												<li class="swatch-tag "><span style="background-color: blue; background-image: url('assets/images/blue.png');"><a href="collection.html"></a></span></li>
												<li class="swatch-tag "><span style="background-color: yellow; background-image: url('assets/images/yellow.png');"><a href="collection.html"></a></span></li>
											</ul>
										</div>									
										<div class="tag-group" id="coll-filter-1">
											<p class="title cfc1" data-toggle="collapse" data-target="#cfc1">
												Price<span class="ficon"><i class="fa fa-minus"></i></span>
											</p>
											<ul id="cfc1" class="collapse in">
												<li><a href="collection.html"><span class="fe-checkbox"></span> Under 100</a></li>
												<li><a href="collection.html"><span class="fe-checkbox"></span> 100 - 200</a></li>
												<li><a href="collection.html"><span class="fe-checkbox"></span> 200 - 300</a></li>
												<li><a href="collection.html"><span class="fe-checkbox"></span> 300 - 400</a></li>
												<li><a href="collection.html"><span class="fe-checkbox"></span> 400 - 500</a></li>
											</ul>
										</div>										
										<div class="tag-group" id="coll-filter-2">
											<p class="title cfc2" data-toggle="collapse" data-target="#cfc2">
												Brands<span class="ficon"><i class="fa fa-minus"></i></span>
											</p>
											<ul id="cfc2" class="collapse in">
												<li><a href="collection.html"><span class="fe-checkbox"></span> Omega</a></li>
												<li><a href="collection.html"><span class="fe-checkbox"></span> Gucci</a></li>
												<li><a href="collection.html"><span class="fe-checkbox"></span> Tissot</a></li>
												<li><a href="collection.html"><span class="fe-checkbox"></span> Hamilton</a></li>
												<li><a href="collection.html"><span class="fe-checkbox"></span> BB</a></li>
											</ul>
										</div>										
										<div class="tag-group" id="coll-filter-3">
											<p class="title cfc3" data-toggle="collapse" data-target="#cfc3">
												Type<span class="ficon"><i class="fa fa-minus"></i></span>
											</p>
											<ul id="cfc3" class="collapse in">
												<li><a href="collection.html"><span class="fe-checkbox"></span> Skin Care</a></li>
												<li><a href="collection.html"><span class="fe-checkbox"></span> Mackup</a></li>
												<li><a href="collection.html"><span class="fe-checkbox"></span> Body Care</a></li>
												<li><a href="collection.html"><span class="fe-checkbox"></span> Hair Care</a></li>
												<li><a href="collection.html"><span class="fe-checkbox"></span> Perfumes</a></li>
											</ul>
										</div>										
									</div>	
									<script>
										$(function () {
										  $("#cfc1").on("hide.bs.collapse", function(){
											$(".cfc1 span").html('<i class="fa fa-plus"></i>');
										  });
										  $("#cfc1").on("show.bs.collapse", function(){
											$(".cfc1 span").html('<i class="fa fa-minus"></i>');
										  });
										  $("#cfc2").on("hide.bs.collapse", function(){
											$(".cfc2 span").html('<i class="fa fa-plus"></i>');
										  });
										  $("#cfc2").on("show.bs.collapse", function(){
											$(".cfc2 span").html('<i class="fa fa-minus"></i>');
										  });
										  $("#cfc3").on("hide.bs.collapse", function(){
											$(".cfc3 span").html('<i class="fa fa-plus"></i>');
										  });
										  $("#cfc3").on("show.bs.collapse", function(){
											$(".cfc3 span").html('<i class="fa fa-minus"></i>');
										  });
										  $("#cfc4").on("hide.bs.collapse", function(){
											$(".cfc4 span").html('<i class="fa fa-plus"></i>');
										  });
										  $("#cfc4").on("show.bs.collapse", function(){
											$(".cfc4 span").html('<i class="fa fa-minus"></i>');
										  }); 
										  
										  $(".tag-group .title").click(function(){
											$(this).toggleClass("open");
										  });
										});
									  </script>									
								</div>
							</div>
							<div class="sb-wrapper featured-product-wrapper clearfix" data-animate="" data-delay="0">
								<div class="featured-product">
									<h6 class="sb-title">Weekly Top Sellers</h6>
									<div class="sb-content featured-product-content">
										<div class="element full_width" data-animate="fadeInUp" data-delay="0">
											<div class="grid__item large--one-quarter medium--one-half">
												<div class="grid__item_wrapper">
													<div class="grid__image product-image">
														<a href="product.php" class="grid__image product-image">
														<img src="assets/images/demo1_qs1_100x100.jpg" alt="Consequuntur magni dolores">
														</a>
														<div class="quickview">
															<div class="product-ajax-cart hidden-xs hidden-sm">
																<div data-handle="consequuntur-magni-dolores" class="quick_shop-div">
																	<a href="#quick-shop-modal" class="btn quick_shop">
																	<i class="fa fa-eye" title="Quick View"></i>																	
																	</a>
																</div>
															</div>
														</div>
													</div>
													<div class="rating-star">
														<span class="spr-badge" id="spr_badge_3008529987" data-rating="4.0">
														<span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span>
														<span class="spr-badge-caption">
														1 review </span>
														</span>
													</div>
													<p class="h6 product-title">
														<a href="product.php">Demo Product Sample</a>
													</p>
													<p class="product-price">
														<strong>On Sale</strong>
														<span class="money" data-currency-usd="$19.99">$19.99</span>
														<span class="visually-hidden">Regular price</span>
														<s><span class="money" data-currency-usd="$24.99">$24.99</span></s>
													</p>
													<div class="list-mode-description">
														 Quisque vel enim quis purus ultrices consequat, sed tincidunt massa blandit ipsum interdum tristique cras dictum, lacus eu molestie elementum nulla est auctor. Etiam dan lorem quis ligula elementum porttitor quisem. Duis eget purus urna fusce sed scelerisque ante. Lorem ipsum dolor sit amet consectetur...
													</div>
													<ul class="action-button">
														<li class="add-to-cart-form">
														<form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">			
															<div class="effect-ajax-cart">
																<input type="hidden" name="quantity" value="1">
																<button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now"><span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Buy Now</span></button>
															</div>
														</form>
														</li>
														<li class="wishlist">
														<a class="wish-list btn" href="wish-list.html"><i class="fa fa-heart" title="Wishlist"></i></a>
														</li>
														<li class="email">
														<a target="_blank" class="btn email-to-friend" href="#"><i class="fa fa-envelope" title="Email to friend"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="element full_width" data-animate="fadeInUp" data-delay="100">
											<div class="grid__item large--one-quarter medium--one-half">
												<div class="grid__item_wrapper">
													<div class="grid__image product-image">
														<a href="product.php" class="grid__image product-image">
														<img src="assets/images/demo1_qs2_100x100.jpg" alt="Corporis suscipit laboriosam">
														</a>
														<div class="quickview">
															<div class="product-ajax-cart hidden-xs hidden-sm">
																<div data-handle="corporis-suscipit-laboriosam" class="quick_shop-div">
																	<a href="#quick-shop-modal" class="btn quick_shop">
																	<i class="fa fa-eye" title="Quick View"></i>
																	
																	</a>
																</div>
															</div>
														</div>
													</div>
													<div class="rating-star">
														<span class="spr-badge" id="spr_badge_3008529923" data-rating="0.0">
														<span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span>
														<span class="spr-badge-caption">
														No reviews </span>
														</span>
													</div>
													<p class="h6 product-title">
														<a href="product.php">Demo Product Sample</a>
													</p>
													<p class="product-price">
														<span class="money" data-currency-usd="$89.00">$89.00</span>
													</p>
													<div class="list-mode-description">
														 Quisque vel enim quis purus ultrices consequat, sed tincidunt massa blandit ipsum interdum tristique cras dictum, lacus eu molestie elementum nulla est auctor. Etiam dan lorem quis ligula elementum porttitor quisem. Duis eget purus urna fusce sed scelerisque ante. Lorem ipsum dolor sit amet consectetur...
													</div>
													<ul class="action-button">
														<li class="add-to-cart-form">
														<form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">
															<div class="effect-ajax-cart">
																<input type="hidden" name="quantity" value="1">
																<button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now"><span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Buy Now</span></button>
															</div>
														</form>
														</li>
														<li class="wishlist">
														<a class="wish-list btn" href="wish-list.html"><i class="fa fa-heart" title="Wishlist"></i></a>
														</li>
														<li class="email">
														<a target="_blank" class="btn email-to-friend" href="#"><i class="fa fa-envelope" title="Email to friend"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="element full_width" data-animate="fadeInUp" data-delay="200">
											<div class="grid__item large--one-quarter medium--one-half">
												<div class="grid__item_wrapper">
													<div class="grid__image product-image">
														<a href="product.php" class="grid__image product-image">
														<img src="assets/images/demo1_qs3_100x100.jpg" alt="Cras in nunc ipsum">
														</a>
														<div class="quickview">
															<div class="product-ajax-cart hidden-xs hidden-sm">
																<div data-handle="cras-in-nunc-non-ipsum-duo-cursus-ultrices" class="quick_shop-div">
																	<a href="#quick-shop-modal" class="btn quick_shop">
																	<i class="fa fa-eye" title="Quick View"></i>																	
																	</a>
																</div>
															</div>
														</div>
													</div>
													<div class="rating-star">
														<span class="spr-badge" id="spr_badge_3008529731" data-rating="5.0">
														<span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span>
														<span class="spr-badge-caption">
														1 review </span>
														</span>
													</div>
													<p class="h6 product-title">
														<a href="http://demo.tadathemes.com/products/cras-in-nunc-non-ipsum-duo-cursus-ultrices">Demo Product Sample</a>
													</p>
													<p class="product-price">
														<strong>On Sale</strong> from <span class="money" data-currency-usd="$19.99">$19.99</span>
														<span class="visually-hidden">Regular price</span>
														<s><span class="money" data-currency-usd="$24.99">$24.99</span></s>
													</p>
													<div class="list-mode-description">
														 Quisque vel enim quis purus ultrices consequat, sed tincidunt massa blandit ipsum interdum tristique cras dictum, lacus eu molestie elementum nulla est auctor. Etiam dan lorem quis ligula elementum porttitor quisem. Duis eget purus urna fusce sed scelerisque ante. Lorem ipsum dolor sit amet consectetur...
													</div>
													<ul class="action-button">
														<li class="add-to-cart-form">
														<form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">
															<div class="effect-ajax-cart">
																<input type="hidden" name="quantity" value="1">
																<button class="btn btn-1 select-option" type="button" title="Select Options"><i class="fa fa-bars"></i> Options</button>
															</div>
														</form>
														</li>
														<li class="wishlist">
														<a class="wish-list btn" href="wish-list.html"><i class="fa fa-heart" title="Wishlist"></i></a>
														</li>
														<li class="email">
														<a target="_blank" class="btn email-to-friend" href="#"><i class="fa fa-envelope" title="Email to friend"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="sb-wrapper slider-banner-wrapper clearfix" data-animate="" data-delay="0">
								<img src="assets/images/sb-banner.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<footer class="site-footer">       
			<div class="grid__item footer_newsletter">
				<div class="wrapper">
					<h3><i class="fa fa-envelope"></i> Make sure you don't miss interesting happenings by joining our newsletter program</h3>
					<form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" class="input-group">
						<input type="email" value="" placeholder="Enter your email here ..." name="EMAIL" id="mail" class="input-group-field" aria-label="email@example.com">
						<span class="input-group-btn">
						<input type="submit" class="btn" name="subscribe" id="subscribe" value="subscribe">
						</span>
					</form>
				</div>
			</div>
			<div class="grid__item footer_information">
				<div class="wrapper">
					<div class="grid-uniform">
						<div class="fi-about-block grid__item one-quarter small--one-whole medium--one-whole">
							<div class="fi-title">
								About us
							</div>
							<div class="fi-content">
								<ul class="group_information">
									<li><i class="fa fa-map-marker"></i> 474 Ontario St Toronto, ON M4X 1M7 Canada</li>
									<li><i class="fa fa-phone"></i> (+1234)56789xxx</li>
									<li><i class="fa fa-envelope"></i> tadathemes@gmail.com</li>
								</ul>
							</div>
							<div class="fi-content inline-list social-icons">
								<a href="index.html" title="Twitter" class="icon-social twitter" data-toggle="tooltip" data-placement="top"><i class="fa fa-twitter-square"></i></a>
								<a href="index.html" title="Facebook" class="icon-social facebook" data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook-square"></i></a>
								<a href="index.html" title="Google+" class="icon-social google" data-toggle="tooltip" data-placement="top"><i class="fa fa-google-plus-square"></i></a>
								<a href="index.html" title="Pinterest" class="icon-social pinterest" data-toggle="tooltip" data-placement="top"><i class="fa fa-pinterest-square"></i></a>
								<a href="index.html" title="Youtube" class="icon-social youtube" data-toggle="tooltip" data-placement="top"><i class="fa fa-youtube-square"></i></a>
								<a href="index.html" title="Vimeo" class="icon-social vimeo" data-toggle="tooltip" data-placement="top"><i class="fa fa-vimeo-square"></i></a>
							</div>
						</div>
						<div class="fi-links grid__item one-quarter small--one-whole medium--one-whole">
							<div class="fi-title">
								Information
							</div>
							<div class="fi-content">
								<ul class="grid__item one-half">
									<li>
										<a href="about-us.html"><span>About us</span></a>
									</li>
									<li>
										<a href="#"><span>Shipping &amp; Returns</span></a>
									</li>
									<li>
										<a href="#"><span>Privacy</span></a>
									</li>
									<li>
										<a href="#"><span>Conditions</span></a>
									</li>
									<li>
										<a href="#"><span>Online support</span></a>
									</li>
								</ul>
								<ul class="grid__item one-half">
									<li>
										<a href="account.html"><span>My Account</span></a>
									</li>
									<li>
									<a href="#"><span>Order History</span></a>
									</li>
									<li>
									<a href="#"><span>Help &amp; FAQs</span></a>
									</li>
									<li>
									<a href="contact.html"><span>Contact us</span></a>
									</li>
									<li>
									<a href="#"><span>Manufacturers</span></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="fi-tags grid__item one-quarter small--one-whole medium--one-whole">
							<div class="fi-title">
								Product Tags
							</div>
							<div class="fi-content">
								<ul>
									<li><a href="#">100 - 200</a></li>
									<li><a href="#">200 - 300</a></li>
									<li><a href="#">300 - 400</a></li>
									<li><a href="#">400 - 500</a></li>
									<li><a href="#">BB</a></li>
									<li><a href="#">Blue</a></li>
									<li><a href="#">Body Care</a></li>
									<li><a href="#">Gucci</a></li>
									<li><a href="#">Hair Care</a></li>
									<li><a href="#">Hamilton</a></li>
									<li><a href="#">Mackup</a></li>
									<li><a href="#">Omega</a></li>
									<li><a href="#">Perfumes</a></li>
									<li><a href="#">Red</a></li>
									<li><a href="#">Skin Care</a></li>
									<li><a thref="#">Tissot</a></li>
									<li><a href="#">Under 100</a></li>
									<li><a href="#">White</a></li>
									<li><a href="#">Yellow</a></li>
									<li><a href="#">abc</a></li>
									<li><a href="#">bootstrap</a></li>
									<li><a href="#">cell phone</a></li>
								</ul>
							</div>
						</div>
						<div class="fi-block grid__item one-quarter small--one-whole medium--one-whole">
							<div class="fi-title">
								Recent Post
							</div>
							<ul class="fi-content post-element">
								<li>
								<div class="post-title">
									<a href="article.html">Quisque porta felis est ut malesuada lorem dignissim</a>
								</div>
								<div class="post-author">
									by <span class="author">Tada Theme</span>
								</div>
								</li>
								<li>
								<div class="post-title">
									<a href="article.html">Section 1.10.33 of de Finibus Bonorum et Malorum, written by Cicero in 45 BC</a>
								</div>
								<div class="post-author">
									by <span class="author">Tada Theme</span>
								</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			<div class="grid__item footer_product_categories">
				<div class="wrapper">
					<div class="fi-title">
						Product Categories
					</div>
					<div class="fi-content">
						<ul class="product_categories_list">
							<li class="pc-items">
							<a href="collection.html">Beauty &amp; Health</a>
							</li>
							<li class="pc-items">
							<a href="collection.html">Book</a>
							</li>
							<li class="pc-items">
							<a href="collection.html">Camera - Camcorder</a>
							</li>
							<li class="pc-items">
							<a href="collection.html">Clothing</a>
							</li>
							<li class="pc-items">
							<a href="collection.html">Home Appliances</a>
							</li>
							<li class="pc-items">
							<a href="collection.html">Homelife</a>
							</li>
							<li class="pc-items">
							<a href="collection.html">Kids &amp; Baby</a>
							</li>
							<li class="pc-items">
							<a href="collection.html">Smartphones &amp; Cell Phones</a>
							</li>
							<li class="pc-items">
							<a href="collection.html">Sport &amp; Outdoor</a>
							</li>
							<li class="pc-items">
							<a href="collection.html">Stationery</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="grid__item footer_copyright">
				<div class="wrapper">
					<div class="grid">
						<div class="grid__item footer-copyright one-half small--one-whole medium--one-whole small--text-center">
							<p>
								© 2015 Home Market Red. All rights Reserved
							</p>
						</div>
						<div class="grid__item footer-payment one-half small--one-whole medium--one-whole small--text-center">
							<div id="widget-payment">
								<ul id="payments" class="list-inline animated">
									<li class="tada" data-toggle="tooltip" data-placement="top" title="Visa"><a href="index.html" class="icons visa"><i class="fa fa-cc-visa"></i></a></li>
									<li class="tada" data-toggle="tooltip" data-placement="top" title="Mastercard"><a href="index.html" class="icons mastercard"><i class="fa fa-cc-mastercard"></i></a></li>
									<li class="tada" data-toggle="tooltip" data-placement="top" title="American Express"><a href="index.html" class="icons amex"><i class="fa fa-cc-amex"></i></a></li>
									<li class="tada" data-toggle="tooltip" data-placement="top" title="Paypal"><a href="index.html" class="icons paypal"><i class="fa fa-cc-paypal"></i></a></li>
									<li class="tada" data-toggle="tooltip" data-placement="top" title="Google Wallet"><a href="index.html" class="icons gw"><i class="fa fa-google-wallet"></i></a></li>
									<li class="tada" data-toggle="tooltip" data-placement="top" title="Discover"><a href="index.html" class="icons dsc"><i class="fa fa-cc-discover"></i></a></li>
									<li class="tada" data-toggle="tooltip" data-placement="top" title="Diners Club"><a href="index.html" class="icons dc"><i class="fa fa-cc-diners-club"></i></a></li>
									<li class="tada" data-toggle="tooltip" data-placement="top" title="JCB"><a href="index.html" class="icons jcb"><i class="fa fa-cc-jcb"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			
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
  
	<div id="quick-shop-modal" class="modal quick-shop" style="display:none;">
		<div class="modal-dialog fadeIn">
			<div class="modal-content">
				<div class="modal-body">
					<div class="quick-shop-modal-bg">
					</div>
					<div class="grid__item one-half qs-product-image">
						<div id="quick-shop-image" class="product-image-wrapper">
							<div id="featuted-image" class="main-image featured">
								<img class="img-zoom img-responsive image-fly" src="assets/images/demo1_qs_480x480.jpg" data-zoom-image="assets/images/demo1_qs_480x480.jpg" alt="">
							</div>
							<div id="gallery_main_qs" class="product-image-thumb scroll scroll-mini">
								<div class="qs-vertical-slider product-single__thumbnails">
										<a class="image-thumb active thumb__element"><img src="assets/images/demo1_qs1_100x100.jpg" alt="" /></a>
										<a class="image-thumb thumb__element"><img src="assets/images/demo1_qs2_100x100.jpg" alt="" /></a>
										<a class="image-thumb thumb__element"><img src="assets/images/demo1_qs3_100x100.jpg" alt="" /></a>
										<a class="image-thumb thumb__element"><img src="assets/images/demo1_qs4_100x100.jpg" alt="" /></a>
										<a class="image-thumb thumb__element"><img src="assets/images/demo1_qs5_100x100.jpg" alt="" /></a>										
								</div>
							</div>
							<div class="vertical-slider product-single__thumbnails" style="opacity: 0;">
							</div>
						</div>
					</div>
					<div class="grid__item one-half qs-product-information">
						<div id="quick-shop-container">
							<h3 id="quick-shop-title"><a href="product.php">Corporis suscipit laboriosam</a></h3>
							<div class="rating-star">
								<span class="shopify-product-reviews-badge" data-id="3008529923"></span>
							</div>
							<div class="description">
								<div id="quick-shop-description" class="text-left">
									<p>
										Quisque vel enim quis purus ultrices consequat, sed tincidunt massa blandit ipsum interdum tristique cras dictum, lacus eu molestie elementum nulla est auctor. Etiam dan lorem quis ligula elementum porttitor quisem. Duis eget purus urna fusce sed scelerisque ante. Lorem ipsum dolor sit amet conse...
									</p>
								</div>
							</div>
							<form action="#" method="post" class="variants" id="AddToCartForm" enctype="multipart/form-data">
								<div id="quick-shop-price-container" class="detail-price">
									<span class="price"><span class="money">$89.00</span></span>
								</div>
								<div class="quantity-wrapper clearfix">
									<label class="wrapper-title">Quantity</label>
									<div class="wrapper">
										<span class="qty-down" title="Decrease" data-src="#qs-quantity">
										<i class="fa fa-minus"></i>
										</span>
										<input type="text" id="qs-quantity" size="5" class="item-quantity" name="quantity" value="1">
										<span class="qty-up" title="Increase" data-src="#qs-quantity">
										<i class="fa fa-plus"></i>
										</span>
									</div>
								</div>
								<div id="quick-shop-variants-container" class="variants-wrapper" style="display: block;">
									<div class="selector-wrapper">
										<label for="#quick-shop-variants-3008529731-option-0">Size</label>
										<select class="single-option-selector" data-option="option1" id="#quick-shop-variants-3008529731-option-0">
											<option value="XS">XS</option>
											<option value="S">S</option>
											<option value="M">M</option>
											<option value="L">L</option>
											<option value="XL">XL</option>
										</select>
									</div>
									<div class="selector-wrapper">
										<label for="#quick-shop-variants-3008529731-option-1">Color</label>
										<select class="single-option-selector" data-option="option2" id="#quick-shop-variants-3008529731-option-1">
											<option value="Black">Black</option>
											<option value="Red">Red</option>
											<option value="Green">Green</option>
											<option value="Blue">Blue</option>
											<option value="White">White</option>
										</select>
									</div>
								</div>
								<div class="others-bottom">
									<input id="AddToCart" class="btn btn-1 small add-to-cart" type="submit" name="add" value="Buy Now">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">	  
	  jQuery(document).ready(function($) {  
		if($('.quantity-wrapper').length){
		  $('.quantity-wrapper').on('click', '.qty-up', function() {
			var $this = $(this);
			var qty = $this.data('src');
			$(qty).val(parseInt($(qty).val()) + 1);
		  });
		  $('.quantity-wrapper').on('click', '.qty-down', function() {
			var $this = $(this);
			var qty = $this.data('src');
			if(parseInt($(qty).val()) > 1)
			  $(qty).val(parseInt($(qty).val()) - 1);
		  });
		}	 			 
	  });
	</script>
	
</body>