<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<form action="<?php echo e(route('dropzone')); ?>" class="dropzone" method="post" enctype="multipart/form-data"><?php echo csrf_field(); ?></form>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Arnab\Desktop\hhh\laravel\resources\views/file/dropzone.blade.php ENDPATH**/ ?>