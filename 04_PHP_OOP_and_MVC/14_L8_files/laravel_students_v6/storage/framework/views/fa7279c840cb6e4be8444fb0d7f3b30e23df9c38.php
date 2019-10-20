<?php $__env->startSection('title', 'Lectures'); ?>

<?php $__env->startSection('content'); ?>
<?php if(Session::has('message')): ?>
	<div class="bg-success">
		<?php echo e(Session::get('message')); ?>

	</div>
<?php endif; ?>
<table class="table table-bordered">
	
	<?php $__currentLoopData = $lectures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lecture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td>
				<a href="<?php echo e(route('lectures.show', $lecture->id)); ?>"><?php echo e($lecture->name); ?></a>
			</td>
			<?php if(Auth::user()->role == 'admin'): ?>
			<td>
				<a href="<?php echo e(route('lectures.edit', $lecture->id)); ?>" class="btn btn-warning">update</a>
			</td>
			<td>
				<form method="POST" action="<?php echo e(route('lectures.destroy', $lecture->id)); ?>">
					<?php echo e(csrf_field()); ?>

					<?php echo e(method_field('DELETE')); ?>

					<button type="submit" class="btn btn-danger">DELETE</button>
				</form>
					
			</td>
			<?php else: ?>
				<td>
					<?php if( !empty($lecture->homeworks) ): ?>
						<?php $__currentLoopData = $lecture->homeworks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lhw): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>							
								<?php if( $lhw->user_id == Auth::user()->id ): ?>
									<?php echo e($lhw->filename); ?>

									<a href="<?php echo e(route('homeworks.edit', $lhw->id)); ?>">Edit HW</a>								
								<?php endif; ?>							
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endif; ?>
				</td>
				<td>
					<a href="<?php echo e(route('homeworks.create', [ 'lecture_id' => $lecture->id ])); ?>">Качи ново домашно</a>
				</td>
			<?php endif; ?>			
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<a href="<?php echo e(route('lectures.create')); ?>">Create lecture</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\php18\04_PHP_OOP_and_MVC\14_L8_files\laravel_students_v6\resources\views/lectures/index.blade.php ENDPATH**/ ?>