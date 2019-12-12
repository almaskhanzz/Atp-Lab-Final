<!DOCTYPE html>
<html>
<head>
	<title>Admin Details</title>
</head>
<body>
	<h1>Admin Details</h1>
	<a href="<?php echo e(route('admin.index')); ?>">Home</a>
	<a href="<?php echo e(route('logout.index')); ?>">logout</a> <br><br>
	
	<table border="4">
		
		<tr>
			<td>User Name</td>
			<td><?php echo e($user->username); ?></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><?php echo e($user->name); ?></td>
		</tr>

	</table>

   

	</table>
</body>
</html>