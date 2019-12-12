<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>
	<h1>User List</h1>
	<a href="<?php echo e(route('admin.index')); ?>">Home</a> | 
	<a href="<?php echo e(route('logout.index')); ?>">logout</a> <br><br>
	
	
	<table border="4">
		<thead>
			<tr>
				<th width="20%">Name</th>
				<th width="20%">User Name</th>
				
				<th width="20%"h>ACTION</th>
			</tr>
		</thead>

	 <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		
			<tr>
				<td><?php echo e($s->name); ?></td>
				<td><?php echo e($s->username); ?></td>
                <td th width="20%">
                <a href="<?php echo e(route('admin.delete',$s->id)); ?>">Delete</a>
                </td>
				
			</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>
	
</body>
</html>