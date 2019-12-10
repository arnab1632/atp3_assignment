<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Image Gallery</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/dataTables.bootstrap.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('js/jquery.dataTables.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('js/dataTables.bootstrap4.js')); ?>" type="text/javascript"></script>

    <link href="<?php echo e(asset('css/font-awesome.css')); ?>" rel="stylesheet"/>

    <link href="<?php echo e(asset('css/dropzone.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('js/dropzone.js')); ?>"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <?php if(auth()->guard()->guest()): ?>
                       
                        <li><a class="nav-link" href="<?php echo e(route('viewfile')); ?>">Gallery</a></li>
                        <?php else: ?>
                        
                        <?php endif; ?>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                        <li><a class="nav-link" href="<?php echo e(route('logout')); ?>">Logout</a></li>    
                                                   
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH C:\Users\Arnab\Desktop\lex\resources\views/layouts/app.blade.php ENDPATH**/ ?>