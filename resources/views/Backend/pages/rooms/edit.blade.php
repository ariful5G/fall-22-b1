@extends('master')

@section('content')
<h1>Room Details</h1>

<form method='POST' action="{{route('room.update',$room->id)}}" enctype="multipart/form-data">
    @method('put')
     @csrf
     <!-- <div class="form-group">
            <label for="room_types">Room Types</label>
            <input type="text" value="{{$room->room_type_id}}" name="room"required class="form-control" id="name" placeholder="Enter Room Types">
    </div> -->
    <div class="form-group">
            <label for="room_name">Room Name</label>
            <input type="text"value="{{$room->name}}"name="room_name"class="form-control" id="name" placeholder="Enter room name">
    </div>
  
    <div class="form-group">
            <label for="room_no">Room No</label>
            <input type="number"value="{{$room->room_no}}"name="room_no" class="form-control" id="name" placeholder="Enter room no">
    </div>
     <div class="form-group">
            <label for="type">Types</label>
            <input type="text"value="{{$room->type}}"name="name" class="form-control" id="name" placeholder="Enter room type">
    </div>
 
    <div class= "form-group">
        <label for="amount">Amount</label>
        <input type="number"value="{{$room->amount}}" name="amount" class="form-control" id="price" placeholder="Enter Amount">
    </div>
  
      <div class= "form-group">
        <label for="accomodate">Accomodate</label>
        <input type="number" value="{{$room->no_of_accomodate}}"name="accomodation" class="form-control" id="price" placeholder="Number of accomodate">
    </div>
    <!-- <div>
        <label for="Room_image">Upload Room Image</label>
        <input type="file"value="{{$room->room_image}}" name="image" class="form-control"id="image">
   </div> -->
  
   <div>
        <button type="submit" class="btn btn-primary">Update</button>
   <input type="reset" class="btn btn-secondary">
   </div>

</form>







@endsection