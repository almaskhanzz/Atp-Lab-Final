<!DOCTYPE html>
<html>
<head>
	<title>book List</title>
	
</head>
<body>
	<h1>Book List</h1>
	<a href="{{route('admin.index')}}">Home</a> | 
	<a href="{{route('logout.index')}}">logout</a> <br><br>
	
	<table border="3">
		<thead>
			<tr>
				<th>Book Name</th>
				<th>Book Title</th>
				<th>Book Category</th>
                <th>Book Price</th>
			</tr>
		</thead>

	 @foreach($books as $s)
			<tr>
				<td>{{$s->bookname}}</td>
				<td>{{$s->booktitle}}</td>
				<td>{{$s->category}}</td>
                <td>{{$s->price}}</td>

			</tr>
		
	@endforeach

	</table>
	
</body>
</html>