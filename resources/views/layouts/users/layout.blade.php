<!DOCTYPE html>
<html lang="en">
<head>
<title>Tech Shop an E-commerce Online Shopping Category </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" /><!-- animation -->
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script><!-- fixed nav js -->
<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

        $('.header-two').scrollToFixed();
        // previous summary up the page.

        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: $('.header-two').outerHeight(true) + 10,
                zIndex: 999
            });
        });
    });
</script>
<!-- //js -->
<!-- web-fonts -->
<link href="https://fonts.googleapis.com/css?family=Arimo|Roboto+Condensed|Tinos" rel="stylesheet" type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
<!-- web-fonts -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {

			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			};

			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
</head>
<body>
	<!-- header -->
	<div class="header">
		<div class="w3ls-header"><!--header-one-->
			<div class="w3ls-header-left">
				<p><a href="#">UPTO $50 OFF ON LAPTOPS | USE COUPON CODE LAPPY </a></p>
			</div>
			<div class="w3ls-header-right">
				<ul>
					<li class="dropdown head-dpdn">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> My Account<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="login.html">Login </a></li>
							<li><a href="signup.html">Sign Up</a></li>
							<li><a href="login.html">My Orders</a></li>
							<li><a href="login.html">Wallet</a></li>
						</ul>
					</li>
					<li class="dropdown head-dpdn">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-percent" aria-hidden="true"></i> Today's Deals<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="offers.html">Cash Back Offers</a></li>
							<li><a href="offers.html">Product Discounts</a></li>
							<li><a href="offers.html">Special Offers</a></li>
						</ul>
					</li>
					<li class="dropdown head-dpdn">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gift" aria-hidden="true"></i> Gift Cards<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="offers.html">Product Gift card</a></li>
							<li><a href="offers.html">Occasions Register</a></li>
							<li><a href="offers.html">View Balance</a></li>
						</ul>
					</li>
					<li class="dropdown head-dpdn">
						<a href="contact.html" class="dropdown-toggle"><i class="fa fa-map-marker" aria-hidden="true"></i> Store Finder</a>
					</li>
					<li class="dropdown head-dpdn">
						<a href="card.html" class="dropdown-toggle"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> Credit Card</a>
					</li>
					<li class="dropdown head-dpdn">
						<a href="help.html" class="dropdown-toggle"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="header-two"><!-- header-two -->
			<div class="container">
				<div class="header-logo">
					<h1><a href="index.html"><span>T</span>ech <i>Shop</i></a></h1>
					<h6>Your stores. Your place.</h6>
				</div>
				<div class="header-search">
					<form action="#" method="post">
						<input type="search" name="Search" placeholder="Search for a Product..." required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true"> </i>
						</button>
					</form>
				</div>
				<div class="header-cart">
					<div class="my-account">
						<a href="contact.html"><i class="fa fa-map-marker" aria-hidden="true"></i> CONTACT US</a>
					</div>
					<div class="cart">
						<form action="#" method="post" class="last">
							<input type="hidden" name="cmd" value="_cart" />
							<input type="hidden" name="display" value="1" />
							<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div><!-- //header-two -->
		<div class="header-three"><!-- header-three -->
			<div class="container">
				<div class="menu">
					<div class="cd-dropdown-wrapper">
						<a class="cd-dropdown-trigger" href="#0">Store Categories</a>
						<nav class="cd-dropdown">
							<a href="#0" class="cd-close">Close</a>
							<ul class="cd-dropdown-content">
								<li><a href="offers.html">Today's Offers</a></li>
								<li class="has-children">
									<a href="#">Mobile phones</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products.html">All mobile phone</a></li>
										<li class="has-children">
											<a href="#">Company</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All mobile phone store</a></li>
												<li class=""><a href="#0">Iphone (Apple)</a></li>
												<li> <a href="products.html">Samsung</a> </li>
												<li><a href="products.html">OPPO</a></li>
												<li><a href="products.html">Sony</a></li>
												<li><a href="products.html">Nokia</a></li>
												<li><a href="products.html">HTC</a></li>
												<li><a href="products.html">ASUS</a></li>
												<li><a href="products.html">Xiaomi</a></li>
												<li><a href="products.html">Huawei</a></li>
												<li><a href="products.html">Mobiistar</a></li>
												<li><a href="products.html">Mobell</a></li>
												<li><a href="products.html">Phillips</a></li>
                                                <li><a href="products.html">Nokia</a></li>
												<li><a href="products.html">Itel</a></li>
												<li><a href="products.html">Others</a></li>
											</ul>
										</li>


						            </ul> <!-- .cd-secondary-dropdown -->
						    	</li> <!-- .has-children -->
								<li class="has-children">
									<a href="#">Tablets</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products1.html">All Tablet Stores</a></li>
										<li class="has-children">
											<a href="#">Company</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All Tablets</a></li>
												<li><a href="products1.html">Ipad (Apple) </a></li>
												<li><a href="products1.html">Samsung</a></li>
												<li><a href="products1.html">Asus </a></li>
												<li><a href="products1.html">Acer </a></li>
												<li><a href="products1.html">Huawei</a></li>
												<li><a href="products1.html">Itel</a></li>
												<li><a href="products1.html">Lenovo</a></li>
												<li><a href="products1.html">Mobell</a></li>
												<li><a href="products1.html">Blackberry</a></li>
												<li><a href="products1.html">Hãng khác</a></li>
											</ul>
										</li>

									</ul> <!-- .cd-secondary-dropdown -->
								</li> <!-- .has-children -->
								<li class="has-children">
									<a href="products2.html">Laptop</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products2.html">All laptops</a></li>
										<li class="has-children">
											<a href="products2.html">Company</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All laptops</a></li>
                                                <li class="has-children">
													<a href="#0">Apple (Macbook)</a>
													<ul class="is-hidden">
														<li class="go-back"><a href="#"> </a></li>
														<li><a href="products2.html">Macbook Pro</a></li>
														<li><a href="products2.html">Macbook Retina</a></li>
														<li><a href="products2.html">Macbook Air</a></li>
													</ul>
												</li>
												<li><a href="products2.html">Asus </a></li>
												<li><a href="products2.html">Dell </a></li>
												<li><a href="products2.html">Acer</a></li>
												<li><a href="products2.html">Lenovo</a></li>
												<li><a href="products2.html">HP</a></li>
												<li><a href="products2.html">MSI</a></li>
												<li><a href="products2.html">LG</a></li>
												<li><a href="products2.html">Hãng khác</a></li>
											</ul>
										</li>
						              </ul><!-- .cd-secondary-dropdown -->
							     </li> <!-- .has-children -->
								<li class="has-children">
									<a href="#">Desktop</a>
									<ul class="cd-secondary-dropdown is-hidden">
                                        <li class="has-children">
											<a href="products2.html">Company</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All desktops</a></li>
                                                <li class="has-children">
													<a href="#0">Apple</a>
													<ul class="is-hidden">
														<li class="go-back"><a href="#"> </a></li>
														<li><a href="products3.html">Imac</a></li>
														<li><a href="products3.html">Mac Pro</a></li>
														<li><a href="products3.html">Mac mini</a></li>
													</ul>
												</li>
												<li><a href="products3.html">Asus </a></li>
												<li><a href="products3.html">Dell </a></li>
												<li><a href="products3.html">Acer</a></li>
												<li><a href="products3.html">HP</a></li>
												<li><a href="products3.html">Others</a></li>
											</ul>
										</li>
									</ul><!-- .cd-secondary-dropdown -->
								</li> <!-- .has-children -->
								<li class="has-children">
									<a href="#">Linh kiện & Phụ kiện</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products4.html">Tất cả phụ kiện</a></li>
										<li class="has-children">
											<a href="#">Linh kiện máy tính</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products4.html">Monitor</a></li>
												<li><a href="products4.html">USB</a></li>
												<li><a href="products4.html">Mouse</a></li>
												<li><a href="products4.html">Keyboard</a></li>
												<li><a href="products4.html">Cable</a></li>
											</ul>
										</li>
                                        <li class="has-children">
											<a href="#">Phụ kiện điện thoại</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products4.html">Reserve Battery</a></li>
												<li><a href="products4.html">Headphone & Earphone</a></li>
												<li><a href="products4.html">Case</a></li>
												<li><a href="products4.html">Memory Card</a></li>
												<li><a href="products4.html">Others</a></li>
											</ul>
										</li>
									</ul><!-- .cd-secondary-dropdown -->
								</li> <!-- .has-children -->

								<li><a href="sitemap.html">Full Site Directory </a></li>
							</ul> <!-- .cd-dropdown-content -->
						</nav> <!-- .cd-dropdown -->
					</div> <!-- .cd-dropdown-wrapper -->
				</div>
				<div class="move-text">
					<div class="marquee"><a href="offers.html"> New collections are available here...... <span>Get extra 10% off on everything | no extra taxes </span> <span> Try shipping pass free for 15 days with unlimited</span></a></div>
					<script type="text/javascript" src="js/jquery.marquee.min.js"></script>
					<script>
					  $('.marquee').marquee({ pauseOnHover: true });
					  //@ sourceURL=pen.js
					</script>
				</div>
			</div>
		</div>
        @yield('header')
	</div>
	<!-- //header -->
    <div class="container">
            @yield('content')
    </div>
    <!-- footer-top -->
	<div class="w3agile-ftr-top">
		<div class="container">
			<div class="ftr-toprow">
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div>
					<div class="ftr-top-right">
						<h4>FREE SHIPPING</h4>
						<p>Shipping after 30 minutes with Da Nang's customer, 2-5 days with customer in others. </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-user" aria-hidden="true"></i>
					</div>
					<div class="ftr-top-right">
						<h4>CUSTOMER CARE</h4>
						<p>24/24 online advisory staff.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
					</div>
					<div class="ftr-top-right">
						<h4>GOOD QUALITY</h4>
						<p>Brand new products. </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
    @yield('footer_top')
	</div>
	<!-- //footer-top -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-info w3-agileits-info">
				<div class="col-md-4 address-left agileinfo">
					<div class="footer-logo header-logo">
						<h2><a href="index.html"><span>T</span>ech <i>Shop</i></a></h2>
						<h6>Your stores. Your place.</h6>
					</div>
					<ul>
						<li><i class="fa fa-map-marker"></i> 92 Quang Trung, Đà Nẵng</li>
						<li><i class="fa fa-mobile"></i> 333 222 3333 </li>
						<li><i class="fa fa-phone"></i> +222 11 4444 </li>
						<li><i class="fa fa-envelope-o"></i> <a href="mailto:example@mail.com"> mail@example.com</a></li>
					</ul>
				</div>
				<div class="col-md-8 address-right">
					<div class="col-md-4 footer-grids">
						<h3>Company</h3>
						<ul>
							<li><a href="about.html">About Us</a></li>
							<li><a href="marketplace.html">Marketplace</a></li>
							<li><a href="values.html">Core Values</a></li>
							<li><a href="privacy.html">Privacy Policy</a></li>
						</ul>
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Services</h3>
						<ul>
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="login.html">Returns</a></li>
							<li><a href="faq.html">FAQ</a></li>
							<li><a href="sitemap.html">Site Map</a></li>
							<li><a href="login.html">Order Status</a></li>
						</ul>
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Payment Methods</h3>
						<ul>
							<li><i class="fa fa-laptop" aria-hidden="true"></i> Net Banking</li>
							<li><i class="fa fa-money" aria-hidden="true"></i> Cash On Delivery</li>
							<li><i class="fa fa-pie-chart" aria-hidden="true"></i>EMI Conversion</li>
							<li><i class="fa fa-gift" aria-hidden="true"></i> E-Gift Voucher</li>
							<li><i class="fa fa-credit-card" aria-hidden="true"></i> Debit/Credit Card</li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<div class="copy-right">
		<div class="container">
			<p>© 2016 Tech Shop . All rights reserved | Design by <a href="#">Team 1</a></p>
		</div>
        @yield('footer')
	</div>
	<!-- cart-js -->
    <div>
    	<script src="js/minicart.js"></script>
    	<script>
            w3ls.render();

            w3ls.cart.on('w3sb_checkout', function (evt) {
            	var items, len, i;

            	if (this.subtotal() > 0) {
            		items = this.items();

            		for (i = 0, len = items.length; i < len; i++) {
            			items[i].set('shipping', 0);
            			items[i].set('shipping2', 0);
            		}
            	}
            });
        </script>
    	<!-- //cart-js -->
    	<!-- menu js aim -->
    	<script src="js/jquery.menu-aim.js"> </script>
    	<script src="js/main.js"></script> <!-- Resource jQuery -->
    	<!-- //menu js aim -->
    	<!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/bootstrap.js"></script>
        @yield('js')
    </div>
