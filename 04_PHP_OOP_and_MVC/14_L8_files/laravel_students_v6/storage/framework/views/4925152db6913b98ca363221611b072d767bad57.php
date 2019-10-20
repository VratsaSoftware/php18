<?php $__env->startSection('title', 'Courses Create'); ?>

<?php $__env->startSection('content'); ?>
<?php echo Form::open(['route' => ['homeworks.store'], 'files'=>'true']); ?>	
	<label>HW</label>
<?php echo Form::file('homework'); ?>

<?php echo Form::hidden('lecture_id', $lecture_id); ?>

	

<?php echo Form::submit('Upload!', ['class'=> 'btn btn-success']); ?>

<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\php18\04_PHP_OOP_and_MVC\14_L8_files\laravel_students_v6\resources\views/homeworks/create.blade.php ENDPATH**/ ?>