<!DOCTYPE html>
<html>
<head>
	<title>book List</title>
	
</head>
<body>
	<h1>Book List</h1>
	<a href="<?php echo e(route('admin.index')); ?>">Home</a> | 
	<a href="<?php echo e(route('logout.index')); ?>">logout</a> <br><br>
	
	<table border="3">
		<thead>
			<tr>
				<th>Book Name</th>
				<th>Book Title</th>
				<th>Book Category</th>
                <th>Book Price</th>
			</tr>
		</thead>

	 <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($s->bookname); ?></td>
				<td><?php echo e($s->booktitle); ?></td>
				<td><?php echo e($s->category); ?></td>
                <td><?php echo e($s->price); ?></td>

			</tr>
		
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>
	
</body>
</html>