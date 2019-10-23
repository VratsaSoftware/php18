<?php $__env->startSection('title', 'animal Info'); ?>

<?php $__env->startSection('content'); ?>

	<p><?php echo e($animal->name); ?></p>
	<p><?php echo e($animal->type->type); ?></p>

	<img src="<?php echo e(asset('animal_images')); ?>/<?php echo e($animal->filename); ?>">
			
<a href="<?php echo e(route('animals.edit', $animal->id )); ?>">Edit animal</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\php18\04_PHP_OOP_and_MVC\15_L9_final_test_prep\final_test\resources\views/animals/show.blade.php ENDPATH**/ ?>