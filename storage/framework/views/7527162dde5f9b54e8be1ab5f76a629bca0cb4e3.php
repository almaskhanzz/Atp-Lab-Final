<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome, <?php echo e($user->name); ?></h1>
	<a href="<?php echo e(route('logout.index')); ?>">logout</a>

</body>
</html>