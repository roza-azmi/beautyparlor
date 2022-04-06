@extends('master')
@section('content')

<form action="{{route('service.update',$service->id)}}" method="POST" enctype="multipart/form-data">
   @method('PUT')
@csrf
  <div class="form-group">
    <label>service name:</label>
    <input type="text" class="form-control" name="service_name">
  </div>
  <div class="form-group">
    <label>service details:</label>
    <input type="text" class="form-control" name="service_details">
  </div>

  <button type="submit" class="btn btn-primary mt-4">Submit</button>
</form>
@endsection