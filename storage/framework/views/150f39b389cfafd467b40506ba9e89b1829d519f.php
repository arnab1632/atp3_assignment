<?php $__env->startSection('content'); ?>
<div class="container">
	<?php if(session('success')): ?>
		<div class="alert alert-success">
			<strong><?php echo e(session('success')); ?></strong>
		</div>
	<?php endif; ?>
	<div class="row">
		<div class="col-md-12">
			<img class="img" src="<?php echo e(Storage::url($files->path)); ?>">
			<div class="body">
				<form>
					<input type="text" name="tittle" value="<?php echo e($files->title); ?>">
					<input type="text" name="description" value="<?php echo e($files->description); ?>">
				</form>
				<button type="submit" class="btn btn-success">Rotate Left</button>
				<button type="submit" class="btn btn-success">Rotate Right</button>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Arnab\Desktop\hhh\laravel\resources\views/edit/index.blade.php ENDPATH**/ ?>