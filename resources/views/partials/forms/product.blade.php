<div class="form-group">
  {!! Form::label('name', 'Name') !!}
  <div class="form-controls">
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
  </div>
</div>
<div class="form-group">
  {!! Form::label('category_id', 'Category Name') !!}
  <div class="form-controls">
    {!! Form::select('category_id',$categories , null, ['class' => 'form-control']) !!}
  </div>
</div>
<div class="form-group">
  {!! Form::label('manufacturer_id', 'Manufacturer Name') !!}
  <div class="form-controls">
    {!! Form::select('manufacturer_id',$manufacturers , null, ['class' => 'form-control']) !!}
  </div>
</div>
<div class="form-group">
  {!! Form::label('description', 'Description') !!}
  <div class="form-controls">
    {!! Form::textarea('description', null, ['class' => 'form-control','size' => '30x5']) !!}
  </div>
</div>
<div class="form-group">
  {!! Form::label('unit_price', 'Price') !!}
  <div class="form-controls">
    {!! Form::text('unit_price', null, ['class' => 'form-control']) !!}
  </div>
</div>
<div class="form-group">
  {!! Form::label('quality_in_store', 'Quality') !!}
  <div class="form-controls">
    {!! Form::text('quality_in_store', null, ['class' => 'form-control']) !!}
  </div>
</div>
<div class="form-group">
  {!! Form::label('status', 'Status') !!}
  <div class="form-controls">
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
  </div>
</div>
<div class="form-group">
  {!! Form::label('review', 'Review') !!}
  <div class="form-controls">
    {!! Form::text('review', null, ['class' => 'form-control']) !!}
  </div>
</div>
{!! Form::submit('Save Product', ['class' => 'btn btn-primary']) !!}
