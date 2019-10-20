<?php $__env->startSection('title', 'Courses'); ?>

<?php $__env->startSection('content'); ?>
<?php if(Session::has('message')): ?>
	<div class="bg-success">
		<?php echo e(Session::get('message')); ?>

	</div>
<?php endif; ?>
<table class="table table-bordered">
	<?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td>
				<a href="<?php echo e(route('courses.show', $course->id)); ?>"><?php echo e($course->name); ?></a>
			</td>
			<td>
				<a href="<?php echo e(route('courses.edit', $course->id)); ?>" class="btn btn-warning">update</a>
			</td>
			<td>
				<form method="POST" action="<?php echo e(route('courses.destroy', $course->id)); ?>">
					<?php echo e(csrf_field()); ?>

					<?php echo e(method_field('DELETE')); ?>

					<button type="submit" class="btn btn-danger">DELETE</button>
				</form>
					
			</td>
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<a href="<?php echo e(route('courses.create')); ?>">Create Course</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\php18\04_PHP_OOP_and_MVC\13_L8_middleware\laravel_students_v6\resources\views/courses/index.blade.php ENDPATH**/ ?>