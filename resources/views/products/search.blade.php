@extends('layouts.users.layout')
@section('content')

    <div class="products">
        <div class="container">
            <div class="col-md-12 product-w3ls-right">

                <div class="product-top">
                    <h4>Search with keyword "{{$request->key}}"</h4>
                    <div class="clearfix"> </div>
                </div>
            </div>

        </div>
        <div class="products-row">
            @foreach ($products as $product)
                <div class="col-md-3 product-grids">
                    <div class="agile-products">
                        <div class="new-tag"><h6>{{$product->status}}</h6></div>
                            <a href="{{url('products/' . $product->id)}}"><img src="
                               {{$product->illustrative_photo}}" class="img-fixed" alt="img" width="211" height="242">
                           </a>
                        <div class="agile-product-text">
                            <h5><a href="single.html">{{$product->name}}</a></h5>
                            <h6>${{$product->unit_price}}</h6>
                            <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" />
                                <input type="hidden" name="w3ls_item" value="{{$product->name}}" />
                                <input type="hidden" name="amount" value="100.00" />
                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                            </form>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            @endforeach
        </div>
        <div class="clearfix"> </div>
    </div>
    {!! $products->links() !!}
@endsection
