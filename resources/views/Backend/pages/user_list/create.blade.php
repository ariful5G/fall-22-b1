@extends('master')

@section('content')


	<h2>User Registration form</h2>
	<form method="POST" action="{{route('user.store')}}">
			@csrf
		First Name: <input type="text"name= "FirstName"class="form-control"> <br>
		Last Name: <input type="text" name= "LastName" class="form-control"> <br>
		Email: <input type="email" name= "email" class="form-control"> <br>
		password: <input type="password"name="password" class="form-control"><br>
		Date of Birth: <input type="date" name= "birthday"><br><br>
		Gender:<br>
		<input type="radio" name="Gender" value="Male">Male<br>
		<input type="radio" name="Gender"value="Female">Female<br>
		<input type="radio" name="Gender"value="Other">Other<br>
		<input type="submit" value="Register!">
		<input type="reset">
	</form>


</html>
 @endsection