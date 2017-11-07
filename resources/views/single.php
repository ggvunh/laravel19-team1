@extends('layouts.users.layout')
	@section('product')
<!-- breadcrumbs -->
<div class="container">
  <ol class="breadcrumb breadcrumb1">
    <li><a href="{{url('home')}}">Home</a></li>
    <li class="active">Single Page</li>
  </ol>
  <div class="clearfix"> </div>
</div>
<!-- //breadcrumbs -->
<!-- products -->
<div class="products">
  <div class="container">
    <div class="single-page">
      <div class="single-page-row" id="detail-21">
        <div class="col-md-6 single-top-left">
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="images/s1.jpg">
									<div class="thumb-image detail_images"> <img src="images/e13.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li>
								<li data-thumb="images/s4.jpg">
									 <div class="thumb-image"> <img src="images/s2.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li>
								<li data-thumb="images/s5.jpg">
								   <div class="thumb-image"> <img src="images/s3.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 single-top-right">
						<h3 class="item_name">Macbook</h3>
						</div>
						<div class="single-price">
							<ul>
								<li>$540</li>
								<li><span class="w3off">NEW</span></li>
							</ul>
						</div>
						<p class="single-price-text">Fusce a egestas nibh, eget ornare erat. Proin placerat, urna et consequat efficitur, </p>
						<form action="#" method="post">
							<input type="hidden" name="cmd" value="_cart" />
							<input type="hidden" name="add" value="1" />
							<input type="hidden" name="w3ls_item" value="Snow Blower" />
							<input type="hidden" name="amount" value="540.00" />
							<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
				   <div class="clearfix"> </div>
				</div>
				<div class="single-page-icons social-icons">
					<ul>
						<li><h4>Share on</h4></li>
						<li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
						<li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
						<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
						<li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
						<li><a href="#" class="fa fa-rss icon rss"> </a></li>
					</ul>
				</div>
			</div>
			<!-- recommendations -->
			<div class="recommend">
				<h3 class="w3ls-title">Our Recommendations </h3>
				<script>
					$(document).ready(function() {
						$("#owl-demo5").owlCarousel({

						  autoPlay: 3000, //Set AutoPlay to 3 seconds

						  items :4,
						  itemsDesktop : [640,5],
						  itemsDesktopSmall : [414,4],
						  navigation : true

						});

					});
				</script>
			</div>
			<!-- //recommendations -->
		</div>
	</div>
	<!--//products-->
  @endsection
