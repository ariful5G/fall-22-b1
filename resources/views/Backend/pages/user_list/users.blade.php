@extends('master')

@section('content')

    <h1>User List</h1>

    <a href="{{route('users.create')}}"class="btn btn-success">Create New Form</a>
    
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Passord</th>
            <th scope="col">Contact No</th>
            <th scope="col">Address</th>
            <th scope="col">Gender</th>
        </tr>
        </thead>
        <tbody>

@foreach($user_list as $data)

<tr>
    <th scope="row">{{$data->id}}</th>
    <td>{{$data->name}}</td>
    <td>{{$data->email}}</td>
    <td>{{$data->password}}</td>
    <td>{{$data->contact}}</td>
    <td>{{$data->address}}</td>
    <td>{{$data->gender}}</td>
</tr>
@endforeach
</tbody>
</table>
{{$user_list->links()}}

@endsection


