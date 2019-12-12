<!DOCTYPE html>
<html>
<head>
	<title>Admin Details</title>
</head>
<body>
	<h1>Admin Details</h1>
	<a href="{{route('admin.index')}}">Home</a>
	<a href="{{route('logout.index')}}">logout</a> <br><br>
	
	<table border="4">
		
		<tr>
			<td>User Name</td>
			<td>{{$user->username}}</td>
		</tr>
		<tr>
			<td>Name</td>
			<td>{{$user->name}}</td>
		</tr>

	</table>

   

	</table>
</body>
</html>