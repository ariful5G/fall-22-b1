@extends('master')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register Page</title>
</head>
<body>
	<h2>Registration form</h2>
	<form method="GET">
	First Name: <input type="text" name= "FirstName"> <br><br>
	Last Name: <input type="text" name= "LastName"><br><br>
	Email: <input type="email" name= "email" required> <br><br>
	password: <input type="password"name="password"min="5"><br><br>
	Date of Birth: <input type="date" name= "birthday"><br><br>
	Gender:<br>
	<input type="radio" name="Gender" value="Male">Male<br>
	<input type="radio" name="Gender"value="Female">Female<br>
	<input type="radio" name="Gender"value="Other">Other<br>
	<input type="submit" value="Register!">
    <input type="reset">
</form>

</body>
</html>
 @endsection