@extends('layouts.users.layout')

@section('content')
	<div class="products">
        <div class="container">
            <!--test-->
            <div class="col-md-3 rsidebar">
                <div >
                    <div class="slider-row" style="margin-top: 30px;">
                                   
                        <div class="row row1 scroll-pane">
                            <h2 style="margin-bottom: 20px;">Filter by price</h2>
                             
                            <select name="pricesearch" form="pricesearch" class="form-control">
                                <option value="1"><i></i>Under 50$</option>
                                <option value="2"><i></i>50$-150$</option>
                                <option value="3"><i></i>150$-300$</option>
                                <option value="4"><i></i>300$-500$</option>
                                <option value="5"><i></i>Over 500$</option>
                            </select> 
                            <br>
                            <form id="pricesearch" class="pull-left" action="{{url('/pricesearch')}}" method="get">
                                <input type="submit" class="btn btn-primary" value="Search by price">
                            </form>
                        </div> 
                    </div>
                    
                    <div class="sidebar-row">

                    </div>
                </div>
            </div>
            <!--end-->
            <div class="col-md-9 product-w3ls-right">
                @foreach ($products as $product)
                <div class="col-md-3 product-grids">
                    <div class="agile-products">
                        <div class="new-tag"><h6>{{$product->status}}</h6></div>
                            <a href="{{url('products/' . $product->id)}}"><img src="
                               {{$product->illustrative_photo}}" class="img-fixed" alt="img" width="139.75" height="167.69">
                           </a>
                        <div class="agile-product-text">
                            <h5><a href="single.html">{{$product->name}}</a></h5>
                            <h6>${{$product->unit_price}}</h6>

                            <a href="javascript:void(0)"  class="btn btn-primary add-to-cart add_product" onclick="addCart({{$product->id}})" style="margin-top:10px;">
                                 <span class="glyphicon glyphicon-shopping-cart"></span> Add to cart
                            </a>

                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection