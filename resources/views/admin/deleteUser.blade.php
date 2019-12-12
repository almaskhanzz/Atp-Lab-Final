<!DOCTYPE html>
<html>
<head>
	<title>Delete User</title>
	
</head>
<body>
	<h1>Delete User:{{$user->name}}</h1>
	<a href="{{route('admin.index')}}">Home</a> | 
	<a href="{{route('logout.index')}}">logout</a> <br><br>
	
	<table border="4">
		
		<tr>
			<td>User Name</td>
			<td>{{$user->name}}</td>
		</tr>
		<tr>
			<td>Name</td>
			<td>{{$user->name}}</td>
		</tr>
		
    </table>
    <form method="post">
        <h3>User will be Parmanently deleted..</h3>
        <input type="submit" name="submit" value="Confirm">
    </form>
</body>
</html>