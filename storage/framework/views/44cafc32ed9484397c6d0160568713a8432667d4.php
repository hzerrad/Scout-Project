<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap core CSS -->
        <link href="<?php echo e(asset('assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

        <!-- Custom css -->
        <link href="<?php echo e(asset('assets/css/navbar.css')); ?>" rel="stylesheet">

        <!-- Website icon -->
        <link rel="icon"
              type="image/png"
              href="https://upload.wikimedia.org/wikipedia/en/thumb/6/69/Algerian_Muslim_Scouts.svg/1200px-Algerian_Muslim_Scouts.svg.png">

        <!-- Custom fonts for this template -->
        <link href="<?php echo e(asset('assets/vendor/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo e(asset('assets/vendor/simple-line-icons/css/simple-line-icons.css')); ?>" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template -->
        <link href="<?php echo e(asset('assets/css/full-slider.css')); ?>" rel="stylesheet">
    	<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>

        <script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title> فوج الفلاح  </title>

    </head>
    <body>
        <div id="app">
            <?php echo $__env->make("includes.navbar", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <main>
                <?php echo $__env->yieldContent('content'); ?>

            </main>
        </div>
    </body>
    <?php echo $__env->make("includes.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</html>
