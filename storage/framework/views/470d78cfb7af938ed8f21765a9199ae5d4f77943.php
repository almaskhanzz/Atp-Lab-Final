<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome, <?php echo e($user->name); ?></h1>
	<a href="<?php echo e(route('admin.show')); ?>">View Profile</a>
    <a href="<?php echo e(route('admin.userList')); ?>">Customer List</a>
	<a href="<?php echo e(route('admin.create')); ?>">Add Book</a>
	<a href="<?php echo e(route('logout.index')); ?>">logout</a>

</body>
</html>