@extends('master')

@section('content')
<h1>Hotel</h1>

<form method='GET' action="" enctype="multipart/form-data">
     @csrf
     <div class="form-group">
            <label for="name">Enter Name</label>
            <input type="text"name="name"required class="form-control" id="name" placeholder="Enter Hotel Name">
    </div><br>
    <div class= "form-group">
        <label for="email">Enter Email</label>
        <input type="email" name="email" class="form-control" id="price" placeholder="Enter Email">
    </div><br>
    <div class= "form-group">
        <label for="address">Enter Address</label>
        <input type="text" name="address" class="form-control" id="price" placeholder="Enter Address">
    </div><br>
    <div class= "form-group">
        <label for="contact no">Enter Contact No</label>
        <input type="number" name="contact" class="form-control" id="price" placeholder="Enter Contact No">
    </div><br>
    <div class= "form-group">
        <label for="city">Enter City</label>
        <input type="text" name="city" class="form-control" id="price" placeholder="Enter City">
    </div><br>
    <div>
        <label for="image">Upload Image</label>
        <input type="file" name="image" class="form-control"id="image">
   </div>
   <div><br>
        <button type="submit" class="btn btn-primary">Submit</button>
   <input type="reset" class="btn btn-secondary">
   </div>

</form>




@endsection