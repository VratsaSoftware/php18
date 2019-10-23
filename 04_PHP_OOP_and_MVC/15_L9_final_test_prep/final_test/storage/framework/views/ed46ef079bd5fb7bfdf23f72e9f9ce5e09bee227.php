<?php $__env->startSection('title', 'animals Create'); ?>

<?php $__env->startSection('content'); ?>
<?php echo Form::open(['route' => ['animals.store'], 'files'=>'true']); ?>	
	<label>animal name</label>
<?php echo Form::text('name', old('name'), ['placeholder'=>'animal name here', 'class'=>'form-control']); ?>

<label>animal age</label>
<?php echo Form::text('age', old('age'), ['placeholder'=>'animal age here', 'class'=>'form-control']); ?>

<?php echo Form::text('description', old('description'), ['placeholder'=>'animal description here', 'class'=>'form-control']); ?>

<?php echo Form::text('birthday', old('birthday'), ['placeholder'=>'yyyy-mm-dd', 'class'=>'form-control']); ?>

<label>image</label>
<?php echo Form::file('image'); ?>

<?php echo Form::select('type_id', $types_arr); ?>




<?php echo Form::submit('Click Me!', ['class'=> 'btn btn-success']); ?>

<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\php18\04_PHP_OOP_and_MVC\15_L9_final_test_prep\final_test\resources\views/animals/create.blade.php ENDPATH**/ ?>