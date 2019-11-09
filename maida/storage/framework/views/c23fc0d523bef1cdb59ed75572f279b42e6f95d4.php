<!DOCTYPE html>
<html>



<?php $__env->startSection('name', 'Contact'); ?>
    
<?php $__env->startSection('header'); ?>
    ##parent-placeholder-594fd1615a341c77829e83ed988f137e1ba96231##
<?php $__env->stopSection(); ?>

<head>
<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container"style="background-color:green">
        <div class="row">
            <div class="col-sm-12">
            <h1>Contact Us</h1>
            Let us know what you think of PakistanToursGuide.com. We would be more than happy to hear from you.
            </div>
        </div>
        <div class="row"style=>
            <div class="col-sm-6">
                <input type="text"placeholder="Your Name"size=55>
            </div>
            <div class="col-sm-6">
                <input type="email"placeholder="Your Email"size=55>
            </div>
        </div><br>
        <div class="row">
            <div class="col-sm-12">
                <input type="text"placeholder="Subject"size=121>
            </div>
        </div><br>
        <div class="row">
            <div class="col-sm-12">   
                <input type="text"placeholder="Message"size=121>
            </div>
        </div><br>
</div>
</body>
</html>
<?php echo $__env->make('layout.lay', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\maida\resources\views/contact.blade.php ENDPATH**/ ?>