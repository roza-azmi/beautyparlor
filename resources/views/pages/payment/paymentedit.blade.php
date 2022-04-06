@extends('master')
@section('content')
<form action="{{route('payment.update',$payment->id)}}" method="POST" enctype="multipart/form-data"> 
   @method('PUT')
@csrf
  <div class="form-group">
    <label>payment name</label>
    <input type="text" class="form-control" name="payment_name">
  </div>
  <div class="form-group">
    <label>payment details</label>
    <input type="text" class="form-control" name="payment_details">
  </div>
  <button type="submit" class="btn btn-primary mt-4">Submit</button>
 </form> 
@endsection
