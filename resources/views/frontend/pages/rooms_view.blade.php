@extends('frontend.webside')

@section('content')

<section>
  <div class="hero-wrap" style="background-image: url('/frontend/images/bg_1.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{route('website')}}">Home</a></span> <span>Rooms</span></p>
	            <h2 class="mb-4 bread">Our Rooms</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

		<div class="row">
			@foreach($rooms as $room)
			<div class="col-sm col-md-6 col-lg-4 ftco-animate">	
					<div class="room">
						
						<div class="icon d-flex justify-content-center align-items-center">
								<span class="icon-search2"></span>
							</div>
					    <div class="text p-3 text-center">
						
							<img src="{{url('/uploads/'.$room->room_image)}}" style="width:331px; height:auto;" alt="Room Image">
							
							<h3 class="mb-3"><a href="rooms.html">{{$room->name}}</a></h3>
							<p><span class="price mr-2">{{$room->amount}}</span> <span class="per">per night</span></p>
							<hr>
							<p class="pt-1">
							 <a href="{{route('frontend.view.room',$room->id)}}" class="btn-custom">View Room Details <span class="icon-long-arrow-right"></span>
							</a></p>
						</div>
					</div>
				</div>
				@endforeach
				<div class="col-lg-3 sidebar">
	      		<div class="sidebar-wrap bg-light ftco-animate">
	      			<h3 class="heading mb-4">Advanced Search</h3>
	      			<form action="#">
	      				<div class="fields">
		              <div class="form-group">
		                <input type="text" id="checkin_date" class="form-control checkin_date" placeholder="Check In Date">
		              </div>
		              <div class="form-group">
		                <input type="text" id="checkin_date" class="form-control checkout_date" placeholder="Check Out Date">
		              </div>
		              <div class="form-group">
		                <div class="select-wrap one-third">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select name="" id="" class="form-control">
	                    	<option value="">Room Type</option>
	                    	<option value="">Suite</option>
	                      <option value="">Family Room</option>
	                      <option value="">Deluxe Room</option>
	                      <option value="">Classic Room</option>
	                      <option value="">Superior Room</option>
	                      <option value="">Luxury Room</option>
	                    </select>
	                  </div>
		              </div>

		              <div class="form-group">
		                <input type="submit" value="Search" class="btn btn-primary py-3 px-5">
		              </div>
		            </div>
	            </form>
	      		</div>
	      		<!-- <div class="sidebar-wrap bg-light ftco-animate">
	      			<h3 class="heading mb-4">Star Rating</h3>
	      			<form method="post" class="star-rating">
							  <div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">
										<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></p>
									</label>
							  </div>
							  <div class="form-check">
						      <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						    	   <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i></span></p>
						      </label>
							  </div>
							  <div class="form-check">
						      <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
						     </label>
							  </div>
							  <div class="form-check">
							    <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
						      </label>
							  </div>
							  <div class="form-check">
						      <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
							    </label>
							  </div>
							</form>
	      		</div> -->
	          </div>
			</div>
			</div>
		</div>
	</section>


@endsection