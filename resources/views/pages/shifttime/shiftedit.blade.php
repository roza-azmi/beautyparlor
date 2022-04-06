@extends('master')
@section('content')

<form action="{{route('shift.update',$shift->id)}}" method="POST" enctype="multipart/form-data">
   @method('PUT')
@csrf
  <div class="form-group">
    <label>customer name:</label>
    <input type="text" class="form-control" name="customer_name">
  </div>
  <div class="form-group">
    <label>customer details:</label>
    <input type="text" class="form-control" name="customer_details">
  </div>

  <button type="submit" class="btn btn-primary mt-4">Submit</button>
</form>
@endsection