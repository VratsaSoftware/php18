<?php $__env->startSection('title', 'Course Edit'); ?>

<?php $__env->startSection('content'); ?>
<form method="POST" action="<?php echo e(route('courses.update', $course->id)); ?>">
	<?php echo e(csrf_field()); ?>

	<?php echo e(method_field('PUT')); ?>

	<label>Course name</label>
	<input type="text" name="course_name" value="<?php echo e($course->name); ?>">
	<?php if($errors->has('course_name')): ?>
	<div class="col-sm-8 col-sm-offset-1 text-danger">
		<?php echo e($errors->first('course_name')); ?> 
	</div>
<?php endif; ?>
	<input type="submit" name="submit" value="create" class="btn btn-success">
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\php18\04_PHP_OOP_and_MVC\13_L8_middleware\laravel_students_v6\resources\views/courses/edit.blade.php ENDPATH**/ ?>