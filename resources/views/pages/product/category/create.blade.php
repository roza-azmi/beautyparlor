@extends('master')

@section('content')

                        <table class="table">
                            <thead class="thead-primary">
                               
                                <tr>
                                    <!-- <th> serial</th> -->
                                    <th>employee Name </th>
                                    <th>employee Details</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($category as $data)
                                <tr>
                                    <td>{{$data->category_name}}</td>
                                    <td>{{$data->category_details}}</td>
                                    
                                    <td>
                                        <a class="btn btn-primary" href="{{route('category.edit',$data->id)}}">Edit</a>
                                        <a class="btn btn-danger" href="{{route('category.delete',$data->id)}}">Delete</a>
                                        <a class="btn btn-success" href="">View</a>
                                    </td>
                                </tr>
                                @endforeach



                                <a href="{{route('category.form')}}" class="btn btn-success">Create employee information</a>
                            </tbody>
                        </table>
                    

@endsection
