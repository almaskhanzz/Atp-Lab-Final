<!DOCTYPE html>
<html>
<head>
	<title>Delete User</title>
	
</head>
<body>
	<h1>Delete User:<?php echo e($user->name); ?></h1>
	<a href="<?php echo e(route('admin.index')); ?>">Home</a> | 
	<a href="<?php echo e(route('logout.index')); ?>">logout</a> <br><br>
	
	<table border="4">
		
		<tr>
			<td>User Name</td>
			<td><?php echo e($user->name); ?></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><?php echo e($user->name); ?></td>
		</tr>
		
    </table>
    <form method="post">
        <h3>User will be Parmanently deleted..</h3>
        <input type="submit" name="submit" value="Confirm">
    </form>
</body>
</html>