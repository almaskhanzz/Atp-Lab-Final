<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome, {{$user->name}}</h1>
	<a href="{{route('admin.show')}}">View Profile</a>
    <a href="{{route('admin.userList')}}">Customer List</a>
	<a href="{{route('admin.create')}}">Add Book</a>
	<a href="{{route('admin.bookList')}}">Book List</a>
	<a href="{{route('logout.index')}}">logout</a>

</body>
</html>