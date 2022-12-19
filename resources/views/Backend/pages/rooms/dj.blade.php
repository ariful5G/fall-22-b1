@extends('frontend.webside')

@section('content')

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>

    <div class="w3-container">
        <h2>Single room view</h2>

        <div class="w3-card-4" style="width:33%">
            <img src="{{url('/uploads/'.$room->room_image)}}" style="width:435px; height:auto;" alt="Room Image">
            <div class="w3-container w3-center">
                <h3 class="mb-3"><a href="rooms.html">{{$room->name}}</a></h3>
                <p><span class="price mr-2">{{$room->amount}}</span> <span class="per">per night</span></p>
                <ul class="list" style= "list-style-type:none;">
                    <li><span>Room No:</span>{{$room->room_no}}</li>
                    <li><span>Room Type: </span>{{$room->type}}</li>
                    <li><span>Max: </span>{{$room->no_of_accomodate}} Person</li>
                    <li><span>Size: </span> 45 m2</li>
                    <li><span>View: </span> Sea View</li>
                    <li><span>Bed: </span>2</li>
                </ul>
                <hr>
                <p class="pt-1"><a href="{{route('booking.form',$room->id)}}" class="btn-custom">Book Now <span class="icon-long-arrow-right"></span></a></p>
            </div>
        </div>
    </div>

</body>





@endsection