
@extends('frontend.webside')
@section('content')

 <section class="ftco-section bg-light">
    	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <!-- <h2 class="mb-4">Our Rooms</h2> -->
          </div>
        </div>    		
    		<div class="row">
    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
    				<div class="room">
                    <img src="{{url('/uploads/'.$room->room_image)}}" style="width:331px; height:auto;" alt="Room Image">
    						<!-- <div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div> -->
    					</a>
    					<div class="text p-3 text-center">
                        <h3 class="mb-3"><a href="rooms.html">{{$room->name}}</a></h3>
                        <p><span class="price mr-2">{{$room->amount}}</span> <span class="per">per night</span></p>
                            <ul class="list">
                                        <li><span>Room No:</span>{{$room->room_no}}</li>
                                        <li><span>Room Type:</span>{{$room->type}}</li>
		    							<li><span>Max:</span>{{$room->no_of_accomodate}}</li>
										<li><span>Bed:</span>2</li>
		    							<li><span>Size:</span> 45 m2</li>
		    							<li><span>View:</span> Sea View</li>
		    						</ul>
    						<hr>
    						<p class="pt-1"><a href="" class="btn-custom">Book Now <span class="icon-long-arrow-right"></span></a></p>
    					</div>
    				</div>
    			</div>
                <!-- <div class="col-sm col-md-6 col-lg-4 ftco-animate">
    				<div class="room">
    					<a href="rooms.html" class="img d-flex justify-content-center align-items-center" style="background-image: url('/frontend/images/room-1.jpg');">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3 text-center">
    						<h3 class="mb-3"><a href="rooms.html">Suite Room</a></h3>
    						<p><span class="price mr-2">$120.00</span> <span class="per">per night</span></p>
                            <ul class="list">
                                        <li><span>Room No:</span>102</li>
                                        <li><span>Room Type:</span>AC</li>
		    							<li><span>Max:</span> 3 Persons</li>
		    							<li><span>Size:</span> 45 m2</li>
		    							<li><span>View:</span> Sea View</li>
		    							<li><span>Bed:</span> 1</li>
		    						</ul>
    						<hr>
    						<p class="pt-1"><a href="room-single.html" class="btn-custom">Book Now <span class="icon-long-arrow-right"></span></a></p>
    					</div>
    				</div>
    			</div>
                <div class="col-sm col-md-6 col-lg-4 ftco-animate">
    				<div class="room">
    					<a href="rooms.html" class="img d-flex justify-content-center align-items-center" style="background-image: url('/frontend/images/room-1.jpg');">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3 text-center">
    						<h3 class="mb-3"><a href="rooms.html">Suite Room</a></h3>
    						<p><span class="price mr-2">$120.00</span> <span class="per">per night</span></p>
                            <ul class="list">
                                        <li><span>Room No:</span>103</li>
                                        <li><span>Room Type:</span>AC</li>
                                        <li><span>Max:</span> 3 Persons</li>
		    							<li><span>Size:</span> 45 m2</li>
		    							<li><span>View:</span> Sea View</li>
		    							<li><span>Bed:</span> 1</li>
		    						</ul>
    						<hr>
    						<p class="pt-1"><a href="room-single.html" class="btn-custom">Book Now <span class="icon-long-arrow-right"></span></a></p>
    					</div>
    				</div>
    			</div> -->
    		</div>
    	</div>
    @endsection