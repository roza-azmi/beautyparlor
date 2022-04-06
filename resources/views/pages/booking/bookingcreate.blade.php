@extends('master')

@section('content')


<table class="table">
    <thead>
        <tr>
            <th scope="col">booking id</th>
            <th scope="col">booking name</th>
            <th scope="col">booking details</th>
            <th scope="col">time & date</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>



    @foreach($booking as $data)
                                <tr>
                                    <td>{{$data->booking_name}}</td>
                                    <td>{{$data->booking_details}}</td>
                                     
                                     <td>{{$data->created_at}}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{route('booking.edit',$data->id)}}">Edit</a>
                                        <a class="btn btn-danger" href="{{route('booking.delete',$data->id)}}">Delete</a>
                                        <a class="btn btn-success" href="">View</a>
                                    </td>
                                </tr>
                                @endforeach
        

        <!-- <tr> -->
      <!-- <th scope="row">1</th> -->
      <!-- <td>roza</td> -->
      <!-- <td> -->
          <!-- <a class="btn btn-primary" href="">Edit</a> -->
          <!-- <a class="btn btn-danger" href="">Delete</a> -->
          <!-- <a class="btn btn-success" href="">View</a> -->
      <!-- </td> -->

    <!-- </tr> -->
    
        <!-- <a href="{{route('service.create')}}" class="btn btn-primary">Create Services</a> -->
        <a href="{{route('booking.form')}}" class="btn btn-primary">create new booking</a>
    </tbody>
</table>
@endsection
