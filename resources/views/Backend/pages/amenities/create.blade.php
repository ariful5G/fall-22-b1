@extends('master')

@section('content')
<h1>Amenities</h1>

<form method='GET' action="" enctype="multipart/form-data">
     @csrf
     <div class="form-group">
            <label for="name">Name</label>
            <input type="text"name="name"required class="form-control" placeholder="Enter Amenities Name">
    </div>
    <div class="form-group">
            <label for="name">Status</label>
            <input type="text"name="status"required class="form-control" placeholder="Enter Status">
    </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
   <input type="reset" class="btn btn-secondary">
   </div>

</form>




@endsection