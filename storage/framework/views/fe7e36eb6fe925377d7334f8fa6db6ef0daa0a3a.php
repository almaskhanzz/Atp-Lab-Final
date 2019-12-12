<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	
	
</head>
<body>

<fieldset>
	<legend>Login</legend>

	<?php if($errors->any()): ?>
                      <div class="alert alert-danger">
                          <ul>
                              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <li><font color="red"><?php echo e($error); ?></font></li>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </ul>
                      </div>
				  <?php endif; ?>
				  
				  <div class="alert alert-danger">
					<font color="red"><?php echo e(session('msg')); ?></font>
				</div>
	<form method="post" >
		
	<table>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Submit"></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td><a href="<?php echo e(route('registration.index')); ?>">Registration</a></td>
        </tr>
	</table>
	</form>
</fieldset>

<div>
	<?php echo e(session('msg')); ?>

</div>
</body>
</html>