<!DOCTYPE html>
<html lang="en">
<head>
	@yield('head')
	<title>Tech Shop an E-commerce Online Shopping Category </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
			function hideURLbar(){ window.scrollTo(0,1); } </script>

	<!-- Custom Theme files -->
	<link href="{{url('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{url('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{url('css/animate.min.css')}}" rel="stylesheet" type="text/css" media="all" /><!-- animation -->
	<link href="{{url('css/ken-burns.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{url('css/menu.css')}}" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->
	<!-- //Custom Theme files -->
	<!-- font-awesome icons -->
	<link href="{{url('css/font-awesome.css')}}" rel="stylesheet">
	<!-- //font-awesome icons -->
	<!-- js -->
	<script src="{{url('js/jquery-2.2.3.min.js')}}"></script>
	<script src="{{url('js/jquery-scrolltofixed-min.js')}}" type="text/javascript"></script><!-- fixed nav js -->
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
	<script type="text/javascript" src="{{url('js/move-top.js')}}"></script>
	<script type="text/javascript" src="{{url('js/easing.js')}}"></script>
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
		<link rel="stylesheet" type="text/css" href="{{url('css/layoutuser.css')}}">
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
							<li><a href="login">Login </a></li>
							<li><a href="register">Register</a></li>
							<li><a href="login">My Orders</a></li>
							<li>
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
                </form>
            </li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="header-two"><!-- header-two -->
			<div class="container">
				<div class="header-logo">
					<h1><a href="{{url('/')}}"><span>T</span>ech <i>Shop</i></a></h1>
					<h6>Your stores. Your place.</h6>
				</div>
				<div class="header-search">
					<form action="{{url('/search')}}" method="get">

						<input id="search-product" type="search" name="key" placeholder="Search for a Product..." required="" autocomplete="off">
						<ul id="search-view">
							
						</ul>
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true"> </i>
						</button>
					</form>
				</div>
				<div class="header-cart">
					<a id="cart" href="{{url('/checkout')}}" class="btn btn-primary btn-circle btn-lg" style="margin-top:5px">
						<i class="fa fa-shopping-cart"></i> Cart <span id="count" class="badge" >0</span>
					</a>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div><!-- //header-two -->
		<div class="header-three"><!-- header-three -->
			<div class="container">
				<div class="menu">
					<div class="cd-dropdown-wrapper">
						<a class="cd-dropdown-trigger" href="#0">Store</a>
						<nav class="cd-dropdown">
							<a href="#0" class="cd-close">Close</a>
							<ul class="cd-dropdown-content">
								<li class="has-children">
									<a href="products2.html">Laptop</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="product">All laptops</a></li>
										<li class="has-children">
											<a href="product">Company</a>
											<ul class="is-hidden">
												<li><a href="{{url('laptop/apple')}}">Apple (Macbook) </a></li>
												<li><a href="{{url('laptop/asus')}}">Asus </a></li>
												<li><a href="{{url('laptop/dell')}}">Dell </a></li>
											</ul>
										</li>
						         </ul><!-- .cd-secondary-dropdown -->
							     </li> <!-- .has-children -->
								<li class="has-children">
									<a href="#">Mobile phones</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products.html">All mobile phone</a></li>
										<li class="has-children">
											<a href="#">Company</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All mobile phone store</a></li>
												<li class=""><a href="{{url('phone/iphone')}}">Iphone (Apple)</a></li>
												<li> <a href="{{url('phone/samsung')}}">Samsung</a> </li>
												<li><a href="{{url('phone/oppo')}}">OPPO</a></li>
												<li><a href="{{url('phone/sony')}}">Sony</a></li>
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
							</ul> <!-- .cd-dropdown-content -->
						</nav> <!-- .cd-dropdown -->
					</div> <!-- .cd-dropdown-wrapper -->
				</div>
				<div class="move-text">
					<div class="marquee"><a href="offers.html"> New collections are available here...... <span>Get extra 10% off on everything | no extra taxes </span> <span> Try shipping pass free for 15 days with unlimited</span></a></div>
					<script type="text/javascript" src="{{url('js/jquery.marquee.min.js')}}"></script>
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
		<!-- banner -->
	<div class="banner">
		<div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
			<!-- Wrapper-for-Slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active"><!-- First-Slide -->
                    <img src="images/5.jpg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_right">
                        <h3 data-animation="animated flipInX">Flat <span>50%</span> Discount</h3>
                        <h4 data-animation="animated flipInX">Hot Offer Today Only</h4>
                    </div>
                </div>
                <div class="item"> <!-- Second-Slide -->
                    <img src="images/8.jpeg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_right">
                        <h3 data-animation="animated fadeInDown">Our Latest Fashion Editorials</h3>
                        <h4 data-animation="animated fadeInUp">cupidatat non proident</h4>
                    </div>
                </div>
                <div class="item"><!-- Third-Slide -->
                    <img src="images/3.jpg" alt="" class="img-responsive"/>
                    <div class="carousel-caption kb_caption kb_caption_center">
                        <h3 data-animation="animated fadeInLeft">End Of Season Sale</h3>
                        <h4 data-animation="animated flipInX">cupidatat non proident</h4>
                    </div>
                </div>
            </div>
            <!-- Left-Button -->
            <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
				<span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <!-- Right-Button -->
            <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
                <span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
		<script src="{{url('js/custom.js')}}"></script>
	</div>
	<!-- //banner -->
	<div>
	@yield('product')
	</div>
	<!-- deals -->
	<div class="deals">
		<div class="container">
			<h3 class="w3ls-title">DEALS OF THE DAY </h3>
			<div class="deals-row">
				<div class="col-md-3 focus-grid">
					<a href="{{url('phone')}}" class="wthree-btn">
						<div class="focus-image"><i class="fa fa-mobile"></i></div>
						<h4 class="clrchg">Mobiles</h4>
					</a>
				</div>
				<div class="col-md-3 focus-grid">
					<a href="{{url('laptop')}}" class="wthree-btn wthree1">
						<div class="focus-image"><i class="fa fa-laptop"></i></div>
						<h4 class="clrchg"> Electronics & Appliances</h4>
					</a>
				</div>
				<div class="col-md-3 focus-grid">
					<a href="products4.html" class="wthree-btn wthree2">
						<div class="focus-image"><i class="fa fa-wheelchair"></i></div>
						<h4 class="clrchg">Furnitures</h4>
					</a>
				</div>
				<div class="col-md-3 focus-grid">
					<a href="products3.html" class="wthree-btn wthree3">
						<div class="focus-image"><i class="fa fa-home"></i></div>
						<h4 class="clrchg">Home Decor</h4>
					</a>
				</div>
				<div class="col-md-2 focus-grid w3focus-grid-mdl">
					<a href="products9.html" class="wthree-btn wthree3">
						<div class="focus-image"><i class="fa fa-book"></i></div>
						<h4 class="clrchg">Books & Music</h4>
					</a>
				</div>
				<div class="col-md-2 focus-grid w3focus-grid-mdl">
					<a href="products1.html" class="wthree-btn wthree4">
						<div class="focus-image"><i class="fa fa-asterisk"></i></div>
						<h4 class="clrchg">Fashion</h4>
					</a>
				</div>
				<div class="col-md-2 focus-grid w3focus-grid-mdl">
					<a href="products2.html" class="wthree-btn wthree2">
						<div class="focus-image"><i class="fa fa-gamepad"></i></div>
						<h4 class="clrchg">Kids</h4>
					</a>
				</div>
				<div class="col-md-2 focus-grid w3focus-grid-mdl">
					<a href="products5.html" class="wthree-btn wthree">
						<div class="focus-image"><i class="fa fa-shopping-basket"></i></div>
						<h4 class="clrchg">Groceries</h4>
					</a>
				</div>
				<div class="col-md-2 focus-grid w3focus-grid-mdl">
					<a href="products7.html" class="wthree-btn wthree5">
						<div class="focus-image"><i class="fa fa-medkit"></i></div>
						<h4 class="clrchg">Health</h4>
					</a>
				</div>
				<div class="col-md-2 focus-grid w3focus-grid-mdl">
					<a href="products8.html" class="wthree-btn wthree1">
						<div class="focus-image"><i class="fa fa-car"></i></div>
						<h4 class="clrchg">Automotive</h4>
					</a>
				</div>
				<div class="col-md-3 focus-grid">
					<a href="products5.html" class="wthree-btn wthree2">
						<div class="focus-image"><i class="fa fa-cutlery"></i></div>
						<h4 class="clrchg">Food</h4>
					</a>
				</div>
				<div class="col-md-3 focus-grid">
					<a href="products4.html" class="wthree-btn wthree5">
						<div class="focus-image"><i class="fa fa-futbol-o"></i></div>
						<h4 class="clrchg">Sports</h4>
					</a>
				</div>
				<div class="col-md-3 focus-grid">
					<a href="products2.html" class="wthree-btn wthree3">
						<div class="focus-image"><i class="fa fa-gamepad"></i></div>
						<h4 class="clrchg">Games & Toys</h4>
					</a>
				</div>
				<div class="col-md-3 focus-grid">
					<a href="products6.html" class="wthree-btn ">
						<div class="focus-image"><i class="fa fa-gift"></i></div>
						<h4 class="clrchg">Gifts</h4>
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //deals -->
	<!-- coming soon -->
<div class="soon">
	<div class="container">
		<h3>Mega Deal Of the Week</h3>
		<h4>Coming Soon Don't Miss Out</h4>
		<div id="countdown1" class="ClassyCountdownDemo"></div>
	</div>
</div>
<!-- //coming soon -->
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

    <div>
		<!-- cart-js -->
    	<script type="text/javascript">

		function addCart(id)
		{
			var root = '{{url('/carts')}}';
			$.get(root + '/' + id + '/' + 'add', function(data, status){
				console.log(data);
			  $('#count').replaceWith('<span class="badge" id="count">' + data.count +'</span>');
			});
        }
		</script>
    	<!-- //cart-js -->
    	<!-- menu js aim -->
    	<script src="{{url('js/jquery.menu-aim.js')}}"> </script>
    	<script src="{{url('js/main.js')}}"></script> <!-- Resource jQuery -->
    	<!-- //menu js aim -->
    	<!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="{{url('js/bootstrap.js')}}"></script>
        @yield('js')
    </div>
		<!-- countdown.js -->
		<div>
	<script src="{{url('js/jquery.knob.js')}}"></script>
	<script src="{{url('js/jquery.throttle.js')}}"></script>
	<script src="{{url('js/jquery.classycountdown.js')}}"></script>
			<script>
				$(document).ready(function() {
					$('#search-product').keyup(function(){
						var	name=$(this).val();
						 $.ajax({
					      url:"{{url('searchproduct')}}",
					      type:"post",
					      data:{name:name,_token:"{{ csrf_token() }}"},
					      success: function(products,status){
					      	$("ul").empty();
					      	 $.each(products,function(key, product){
					      	 var unit_price=number_format( product.unit_price, 0, ',', '.');
					      	 	$("#search-view").append(
	
					    			"<li>"+
											'<div class="row">'+
					            '<a href=products/'+product.id+'>'+
					            	'<div class="col-xs-1">'+
					                    '<img src=upload/'+product.illustrative_photo+'>'+
					              '</div>'+
					              '<div class="col-xs-5"> '+     
					               ' <h4>'+product.name+'</h4>'+
                              '<span class="price" >'+unit_price+'₫</span>'+
					                    '<cite style="font-style: normal; text-decoration: line-through"></cite>'+
					               '</div>'+     
					            "</a>"+
					          	"</div>"+
			        			"</li>"
					    			)
					      	 });
					      }
					    })
					});

					$('#countdown1').ClassyCountdown({
						end: '1388268325',
						now: '1387999995',
						labels: true,
						style: {
							element: "",
							textResponsive: .5,
							days: {
								gauge: {
									thickness: .10,
									bgColor: "rgba(0,0,0,0)",
									fgColor: "#1abc9c",
									lineCap: 'round'
								},
								textCSS: 'font-weight:300; color:#fff;'
							},
							hours: {
								gauge: {
									thickness: .10,
									bgColor: "rgba(0,0,0,0)",
									fgColor: "#05BEF6",
									lineCap: 'round'
								},
								textCSS: ' font-weight:300; color:#fff;'
							},
							minutes: {
								gauge: {
									thickness: .10,
									bgColor: "rgba(0,0,0,0)",
									fgColor: "#8e44ad",
									lineCap: 'round'
								},
								textCSS: ' font-weight:300; color:#fff;'
							},
							seconds: {
								gauge: {
									thickness: .10,
									bgColor: "rgba(0,0,0,0)",
									fgColor: "#f39c12",
									lineCap: 'round'
								},
								textCSS: ' font-weight:300; color:#fff;'
							}

						},
						onEndCallback: function() {
							console.log("Time out!");
						}
					});
				});
				function number_format( number, decimals, dec_point, thousands_sep ) {	 
					var n = number, c = isNaN(decimals = Math.abs(decimals)) ? 2 : decimals;
					var d = dec_point == undefined ? "," : dec_point;
					var t = thousands_sep == undefined ? "." : thousands_sep, s = n < 0 ? "-" : "";
					var i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;
											 
					return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
				}
			</script>
	</div>
	<!-- //countdown.js -->
