@extends('master') 
 @section('content') 
<form action="{{route('booking.update',$booking->id)}}" method="POST" enctype="multipart/form-data"> 
   @method('PUT')
@csrf
  <div class="form-group">
    <label>booking name</label>
    <input type="text" class="form-control" name="booking_name">
  </div>
  <div class="form-group">
    <label>booking details</label>
    <input type="text" class="form-control" name="booking_details">
  </div>
  <button type="submit" class="btn btn-primary mt-4">Submit</button>
 </form> 
 @endsection 
