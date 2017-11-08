@extends('layouts.users.layout')
	@section('product')
  <!-- products -->
 <div class="products">
   <div class="container">
     <div class="col-md-12 product-w3ls-right">
       <!-- breadcrumbs -->
       <ol class="breadcrumb breadcrumb1">
         <li><a href="{{url('home')}}">Home</a></li>
         <li class="active">Products</li>
       </ol>
       <div class="clearfix"> </div>
       <!-- //breadcrumbs -->
       <div class="product-top">
         <h4>Electronics</h4>
         <div class="clearfix"> </div>
       </div>
       <div class="products-row">
        @foreach($products as $product)
         <div class="col-md-3 product-grids">
           <div class="agile-products">
             <div class="new-tag"><h6>New<br></h6></div>
             <a href="single.html">
              <img src="{{url('upload/'.$product->illustrative_photo)}}" height="300" class="img-responsive"  alt="img"/>
            </a>
             <div class="agile-product-text">
               <h5><a href="single.html">{{$product->name}}</a></h5>
               <h6>{{number_format( $product->unit_price, 0, ',', '.').'VNĐ'}}</h6>
               <form class="add-cart" action="#" method="post">
                 <input type="hidden" name="cmd" value="_cart" />
                 <input type="hidden" name="add" value="1" />
                 <input type="hidden" name="w3ls_item" value="Audio speaker" />
                 <input type="hidden" name="amount" value="100.00" />
                 <button type="submit" data-product="{{$product->id}}" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
               </form>
             </div>
           </div>
         </div>
        @endforeach
        <script>
            $(document).ready(function(){
              $(".add-cart").submit(function(e){
                var product_id=$(this).find('button').data('product'); 
                addCart(product_id);
                e.preventDefault();
              })

            });
        </script>
         <div class="clearfix"> </div>
       </div>
       <!-- add-products -->
       <div class="w3ls-add-grids w3agile-add-products">
         <a href="#">
           <h4>TOP 10 TRENDS FOR YOU FLAT <span>20%</span> OFF</h4>
           <h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
         </a>
       </div>
       <!-- //add-products -->
     </div>
     <div class="clearfix"> </div>
   </div>
 </div>
 <!--//products-->
@endsection
