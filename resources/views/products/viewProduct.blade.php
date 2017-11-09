@extends('layouts.users.layout')
@section('content')
<!-- products -->
<div class="products">
    <div class="container">
        <div class="single-page">
            <div class="single-page-row" id="detail-21">
                <div class="col-md-6 single-top-left">
                    <img src="{{url('upload/'.$product->illustrative_photo)}}" alt="{{url($product->name)}}" width="400"/>
                </div>
                <div class="col-md-6 single-top-right">
                    <h3 class="item_name"><b>{{$product->name}}</b></h3>
                    <p>Processing Time: Item will be shipped out within 2-3 working days. </p>
                    <div class="single-rating">
                        <ul>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            <li class="rating">20 reviews</li>
                            <li><a href="#">Add your review</a></li>
                        </ul>
                    </div>
                    <p class="single-price-text">
                        <h4 style="margin-bottom:10px;"><b>Description</b></h4>
                        @php 
                          $description = str_replace("\r\n", "<br/>", $product->description);
                        @endphp
                        {!!$description!!}
                    </p>
                    <div class="single-price">
                        <ul>
                            <li>{{number_format( $product->unit_price, 0, ',', '.').'VNĐ'}}</li>
                            <li>Ends on: June,5th</li>
                            <li><a href="#"><i class="fa fa-gift" aria-hidden="true"></i> Coupon</a></li>
                        </ul>
                    </div>
                    <a href="{{url('/carts/'.$product->id.'/add2')}}" class="btn btn-primary" >
                         <span class="glyphicon glyphicon-shopping-cart"></span> Add to cart
                    </a>
                    <button class="btn btn-danger" ><i class="fa fa-heart-o" aria-hidden="true"></i> Add to Wishlist</button>
                </div>
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
        <div class="container">
            <div class="single-page">
                <h3 style="margin-bottom:20px;"><b>Specification</b></h3>
                <table>
                    <table>
                        <tr>
                            <th><h4><b>Attributes</b></h4></th>
                            <th><h4><b>Parameters</b></h4></th>
                        </tr>
                        @foreach ($specifications as $specification)
                        <tr>
                            <td><b>{{$specification->key}}</b></td>
                            <td>{{$specification->value}}</td>
                        </tr>
                        @endforeach
                </table>

            </div>
        </div>
    </div>
</div>
<!--//products-->
@endsection
