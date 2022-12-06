@extends('master')

@section('content')
<h1>Amenities</h1>

<form method='post' action="{{route('amenities.store')}}" enctype="multipart/form-data">
     @csrf

     <div class="form-group">
        <label for="name">Amenities Name</label>
        <select name="name" id="" class="form-control">
                <option value="parking">Car Parking</option>
                <option value="saab">Free-wifi</option>
                <option value="opel">Airport Drop & Pick-up</option>
                <option value="audi">Free breakfast</option>
        </select>
     </div>
     <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="" class="form-control">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
   <input type="reset" class="btn btn-secondary">
   </div>

</form>




@endsection