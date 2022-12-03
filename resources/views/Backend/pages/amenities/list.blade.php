@extends('master')

@section('content')
<h1>Amenities</h1>
<a href="{{route('amenities.create')}}" class ="btn btn-success" >Add Amenities</a>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
          <!-- <td>
                <a href="" class="btn btn-outline-primary">Edit</a>
                <a href="" class="btn btn-outline-danger">Delete</a>
                <a href="" class="btn btn-outline-success">View</a>
            </td> -->
        </tbody>
    </table>

@endsection