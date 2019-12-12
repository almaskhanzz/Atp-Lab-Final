<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome, {{$user->name}}</h1>
	<a href="{{route('logout.index')}}">logout</a>

</body>
</html>