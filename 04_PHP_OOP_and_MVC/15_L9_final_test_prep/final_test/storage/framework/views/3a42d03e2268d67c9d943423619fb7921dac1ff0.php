<?php $__env->startSection('title', 'animal Edit'); ?>

<?php $__env->startSection('content'); ?>
<?php echo Form::model($animal, ['route' => ['animals.update', $animal->id], 'files'=>'true', 'method'=>'PUT']); ?>	
	<label>animal name</label>
<?php echo Form::text('name', $animal->name, ['class'=>'form-control']); ?>

<label>animal age</label>
<?php echo Form::text('age', $animal->age, ['class'=>'form-control']); ?>

<?php echo Form::text('description', $animal->description, [ 'class'=>'form-control']); ?>

<?php echo Form::text('birthday', $animal->date_of_birth, ['class'=>'form-control']); ?>

<label>image</label>
<?php echo Form::file('image'); ?>

<?php echo Form::select('type_id', $types_arr); ?>




<?php echo Form::submit('Click Me!', ['class'=> 'btn btn-success']); ?>

<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\php18\04_PHP_OOP_and_MVC\15_L9_final_test_prep\final_test\resources\views/animals/edit.blade.php ENDPATH**/ ?>