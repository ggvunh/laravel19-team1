@extends('layouts.users.layout')

@section('content')

    <div class="products">
        <div class="container">
            <!--test-->
            <!--end-->
            <div class="col-md-12 product-w3ls-right">
                @foreach ($products as $product)
                <div class="col-md-3 product-grids">
                    <div class="agile-products">
                        <div class="new-tag"><h6>{{$product->status}}</h6></div>
                            <a href="{{url('products/' . $product->id)}}"><img src="
                               {{url('upload/'.$product->illustrative_photo)}}" class="img-fixed" alt="img" width="139.75" height="167.69">
                           </a>
                        <div class="agile-product-text">
                            <h5><a href="single.html">{{$product->name}}</a></h5>
                            <h6>{{number_format( $product->unit_price, 0, ',', '.').'VNĐ'}}</h6>

                            <a href="javascript:void(0)"  class="btn btn-primary add-to-cart add_product" onclick="addCart({{$product->id}})" style="margin-top:10px;">
                                 <span class="glyphicon glyphicon-shopping-cart"></span> Add to cart
                            </a>

                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                @endforeach
                <br>
                <div class="text-center">{{$products->links()}}</div>
            </div>
        </div>
    </div>



@endsection
