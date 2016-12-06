<?php 

include_once("proyecto_catalogo/collectionLogic.php");

?>
<!DOCTYPE html>
<html class="supports-js supports-no-touch supports-csstransforms supports-csstransforms3d supports-fontface">

<!-- Mirrored from demo.tadathemes.com/HTML_Homemarket/demo/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Nov 2016 17:20:13 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>Product Detail Page - Home Market Red</title>
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
	<link href="assets/css/social-buttons.scss.css" rel="stylesheet" type="text/css" media="all">
	<!-- JS ================================================== -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>	
	<script src="assets/js/jquery.fancybox.min.js" type="text/javascript"></script>
	<script src="assets/js/owl.carousel.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.tweet.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.optionSelect.js" type="text/javascript"></script>
	<script src="assets/js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.easytabs.min.js" type="text/javascript"></script>
	<script type="text/javascript">
	var arrayJS=<?php echo json_encode($ar);?>;
	for (var i = 0; i < arrayJS.length; i++) {
		console.log("<br>"+arrayJS[0]["nombre"]);
	};
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
										<option value="all">All Collections</option>
										<option value="beauty-health">Beauty &amp; Health</option>
										<option value="book">Book</option>
										<option value="camera">Camera - Camcorder</option>
										<option value="clothing">Clothing</option>
										<option value="appliances">Home Appliances</option>
										<option value="homelife">Homelife</option>
										<option value="kids-baby">Kids &amp; Baby</option>
										<option value="smartphones">Smartphones &amp; Cell Phones</option>
										<option value="sport">Sport &amp; Outdoor</option>
										<option value="stationery">Stationery</option>
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
								<li>
								<a href="collection.html" class="site-nav__link">Health &amp; Beatuty</a>
								</li>
								<li>
								<a href="collection.html" class="site-nav__link">Homelife</a>
								</li>
								<li>
								<a href="collection.html" class="site-nav__link">Home Appliances</a>
								</li>
								<li>
								<a href="collection.html" class="site-nav__link">Smartphones &amp; Cell Phones</a>
								</li>
								<li>
								<a href="collection.html" class="site-nav__link">Camera - Camcorder</a>
								</li>
								<li>
								<a href="collection.html" class="site-nav__link">Accessories</a>
								</li>
								<li>
								<a href="collection.html" class="site-nav__link">Kids &amp; Baby</a>
								</li>
								<li>
								<a href="collection.html" class="site-nav__link">Toy and Gift</a>
								</li>
								<li>
								<a href="collection.html" class="site-nav__link">Stationery</a>
								</li>
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
										<a href="product.html">All Products</a>
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
					<span>Products Detail Page</span>
				</nav>
				<h1 class="section-header__title">Products Detail Page</h1>
			</div>
			<div class="wrapper">
				<div class="grid--rev">
					<div class="grid__item">
						<div itemscope="" itemtype="http://schema.org/Product">
							<div class="product-single">
								<div class="grid__item large--one-half text-center">
									<div class="product-single__photos" id="ProductPhoto">
									<img src="" alt="Corporis suscipit laboriosam" id="ProductPhotoImg" data-image-id="7500291971">
									<script type="text/javascript">
									document.getElementById("ProductPhotoImg").src='data:image/jpg;base64,'+arrayJS["0"]["imagen"];
									document.getElementById("labeldescripcion").innerHTML=''+arrayJS["0"]["descripcion"];
									document.getElementById("labelcolores").innerHTML=''+arrayJS["0"]["colores"];
									document.getElementById("labeltecnica").innerHTML=''+arrayJS["0"]["tecnicamarca"];
									document.getElementById("labelnombre").innerHTML=''+arrayJS["0"]["nombre"];
									document.getElementById("labelMedidas").innerHTML=''+arrayJS["0"]["medidas"];
									document.getElementById("labelPrecio").innerHTML=''+arrayJS["0"]["precio"];
									</script>	
									<!--  print '<img src="data:image/jpg;base64,'.$ar["0"]["imagen"].'" alt="Corporis suscipit laboriosam" id="ProductPhotoImg" data-image-id="7500291971">'-->
									</div>
									<ul class="product-single__thumbnails grid-uniform" id="ProductThumbs">
									<?php
									if($result->num_rows>0){
										//$contador=0;
										for ($i=0; $i < count($ar) ; $i++) { 																		
											
									?>	
									
										<li class="thumb__element">
											<?php print '<a id="'.$i.'" nombre="" href="data:image/jpg;base64,'.$ar[$i]["imagen"].'" onclick="return mostrarDescripcion(this.id);" class="product-single__thumbnail">';
												  print'<img src="data:image/jpg;base64,'.$ar[$i]["imagen"].'" alt="Corporis suscipit laboriosam">';
												  print	'</a>';
												  ?>
												 <script> 
												 	function mostrarDescripcion(clicked_id){
												 	
												 		var posicion=clicked_id;
												 		document.getElementById('labeldescripcion').innerHTML=""+arrayJS[clicked_id]["descripcion"];
												 		document.getElementById('labelcolores').innerHTML=""+arrayJS[clicked_id]["colores"];
												 		document.getElementById('labeltecnica').innerHTML=""+arrayJS[clicked_id]["tecnicamarca"];
												 		document.getElementById('labelnombre').innerHTML=""+arrayJS[clicked_id]["nombre"];
												 		document.getElementById('labelMedidas').innerHTML=""+arrayJS[clicked_id]["medidas"];
												 		document.getElementById('labelPrecio').innerHTML=""+arrayJS[clicked_id]["precio"];
												 	}
													 function sumar () {
													        document.getElementById("cantidad").value++;
													    }
													 function restar () {
													      if(document.getElementById("cantidad").value>0){
													           document.getElementById("cantidad").value--;
													       }else{
													           document.getElementById("cantidad").value=0;
													       }
    }
												 </script> 

												 
										</li>



									<?php 
										}}
								
									?>
									 </ul>
								</div>
								<div class="grid__item large--one-half">
									<div class="product-info-left grid__item five-eighths">
										<h1 itemprop="name">Elementos escogidos</h1>
										<div class="rating-star">
											<span class="spr-badge" id="spr_badge_3008529923" data-rating="0.0">
											<span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span>
											<span class="spr-badge-caption">
											No reviews </span>
											</span>
										</div>
										<div class="product-description" itemprop="description">
											<h2><label id="labelnombre" ></label></h2>
											<label id="labeldescripcion"></label> 
										</div>
										<div class="product-vendor">
											Colores: <b><label id="labelcolores"></label></b>
										</div>
										<div class="product-type">
											Técnica de Marca: <b><label id="labeltecnica"></label></b>
										</div>
										<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
											<meta itemprop="priceCurrency" content="USD">
											<link itemprop="availability" href="http://schema.org/InStock">
											<div class="product-action ">
												<form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">
													<div class="selector-wrapper">
													Medidas:	<h6><label id="labelMedidas" for="productSelect-option-0"></label></h6>
													</div>
													
													
													<hr>
													<span class="visually-hidden">Regular price</span>
													<span id="ProductPrice" class="" itemprop="price"><span class="money" data-currency-usd="$89.00 USD" data-currency="USD">Precio: <label id="labelPrecio"></label></span></span>
													<div class="qty_select">
														<label for="Quantity" class="quantity-selector">Quantity</label>
														<div class="js-qty">
															<button type="button" onclick='return restar();' class="js-qty__adjust js-qty__adjust--minus icon-fallback-text" data-id="" data-qty="0">
															<span class="icon icon-minus" aria-hidden="true"></span>
															<span class="fallback-text">−</span>
															</button>
															<input id="cantidad" type="text" class="js-qty__num" value="1" min="1" data-id="" aria-label="quantity" pattern="[0-9]*" name="quantity" id="Quantity">
															<button onclick='return sumar();' type="button" class="js-qty__adjust js-qty__adjust--plus icon-fallback-text" data-id="" data-qty="11">
															<span class="icon icon-plus" aria-hidden="true"></span>
															<span class="fallback-text">+</span>
															</button>
														</div>
													</div>
													<button type="submit" name="add" id="AddToCart" class="btn">
													<span id="AddToCartText">Buy Now</span>
													</button>
												</form>
												<div class="add-to-wishlist">
													<span class="non-user" data-toggle="tooltip" data-placement="right" title="To use the Wish-list, you must Login or Register"><a href="http://demo.tadathemes.com/account/login"><i class="fa fa-heart"></i>Add to Wishlist</a></span>
												</div>
											</div>
										</div>
										<div class="detail-social">
											<div class="social-sharing">
												<a target="_blank" href="#" class="share-facebook">
												<span class="icon icon-facebook" aria-hidden="true"></span>
												<span class="share-title">Share</span>
												<span class="share-count">0</span>
												</a>
												<a target="_blank" href="#" class="share-twitter">
												<span class="icon icon-twitter" aria-hidden="true"></span>
												<span class="share-title">Tweet</span>
												<span class="share-count">0</span>
												</a>
												<a target="_blank" href="#" class="share-pinterest">
												<span class="icon icon-pinterest" aria-hidden="true"></span>
												<span class="share-title">Pin it</span>
												<span class="share-count">0</span>
												</a>
												<a target="_blank" href="#" class="share-fancy">
												<span class="icon icon-fancy" aria-hidden="true"></span>
												<span class="share-title">Fancy</span>
												</a>
												<a target="_blank" href="#" class="share-google">
												<!-- Cannot get Google+ share count with JS yet -->
												<span class="icon icon-google" aria-hidden="true"></span>
												<span class="share-count">+1</span>
												</a>
												<a target="_blank" href="#" class="share-email">
												<i class="fa fa-envelope"></i>
												</a>
											</div>
										</div>
									</div>
									<div class="grid__item product-info-right three-eighths">
										<div class="product-extrainfo">
											<ul>
												<li><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-shield fa-stack-1x fa-inverse"></i></span><span class="detail_more_info">guarantee<span class="sub">Quality checked</span></span></li>
												<li><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-truck fa-stack-1x fa-inverse"></i></span><span class="detail_more_info">Free Shipping<span class="sub">Free on all products</span></span></li>
												<li><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-gift fa-stack-1x fa-inverse"></i></span><span class="detail_more_info">Special gift cards<span class="sub">Special gift cards</span></span></li>
												<li><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-reply fa-stack-1x fa-inverse"></i></span><span class="detail_more_info">Free return<span class="sub"> Within 7 days</span></span></li>
												<li><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-tty fa-stack-1x fa-inverse"></i></span><span class="detail_more_info">Consultancy<span class="sub">Lifetime 24/7/356</span></span></li>
											</ul>
										</div>
									</div>
									<div class="next-prev-button">
									</div>
								</div>
							</div>
							<div class="product-information">
								<div id="tabs-information">
									<ul class="nav nav-tabs tabs-left sideways">
										<li class="description"><a href="#desc" data-toggle="tab" class="active">Description</a></li>
										<li class="warranty"><a href="#size" data-toggle="tab">Warranty</a></li>
										<li class="delivery"><a href="#delivery" data-toggle="tab">Delivery</a></li>
										<li class="payment"><a href="#payment" data-toggle="tab">Payment</a></li>
										<li class="reviews"><a href="#customerreview" data-toggle="tab">Customer Review</a></li>
									</ul>
									<div class="tab-panel active" id="desc">
										<p>
											Quisque vel enim quis purus ultrices consequat, sed tincidunt massa blandit ipsum interdum tristique cras dictum, lacus eu molestie elementum nulla est auctor. Etiam dan lorem quis ligula elementum porttitor quisem. Duis eget purus urna fusce sed scelerisque ante. Lorem ipsum dolor sit amet consectetur adipiscing elitos.X
										</p>
									</div>
									<div class="tab-panel fade " id="size">
										<h2>Warranty Information</h2>
										<p>
											LIMITED WARRANTIES<br>
											Limited Warranties are non-transferable. The following Limited Warranties are given to the original retail purchaser of the following Ashley Furniture Industries, Inc.Products:
										</p>
										<p>
											Frames Used In Upholstered and Leather Products<br>
											Limited Lifetime Warranty<br>
											 A Limited Lifetime Warranty applies to all frames used in sofas, couches, love seats, upholstered chairs, ottomans, sectionals, and sleepers. Ashley Furniture Industries,Inc. warrants these components to you, the original retail purchaser, to be free from material manufacturing defects.
										</p>
									</div>
									<div class="tab-panel fade " id="delivery">
										<h2>Purchasing &amp; Delivery</h2>
										 Before you make your purchase, it’s helpful to know the measurements of the area you plan to place the furniture. You should also measure any doorways and hallways through which the furniture will pass to get to its final destination.<br>
										<h5>Picking up at the store</h5>
										 Shopify Shop requires that all products are properly inspected BEFORE you take it home to insure there are no surprises. Our team is happy to open all packages and will assist in the inspection process. We will then reseal packages for safe transport. We encourage all customers to bring furniture pads or blankets to protect the items during transport as well as rope or tie downs. Shopify Shop will not be responsible for damage that occurs after leaving the store or during transit. It is the purchaser’s responsibility to make sure the correct items are picked up and in good condition.<br>
										<h5>Delivery</h5>
										 Customers are able to pick the next available delivery day that best fits their schedule. However, to route stops as efficiently as possible, Shopify Shop will provide the time frame. Customers will not be able to choose a time. You will be notified in advance of your scheduled time frame. Please make sure that a responsible adult (18 years or older) will be home at that time. <br>
										 In preparation for your delivery, please remove existing furniture, pictures, mirrors, accessories, etc. to prevent damages. Also insure that the area where you would like your furniture placed is clear of any old furniture and any other items that may obstruct the passageway of the delivery team. Shopify Shop will deliver, assemble, and set-up your new furniture purchase and remove all packing materials from your home. Our delivery crews are not permitted to move your existing furniture or other household items. Delivery personnel will attempt to deliver the purchased items in a safe and controlled manner but will not attempt to place furniture if they feel it will result in damage to the product or your home. Delivery personnel are unable to remove doors, hoist furniture or carry furniture up more than 3 flights of stairs. An elevator must be available for deliveries to the 4th floor and above.
									</div>
									<div class="tab-panel fade " id="payment">
										<h2>Payment Information</h2>
										<p>
											Dust or wipe clean with a cloth dampened with water once a week. Be sure not to leave water spots on the surface. These water spots will dry and could possibly leave permanent marks.
										</p>
										<p>
											Clean stains/spots using the following steps: Dampen a soft cloth with a mixture of hot water and liquid dishwashing detergent. Wring the cloth as much as possible to remove excess liquid. Rub the surface lightly in a circular motion. Dry the surface immediately with a clean, soft towel.
										</p>
									</div>
									<div class="tab-panel fade " id="customerreview">
										<div id="shopify-product-reviews" data-id="3008529923">
											<div class="spr-container">
												<div class="spr-header">
													<h2 class="spr-header-title">Customer Reviews</h2>
													<div class="spr-summary" itemscope="" itemtype="http://data-vocabulary.org/Review-aggregate">
														<meta itemprop="itemreviewed" content="Corporis suscipit laboriosam">
														<meta itemprop="votes" content="0">
														<span itemprop="rating" itemscope="" itemtype="http://data-vocabulary.org/Rating" class="spr-starrating spr-summary-starrating">
														<meta itemprop="average" content="0.0">
														<meta itemprop="best" content="5">
														<meta itemprop="worst" content="1">
														<i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i>
														</span>
														<span class="spr-summary-caption">
														No reviews yet </span>
														<span class="spr-summary-actions">
														<a href="#" class="spr-summary-actions-newreview" onclick="SPR.toggleForm(3008529923);return false">Write a review</a>
														</span>
													</div>
												</div>
												<div class="spr-content">
													<div class="spr-form" id="form_3008529923" style="">
														<form method="post" action="#" id="new-review-form_3008529923" class="new-review-form" onsubmit="SPR.submitForm(this);return false;">
															<input type="hidden" name="review[rating]"><input type="hidden" name="product_id" value="3008529923">
															<h3 class="spr-form-title">Write a review</h3>
															<fieldset class="spr-form-contact">
																<div class="spr-form-contact-name">
																	<label class="spr-form-label" for="review_author_3008529923">Name</label>
																	<input class="spr-form-input spr-form-input-text " id="review_author_3008529923" type="text" name="review[author]" value="" placeholder="Enter your name">
																</div>
																<div class="spr-form-contact-email">
																	<label class="spr-form-label" for="review_email_3008529923">Email</label>
																	<input class="spr-form-input spr-form-input-email " id="review_email_3008529923" type="email" name="review[email]" value="" placeholder="john.smith@example.com">
																</div>
															</fieldset>
															<fieldset class="spr-form-review">
																<div class="spr-form-review-rating">
																	<label class="spr-form-label" for="review[rating]">Rating</label>
																	<div class="spr-form-input spr-starrating ">
																		<a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="1">&nbsp;</a>
																		<a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="2">&nbsp;</a>
																		<a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="3">&nbsp;</a>
																		<a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="4">&nbsp;</a>
																		<a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="5">&nbsp;</a>
																	</div>
																</div>
																<div class="spr-form-review-title">
																	<label class="spr-form-label" for="review_title_3008529923">Review Title</label>
																	<input class="spr-form-input spr-form-input-text " id="review_title_3008529923" type="text" name="review[title]" value="" placeholder="Give your review a title">
																</div>
																<div class="spr-form-review-body">
																	<label class="spr-form-label" for="review_body_3008529923">Body of Review <span class="spr-form-review-body-charactersremaining">(1500)</span></label>
																	<div class="spr-form-input">
																		<textarea class="spr-form-input spr-form-input-textarea " id="review_body_3008529923" data-product-id="3008529923" name="review[body]" rows="10" placeholder="Write your comments here"></textarea>
																	</div>
																</div>
															</fieldset>
															<fieldset class="spr-form-actions">
																<input type="submit" class="spr-button spr-button-primary button button-primary btn btn-primary" value="Submit Review">
															</fieldset>
														</form>
													</div>
													<div class="spr-reviews" id="reviews_3008529923" style="display: none">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<script>
						$('#tabs-information').easytabs({animationSpeed: 'fast', updateHash: false});
					  </script>
								<div id="product-additional-information">
									<div class="related-products">
										<h1 class="feature-title"><span>You may also like</span></h1>
										<ul class="related-products-items grid-uniform">
											<li class="realted-element">
												<div class="grid__item">
													<div class="grid__item_wrapper">
														<div class="grid__image product-image">
															<a href="product.html">
																<img src="assets/images/demo1_product1_208x208.jpg" alt="Demo Product Sample">
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
															<a href="product.html">Demo Product Sample</a>
														</p>
														<p class="product-price">
															<strong>On Sale</strong>
															<span class="money" data-currency-usd="$19.99">$19.99</span>
															<span class="visually-hidden">Regular price</span>
															<s><span class="money" data-currency-usd="$24.99">$24.99</span></s>
														</p>
														<ul class="action-button">
															<li class="add-to-cart-form">
																<form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">							
																	<div class="effect-ajax-cart">
																		<input type="hidden" name="quantity" value="1">
																		<button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now">
																			<span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Buy Now</span>
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
												</div>
											</li>
											<li class="realted-element">
												<div class="grid__item">
													<div class="grid__item_wrapper">
														<div class="grid__image product-image">
															<a href="product.html">
																<img src="assets/images/demo1_product2_208x208.jpg" alt="Demo Product Sample">
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
															<a href="product.html">Demo Product Sample</a>
														</p>
														<p class="product-price">
															<strong>On Sale</strong>
															<span class="money" data-currency-usd="$19.99">$19.99</span>
															<span class="visually-hidden">Regular price</span>
															<s><span class="money" data-currency-usd="$24.99">$24.99</span></s>
														</p>
														<ul class="action-button">
															<li class="add-to-cart-form">
																<form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">							
																	<div class="effect-ajax-cart">
																		<input type="hidden" name="quantity" value="1">
																		<button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now">
																			<span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Buy Now</span>
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
												</div>
											</li>
											<li class="realted-element">
												<div class="grid__item">
													<div class="grid__item_wrapper">
														<div class="grid__image product-image">
															<a href="product.html">
																<img src="assets/images/demo1_product3_208x208.jpg" alt="Demo Product Sample">
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
															<a href="product.html">Demo Product Sample</a>
														</p>
														<p class="product-price">
															<strong>On Sale</strong>
															<span class="money" data-currency-usd="$19.99">$19.99</span>
															<span class="visually-hidden">Regular price</span>
															<s><span class="money" data-currency-usd="$24.99">$24.99</span></s>
														</p>
														<ul class="action-button">
															<li class="add-to-cart-form">
																<form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">							
																	<div class="effect-ajax-cart">
																		<input type="hidden" name="quantity" value="1">
																		<button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now">
																			<span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Buy Now</span>
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
												</div>
											</li>
											<li class="realted-element">
												<div class="grid__item">
													<div class="grid__item_wrapper">
														<div class="grid__image product-image">
															<a href="product.html">
																<img src="assets/images/demo1_product4_208x208.jpg" alt="Demo Product Sample">
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
															<a href="product.html">Demo Product Sample</a>
														</p>
														<p class="product-price">
															<strong>On Sale</strong>
															<span class="money" data-currency-usd="$19.99">$19.99</span>
															<span class="visually-hidden">Regular price</span>
															<s><span class="money" data-currency-usd="$24.99">$24.99</span></s>
														</p>
														<ul class="action-button">
															<li class="add-to-cart-form">
																<form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">							
																	<div class="effect-ajax-cart">
																		<input type="hidden" name="quantity" value="1">
																		<button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now">
																			<span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Buy Now</span>
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
												</div>
											</li>
											<li class="realted-element">
												<div class="grid__item">
													<div class="grid__item_wrapper">
														<div class="grid__image product-image">
															<a href="product.html">
																<img src="assets/images/demo1_product5_208x208.jpg" alt="Demo Product Sample">
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
															<a href="product.html">Demo Product Sample</a>
														</p>
														<p class="product-price">
															<strong>On Sale</strong>
															<span class="money" data-currency-usd="$19.99">$19.99</span>
															<span class="visually-hidden">Regular price</span>
															<s><span class="money" data-currency-usd="$24.99">$24.99</span></s>
														</p>
														<ul class="action-button">
															<li class="add-to-cart-form">
																<form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">							
																	<div class="effect-ajax-cart">
																		<input type="hidden" name="quantity" value="1">
																		<button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now">
																			<span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Buy Now</span>
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
												</div>
											</li>
										</ul>
									</div>
								</div>
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
							<h3 id="quick-shop-title"><a href="product.html">Corporis suscipit laboriosam</a></h3>
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