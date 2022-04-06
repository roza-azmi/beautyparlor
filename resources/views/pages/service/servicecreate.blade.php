@extends('master')

@section('content')


<table class="table">
    <thead>
        <tr>
            
            <th scope="col">service name</th>
            <th scope="col">service details</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($service as $data)
                                <tr>
                                    <td>{{$data->service_name}}</td>
                                    <td>{{$data->service_details}}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{route('service.edit',$data->id)}}">Edit</a>
                                        <a class="btn btn-danger" href="{{route('service.delete',$data->id)}}">Delete</a>
                                        <a class="btn btn-success" href="">View</a>
                                    </td>
                                </tr>
                                @endforeach
        



    
        

      
    
      
        <a href="{{route('service.form')}}" class="btn btn-primary">create new service</a>
    </tbody>
</table>
@endsection
