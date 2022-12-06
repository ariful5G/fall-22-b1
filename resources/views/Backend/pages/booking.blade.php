@extends('master')

@section('content')
<h1>Booking</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Check In Date</th>
            <th scope="col">Check Out Date</th>
            <th scope="col">No of Guest</th>
            <th scope="col">No of Days</th>
            <!-- <th scope="col">Total Amount</th>
            <th scope="col">Due Amount</th>
            <th scope="col">Paid Amount</th> -->
            <th scope="col">Contact No</th>
            <th scope="col">Address</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($room as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->check_in_date}}</td>
            <td>{{$data->check_out_date}}</td>
            <td>{{$data->guest}}</td>
            <td>{{$data->days}}</td>
            <td>{{$data->contact}}</td>
            <td>{{$data->address}}</td>
            <td>{{$data->status}}</td>
            <td>
                <a href="" class="btn btn-outline-primary">Cancel</a>
                <a href="" class="btn btn-outline-danger">Booked</a>
                <!-- <a href="" class="btn btn-outline-success">Approved</a>
                <a href="" class="btn btn-outline-success">Disapproved</a> -->
            </td>
        </tr>

     @endforeach
       
        
        </tbody>
    </table>

@endsection