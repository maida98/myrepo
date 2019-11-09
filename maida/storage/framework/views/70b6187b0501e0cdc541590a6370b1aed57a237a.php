<html>
    <head>
        <title>Tourist Guide- <?php echo $__env->yieldContent('name'); ?></title>
    </head>
    <body>
        <?php $__env->startSection('header'); ?>

         <div class="container-fluid"style="background-color:#62A42F">
        <div class="row">
                <div class="col-sm-6">
                    <h1>TOURIST GUIDE</h1>
                 <div>
                <div class="col-sm-2">
                    <a href="<?php echo e(url('/home')); ?>"><h1>Home</h1></a>
                </div>
                <div class="col-sm-2">
                    <a href="<?php echo e(url('/contact')); ?>"><h1>Contact</h1></a>      
                </div>
                <div class="col-sm-2">
                    <a href="<?php echo e(url('/about')); ?>"><h1>About</h1></a>      
                </div>
        </div>  
</div>
<?php echo $__env->yieldSection(); ?>

    </body>
</html><?php /**PATH C:\xampp\htdocs\maida\resources\views/layout/lay.blade.php ENDPATH**/ ?>