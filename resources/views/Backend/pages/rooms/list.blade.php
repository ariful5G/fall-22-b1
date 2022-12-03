@extends('master')

@section('content')
<h1>Room List</h1>
<a href="{{route('rooms.create')}}"class="btn btn-success">Add Rooms</a>
<table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Room image</th>
            <th scope="col">Name</th>
            <th scope="col">Room Id</th>
            <th scope="col">Room No</th>
            <th scope="col">Room Type</th>
            <th scope="col">Amount</th>
            <th scope="col">Amenities Id</th>
            <th scope="col">Amenities</th>
            <th scope="col">Amenities Description</th>
            <th scope="col">No of Accomodate</th>
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