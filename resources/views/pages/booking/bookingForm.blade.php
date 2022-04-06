@extends('master')
@section('content')
<form action="{{route('booking.create')}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label>Booking name:</label>
    <input type="text" class="form-control" name="booking_name">
  </div>
  <div class="form-group">
    <label>Booking details:</label>
    <input type="text" class="form-control" name="booking_details">
  </div>

  <button type="submit" class="btn btn-primary mt-4">Submit</button>
</form>
@endsection