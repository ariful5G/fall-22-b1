@extends('master')

@section('content')
<h1>Payment</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Total Amount</th>
            <th scope="col">Paid Amount</th>
            <th scope="col">Due Amount</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Tufan</td>
            <td>tufan@gmail.com</td>
            <td>15000</td>
            <td>5000</td>
            <td>10000</td>
            <td>Due</td>
        </tr>
    
        </tbody>
    </table>

@endsection