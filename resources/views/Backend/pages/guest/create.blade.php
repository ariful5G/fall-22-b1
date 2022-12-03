@extends('master')

@section('content')
<h1>Guest</h1>

<form method='GET' action="" enctype="multipart/form-data">
     @csrf
     <div class="form-group">
            <label for="name">Enter Name</label>
            <input type="text"name="name"required class="form-control" placeholder="Enter Name">
    </div>
    <div class= "form-group">
        <label for="email">Enter Email</label>
        <input type="email" name="email" class="form-control" placeholder="Enter Email">
    </div>
    <div class= "form-group">
        <label for="check in">Check In Date</label>
        <input type="date" name="check_in" class="form-control" placeholder="Enter Check In Date">
    </div>
    <div class= "form-group">
        <label for="check out">Check Out Date</label>
        <input type="date" name="check_out" class="form-control" placeholder="Enter Check Out Date">
    </div>
    <div class= "form-group">
        <label for="guest"> No of Guest</label>
        <input type="number" name="guest" class="form-control" placeholder="Number of guest">
    </div>
    <div class= "form-group">
        <label for="days"> No of Days</label>
        <input type="number" name="days" class="form-control" placeholder="Number of Days">
    </div>
    <div class= "form-group">
        <label for="amount">Total Amount</label>
        <input type="number" name="amount" class="form-control" id="price" placeholder="Enter Amount">
    </div>
    <div class= "form-group">
        <label for="amount">Due Amount</label>
        <input type="number" name="due_amount" class="form-control" id="price" placeholder="Enter Amount">
    </div>
    <div class= "form-group">
        <label for="amount">Paid Amount</label>
        <input type="number" name="paid_amount" class="form-control" id="price" placeholder="Enter Amount">
    </div>
    <div class= "form-group">
        <label for="contact no">Enter Contact No</label>
        <input type="number" name="contact" class="form-control"placeholder="Enter Contact No">
    </div>
    <div class= "form-group">
        <label for="address">Enter Address</label>
        <input type="text" name="address" class="form-control" placeholder="Enter Address">
    </div>
    <div class= "form-group">
        <label for="status">Enter Status</label>
        <input type="text" name="status" class="form-control" placeholder="Enter status">
    </div>
   <div>
        <button type="submit" class="btn btn-primary">Submit</button>
   <input type="reset" class="btn btn-secondary">
   </div>

</form>


@endsection