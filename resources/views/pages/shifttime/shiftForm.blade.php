
@extends('master')
@section('content')
<form action="{{route('shift.create')}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label>customer_name:</label>
    <input required type="text" class="form-control" name="customer_name">
  </div>
  <div class="form-group">
    <label>customer_details:</label>
    <input required type="text" class="form-control" name="customer_details">
  </div>

  <button type="submit" class="btn btn-primary mt-4">Submit</button>
</form>
@endsection