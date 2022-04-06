@extends('master')
@section('content')
<table class="table">
    <thead>
            <th scope="col">payment name</th>
            <th scope="col">payment details</th>
            <th scope="col">time&date</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($payment as $data)
                                <tr>
                                    <td>{{$data->payment_name}}</td>
                                    <td>{{$data->payment_details}}</td>
                                    <td>{{$data->created_at}}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{route('payment.edit',$data->id)}}">Edit</a>
                                        <a class="btn btn-danger" href="{{route('payment.delete',$data->id)}}">Delete</a>
                                        <a class="btn btn-success" href="">View</a>
                                    </td>
                                </tr>
                                @endforeach
   
        












         <a href="{{route('payment.form')}}" class="btn btn-success">create payment</a> 
    </tbody>
</table>
@endsection
