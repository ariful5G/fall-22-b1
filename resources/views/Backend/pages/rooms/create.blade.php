@extends('master')

@section('content')
<h1>Room Details</h1>

<form method='post' action="{{route('room.store')}}" enctype="multipart/form-data">
     @csrf
     <div class="form-group">
            <label for="room">Room Name</label>
            <input type="text"name="room"required class="form-control" id="name" placeholder="Enter Room Name">
    </div>
    <div class= "form-group">
        <label for="room id">Room ID</label>
        <input type="number" name="room_id" class="form-control" placeholder="Room id">
    </div>
  
    <div class="form-group">
            <label for="room_no">Room No</label>
            <input type="number"name="room_no"required class="form-control" id="name" placeholder="Enter room no">
    </div>
     <div class="form-group">
            <label for="room_type">Select Room Types</label>
            <input type="text"name="room_type"required class="form-control" id="name" placeholder="Enter room type">
    </div>
 
    <div class= "form-group">
        <label for="amount">Amount</label>
        <input type="number" name="amount" class="form-control" id="price" placeholder="Enter Amount">
    </div>
    <div class= "form-group">
        <label for="amenities id">Amenities ID</label>
        <input type="number" name="amenities_id" class="form-control" placeholder="Amenities id">
    </div>
  
    <div class="form-group">
            <label for="amenities_description">Amenities Description</label>
            <input type="text"name="description"required class="form-control" id="name" placeholder="Enter Description">
    </div>
    <div class="form-group">
        <label for="amenities">Select Amenities</label>
        <select name="amenities" id="" class="form-control">
                <option value="parking">Car Parking</option>
                <option value="Free-wifi">Free-wifi</option>
                <option value="Airport Drop & Pick-up">Airport Drop & Pick-up</option>
                <option value="Free breakfast">Free breakfast</option>
        </select>
     </div>
   
      <div class= "form-group">
        <label for="accomodate">Accomodate</label>
        <input type="number" name="accomodate" class="form-control" id="price" placeholder="Number of accomodate">
    </div>
    <div>
        <label for="Room_image">Upload Room Image</label>
        <input type="file" name="image" class="form-control"id="image">
   </div>
  
   <div>
        <button type="submit" class="btn btn-primary">Submit</button>
   <input type="reset" class="btn btn-secondary">
   </div>

</form>







@endsection