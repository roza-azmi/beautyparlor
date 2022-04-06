@extends('master')
@section('content')
<form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
   @method('PUT')
@csrf
  <div class="form-group">
    <label>product name:</label>
    <input type="text" class="form-control" name="product_name">
  </div>
  <div class="form-group">
    <label>product details:</label>
    <input type="text" class="form-control" name="product_details">
  </div>

  <button type="submit" class="btn btn-primary mt-4">Submit</button>
</form>

@endsection