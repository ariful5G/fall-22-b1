@extends('master')

@section('content')
<h1>Payment</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Contact</th>
            <th scope="col">Check In Date</th>
            <th scope="col">Total Amount</th>
        </tr>
        </thead>
        <tbody>
        @foreach($payment as $data)
        <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->address}}</td>
            <td>{{$data->contact}}</td>
            <td>{{$data->check_in_date}}</td>
            <td>{{$data->total_amount}}</td>
        </tr>
    @endforeach
        </tbody>
    </table>

@endsection