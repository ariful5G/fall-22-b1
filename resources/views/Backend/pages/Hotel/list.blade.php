@extends('master')

@section('content')
<h1>Hotel</h1>
<a href="{{route('hotel.create')}}" class ="btn btn-success" >Add hotel info</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Contact</th>
            <th scope="col">City</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($hotel as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->address}}</td>
            <td>{{$data->contact}}</td>
            <td>{{$data->city}}</td>
            <td>
                <a href="{{route('admin.hotel.edit',$data->id)}}" class="btn btn-outline-primary">Edit</a>
                <a href="{{route('hotelinfo.delete',$data->id)}}" class="btn btn-outline-danger">Delete</a>
                <a href="{{route('admin.hotel.view',$data->id)}}" class="btn btn-outline-success">View</a>
            </td>
        </tr>
       @endforeach
        </tbody>
    </table>

@endsection