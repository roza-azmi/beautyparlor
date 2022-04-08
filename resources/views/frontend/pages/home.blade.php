@extends('frontend.main')
@section('content')



<div class="container" style="margin-bottom: 20px;">
    <div style="display: grid; grid-template-columns: repeat(3,minmax(0,1fr)); gap: 20px;">
    @foreach($product as $item)
    
    <div class="product-item">
        <img style="width: 100%; object-fit: contain;" src="{{url('/uploads/product/',$item->image)}}" />
        <p style="font-size: 20px;">name : {{$item->product_name}}</p>
        <a class="btn btn-primary"><span style="color: white;">Add to cart</span></a>
    </div>

    
   
    @endforeach

</div> 

</div>




@endsection