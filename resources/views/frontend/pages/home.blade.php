@extends('frontend.main')
@section('content')



<div>
    @foreach($product as $item)
    <div class="product-item">
        <img width="90px" src="{{url('/uploads/product/',$item->image)}}" alt="{{$item->product_name}}">
    </div>
    
    @endforeach

</div>

                



@endsection