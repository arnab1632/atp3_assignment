<?php $__env->startSection('content'); ?>
<div class="container">
	<?php if(session('success')): ?>
		<div class="alert alert-success">
			<strong><?php echo e(session('success')); ?></strong>
		</div>
	<?php endif; ?>
	<p>
		<a href="<?php echo e(route('formfile')); ?>" class="btn btn-primary">Upload File</a>
		<a href="<?php echo e(route('formfile')); ?>" class="btn btn-primary">Standard</a>
		<a href="<?php echo e(route('formfile')); ?>" class="btn btn-primary">Upload F</a>
	</p>
	<div class="row">
		<?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col-md-4">
			<div class="card">
				<img class="card-img-top" src="<?php echo e(Storage::url($file->path)); ?>">
				<div class="card-body">
					<strong class="card-title"><?php echo e($file->title); ?></strong>
					<p class="card-text"><?php echo e($file->created_at->diffForHumans()); ?></p>
					<form action="<?php echo e(route('deletefile', $file->id)); ?>" method="post">
						<?php echo csrf_field(); ?>
						<?php echo method_field('DELETE'); ?>
						<button type="submit" class="btn btn-danger">Delete</button>
						<a href="" class="btn btn-warning">Edit</a>
						<a href="<?php echo e(route('downloadfile', $file->id)); ?>" class="btn btn-success">Download</a>
					</form>
				</div>
			</div>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Arnab\Desktop\lex\resources\views/file/index.blade.php ENDPATH**/ ?>