@extends('layouts.aca')
@section('kontent')
<!DOCTYPE html>
<html>
<a href="{{ route('materisatu') }}" method="GET"></a>
	<body style="text-align: center">
		<h1 style="color: green">GeeksforGeeks</h1>

		<h2>How to insert video and play in HTML</h2>

		<p>Adding Video on my Webpage</p>

		<video width="500px" height="500px" controls="controls">
		<source src="https://media.geeksforgeeks.org/wp-
					content/uploads/20231020155223/Full-Stack-Development-_-
					LIVE-Classes-_-GeeksforGeeks.mp4" type="video/mp4" />
	</video>
	</body>
</html>
@endsection