@extends('master')
@section('content')
<form action="{{route('category.create')}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label>employee name:</label>
    <input type="text" class="form-control" name="category_name">
  </div>
  <div class="form-group">
    <label>employee details:</label>
    <input type="text" class="form-control" name="category_details">
  </div>
  <button type="submit" class="btn btn-primary mt-4">Submit</button>
</form>
@endsection