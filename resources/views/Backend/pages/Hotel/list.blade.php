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
        <tr>
            
            <!-- <td>
                <a href="" class="btn btn-outline-primary">Edit</a>
                <a href="" class="btn btn-outline-danger">Delete</a>
                <a href="" class="btn btn-outline-success">View</a>
            </td> -->
        </tr>
   
        </tbody>
    </table>

@endsection