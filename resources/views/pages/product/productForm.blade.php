@extends('master')
@section('content')
<form action="{{route('product.create')}}" method="POST" enctype="multipart/form-data"> -
    @csrf
  <div class="form-group">
    <label>product name:</label>
    <input type="text" class="form-control" name="product_name">
  </div>
  <div class="form-group">
    <label>product details:</label>
    <input type="text" class="form-control" name="product_details">
  </div>
  <div class="form-group">
    <label>Image:</label>
    <input type="file" class="form-control" name="image">
  </div>



  <button type="submit" class="btn btn-primary mt-4">Submit</button>
</form> 
@endsection