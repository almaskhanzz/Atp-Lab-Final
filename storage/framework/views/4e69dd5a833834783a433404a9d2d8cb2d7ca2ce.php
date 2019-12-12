<!DOCTYPE html>
<html>
<head>
	<title>Add Book</title>
</head>
<body>
	<h1>Add Book</h1>
	<a href="<?php echo e(route('admin.index')); ?>">Home</a> | 
	<a href="<?php echo e(route('logout.index')); ?>">logout</a> <br><br>
	
	<form method="post">
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><font color="red"><?php echo e($error); ?></font></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
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