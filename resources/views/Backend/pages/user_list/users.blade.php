@extends('master')

@section('content')

    <h1>User List</h1>

    <a href="{{route('users.create')}}"class="btn btn-success">Create New Form</a>
    
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">fast_name</th>
            <th scope="col">last_name</th>
            <th scope="col">email</th>
            <th scope="col">password</th>
            <th scope="col">image</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

@foreach($user_list as $key=>$data)

<tr>
    <th scope="row">{{$key + $user_list->firstItem()}}
    <!-- <td>
        <img src="{{$data->image}}" alt="Image">
    </td> -->
    <td>{{$data->fast_name}}</td>
    <td>{{$data->last_name}}</td>
    <td>{{$data->email}}</td>
    <td>{{$data->password}}</td>
    <td>
        <img src="{{url('/uploads/'.$data->image)}}"style="height:60px; width:70px"alt="My Image">
        
    </td>

    <td>
        <a href="" class="btn btn-outline-primary">Update</a>
        <a href="" class="btn btn-outline-danger">Delete</a>
        <a href="" class="btn btn-outline-success">View</a>
    </td>
</tr>
@endforeach
</tbody>
</table>
{{$user_list->links()}}

@endsection


