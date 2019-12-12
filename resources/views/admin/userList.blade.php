<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>
	<h1>User List</h1>
	<a href="{{route('admin.index')}}">Home</a> | 
	<a href="{{route('logout.index')}}">logout</a> <br><br>
	
	
	<table border="4">
		<thead>
			<tr>
				<th>Name</th>
				<th>User Name</th>
				
				<th>ACTION</th>
			</tr>
		</thead>

	 @foreach($users as $s)
		
			<tr>
				<td>{{$s->name}}</td>
				<td>{{$s->username}}</td>
                <td>
                <a href="{{route('admin.delete',$s->id)}}">Delete</a> | 
                </td>
				
			</tr>
	@endforeach

	</table>
	
</body>
</html>