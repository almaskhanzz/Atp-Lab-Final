<!DOCTYPE html>
<html>
<head>
	<title>Add Book</title>
</head>
<body>
	<h1>Add Book</h1>
	<a href="{{route('admin.index')}}">Home</a> | 
	<a href="{{route('logout.index')}}">logout</a> <br><br>
	
	<form method="post">
	<table border="3">
		<tr>
			<td>Book Name</td>
			<td><input type="text" name="bookname"></td>
		</tr>
		<tr>
			<td>Book Title</td>
			<td><input type="text" name="booktitle"></td>
		</tr>
        <tr>
			<td>Category</td>
			<td><input type="text" name="category"></td>
		</tr>
        <tr>
			<td>Price</td>
			<td><input type="text" name="price"></td>
		</tr>
        
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Save"></td>
		</tr>
	</table>
</form>

</body>
</html>