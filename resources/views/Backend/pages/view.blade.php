@extends('master')

@section('content')
<h1>Booking Details</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">User id</th>
            <th scope="col">User Name</th>
            <th scope="col">Email</th>
            <!-- <th scope="col">No of Days</th>
            <th scope="col">Total Amount</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th> -->
            <!-- <th scope="col">Address</th> -->
            <!-- <th scope="col">Contact No</th> -->
            <th scope="col">Check In Date</th>
            <!-- <th scope="col">Total Amount</th>
            <th scope="col">Due Amount</th>
            <th scope="col">Paid Amount</th> -->
        </tr>
        </thead>
        <tbody>
        @foreach($rooms as $data)

        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->user_id}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <!-- <td>{{$data->status}}</td> -->
            <!-- <td>{{$data->address}}</td>
            <td>{{$data->contact}}</td> -->
            <td>{{$data->check_in_date}}</td>
            <!-- <td>{{$data->check_out_date}}</td> -->
            <!-- <td>{{$data->amount}}</td> -->
            <td>
                <!-- <a href="" class="btn btn-outline-primary">Cancel</a> -->
                <!-- <a href="{{route('approved',$data->id)}}" class="btn btn-primary">Approved</a>
                <a href="{{route('disapproved',$data->id)}}" class="btn btn-warning">Disapproved</a>
                <a href="" class="btn btn-info">View</a> -->
            </td>
        </tr>

     @endforeach
       
        
        </tbody>
    </table>

@endsection