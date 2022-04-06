
@extends('master')
@section('content')

<table class="table">
<thead>

</thead>
<tbody>

<th scope="col">name</th>
            <th scope="col">adress</th>
            <th scope="col">phone_number</th>
            <th scope="col">email</th>
            <th scope="col">password</th>
            <th scope="col">time&date</th>
            <th scope="col">Action</th>
        
            @foreach($customer as $data)
                                <tr>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->adress}}</td>
                                    <td>{{$data->phone_number}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->password}}</td>
                                    <td>{{$data->created_at}}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{route('payment.edit',$data->id)}}">Edit</a>
                                        <a class="btn btn-danger" href="{{route('payment.delete',$data->id)}}">Delete</a>
                                        <a class="btn btn-success" href="">View</a>
                                    </td>
                                </tr>
                                @endforeach
   

</tbody>
</table>

    
           

@endsection

                                
        