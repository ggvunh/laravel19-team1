@extends('layouts.admin.master')
@section('content')
  <section class="content">
    <div class="box">
    <div class="box-header with-border">
    <div class="detail_product">
     <h2>Product Name: <span>{{$product->name}}</span></h2>
     <h3>Category Name: <span>{{$product->category->name}}</span></h3>
     <h3>Manufacturer Name: <span>{{$product->manufacturer->name}}</span></h3>
     <h3>Avatar</h3>
     <img src="{{url('upload/'.$product->illustrative_photo)}}"" height="300" width="350" />
     <h3>Sub Images</h3>
     <ul class="sub_image">
     @foreach ($product->photos as $photo)
      <li>
       <img src="{{url('upload/'.$photo->url)}}" height="100" width="120">
      </li> 
     @endforeach
    </ul>
    <div class="h3_product">
      <h3>Description: <span>{{$product->description}}</span></h3>
      <h3>Price: <span>{{$product->unit_price}} VNĐ </span></h3>
      <h3>Quality: <span>{{$product->quality_in_store}}</span></h3>
    </div>
    </div>
    </div>
    </div>
  </section>
  @stop