<?php $__env->startSection('title', 'Courses Create'); ?>

<?php $__env->startSection('content'); ?>
<div class="col-sm-8">
<?php echo Form::model($homework, ['route' => ['homeworks.update', $homework->id], 'files'=>'true', 'method' => 'PATCH']); ?>	
	<label>Old HW</label>
	<p><?php echo e($homework->filename); ?></p>
	<label>new HW</label>
	<p><?php echo Form::file('homework'); ?></p>
	<?php echo Form::submit('Upload!', ['class'=> 'btn btn-success']); ?>

<?php echo Form::close(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\php18\04_PHP_OOP_and_MVC\14_L8_files\laravel_students_v6\resources\views/homeworks/edit.blade.php ENDPATH**/ ?>