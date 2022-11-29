<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container">
		<a class="navbar-brand" href='index.html'>Hotel Sea Place</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menu
		</button>

		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active"><a  href='index.html' class="nav-link">Home</a></li>
				<li class="nav-item"><a href='about.html' class="nav-link">About</a></li>
				<li class="nav-item"><a href='rooms.html' class="nav-link">Rooms</a></li>
				<li class="nav-item"><a href='restaurant.html' class="nav-link">Our Service</a></li>
				@auth
				<li class="nav-item"><a href="{{route('user.login')}}" class="nav-link">{{auth()->user()->first_name}} {{auth()->user()->last_name}}'s Account</a></li>
				<li class="nav-item"><a href="{{route('user.logout')}}" class="nav-link">Logout</a></li>
				@else
				<li class="nav-item"><a href='blog.html' class="nav-link" data-toggle="modal" data-target="#exampleModal">Signup</a></li>
				<li class="nav-item"><a href='contact.html' class="nav-link" class="btn btn-primary" data-toggle="modal" data-target="#Modal">Login</a></li>
				@endauth
			</ul>
		</div>
	</div>
</nav>


<!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Please Login</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{route('user.login')}}" method="post">
					@csrf
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username/Email" name="email">

					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name="password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Login</button>
					</div>
					<p>Don't have any account? Signup</p>

				</form>

			</div>

		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Do Registration</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<form method="post" action="{{route('registration')}}" enctype="multipart/form-data">
					@csrf
					@if(session()->has('message'))
					<p class="alert alert-success">{{session()->get('message')}}</p>
					@endif
					First Name: <input type="text" name="FirstName" class="form-control"> <br>
					Last Name: <input type="text" name="LastName" class="form-control"> <br>
					Email: <input type="email" name="email" class="form-control" required> <br>
					password: <input type="password" name="password" class="form-control" min="4"><br>
					<br>
					Date of Birth: <input type="date" name="birthday"><br><br>
					Gender:<br>
					<input type="radio" name="Gender" value="Male">Male<br>
					<input type="radio" name="Gender" value="Female">Female<br>
					<input type="radio" name="Gender" value="Other">Other<br>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Register</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>