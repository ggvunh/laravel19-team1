@php
  if(empty($image))
    $image=null;
@endphp
<div class="form-group">
  {!! Form::label('name', 'Name') !!}
  <div class="form-controls">
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
  </div>
  @if ( $errors->has('name') )
    <span class="text-warning">
        <strong> {{ $errors->first('name') }}</strong>
    </span>
  @endif
</div>
<div>
  <input type="hidden" name="productimage" value="{{$product->illustrative_photo}}">
  <input type="hidden" name="photoimages" value="{{ $product->photos}}">
</div>
<div class="form-group">
  {!! Form::label('illustrative_photo', 'Image') !!}
  <div class="form-controls">
    {!! Form::file('illustrative_photo', ['onchange'=>"loadFile(event)"]) !!}
  </div>
  <img id="output"/>
</div>
<div class="form-group">
  {!! Form::label('photos[]', 'Photos') !!}
  <div class="form-controls">
    {!! Form::file('photos[]',['multiple', 'onchange'=>"loadPhoto(event)"]) !!}
  </div>
  <ul class="sub_image" id="photo">
  </ul>
</div>
<div class="form-group h3_product" >
  {!! Form::label('category_id', 'Category Name') !!}
  <div class="form-controls">
    {!! Form::select('category_id',$categories , null, ['class' => 'form-control']) !!}
  </div>
  @if ( $errors->has('category_id') )
    <span class="text-warning">
        <strong> {{ $errors->first('category_id') }}</strong>
    </span>
  @endif
</div>
<div class="form-group">
  {!! Form::label('manufacturer_id', 'Manufacturer Name') !!}
  <div class="form-controls">
    {!! Form::select('manufacturer_id',$manufacturers , null, ['class' => 'form-control']) !!}
  </div>
  @if ( $errors->has('manufacturer_id') )
    <span class="text-warning">
        <strong> {{ $errors->first('manufacturer_id') }}</strong>
    </span>
  @endif
</div>
<div class="form-group">
  {!! Form::label('description', 'Description') !!}
  <div class="form-controls">
    {!! Form::textarea('description', null, ['class' => 'form-control','size' => '30x5']) !!}
  </div>
  @if ( $errors->has('description') )
    <span class="text-warning">
        <strong> {{ $errors->first('description') }}</strong>
    </span>
  @endif
</div>
<div class="form-group">
  {!! Form::label('unit_price', 'Price') !!}
  <div class="form-controls">
    {!! Form::text('unit_price', null, ['class' => 'form-control']) !!}
  </div>
  @if ( $errors->has('unit_price') )
    <span class="text-warning">
        <strong> {{ $errors->first('unit_price') }}</strong>
    </span>
  @endif
</div>
<div class="form-group">
  {!! Form::label('quality_in_store', 'Quality') !!}
  <div class="form-controls">
    {!! Form::text('quality_in_store', null, ['class' => 'form-control']) !!}
  </div>
  @if ( $errors->has('quality_in_store') )
    <span class="text-warning">
        <strong> {{ $errors->first('quality_in_store') }}</strong>
    </span>
  @endif
</div>
<div class="form-group">
  {!! Form::label('status', 'Status') !!}
  <div class="form-controls">
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
  </div>
  @if ( $errors->has('status') )
    <span class="text-warning">
        <strong> {{ $errors->first('status') }}</strong>
    </span>
  @endif
</div>
<div class="form-group">
  {!! Form::label('review', 'Review') !!}
  <div class="form-controls">
    {!! Form::textarea('review', null, ['class' => 'form-control','size' => '30x5']) !!}
  </div>
</div>
{!! Form::submit('Save Product', ['class' => 'btn btn-primary']) !!}
@if (isset($image))
  <script>
  {
   var output = document.getElementById('output');
   output.src ='{{url('upload/'.$image)}}';
   output.width="350";
   output.height="300";
 }
</script>
@endif
@if (isset($photos)) 
  @foreach ($photos as $photo)
   <script>
    src='{{url('upload/'.$photo->url)}}';
     $("#photo").append('<li >'+'<img ' +'src='+src+' height=100' +' width=120'+'</li>');
    // var output = document.getElementById('photo'+i);
    // output.src = URL.createObjectURL(event.target.files[i]);
    // output.width="120";
    // output.height="100";
    
  </script>    
  @endforeach
@endif
<script >
   var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.width="350";
    output.height="300";
  };

  var loadPhoto = function(event) {
    //var output = document.getElementById('photos')
    $("#photo").empty();
   for(i=0;i<=event.target.files.length;i++) {

    src=URL.createObjectURL(event.target.files[i]);
     $("#photo").append('<li >'+'<img ' +'src='+src+' height=100' +' width=120'+'</li>');
    // var output = document.getElementById('photo'+i);
    // output.src = URL.createObjectURL(event.target.files[i]);
    // output.width="120";
    // output.height="100";
   }
  };
</script>

