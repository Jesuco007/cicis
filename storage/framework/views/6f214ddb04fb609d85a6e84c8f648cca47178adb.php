<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>C.I.C.I.S</title>

    <?php echo $__env->make('layouts.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>

<body>
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main class="primary-background">
        <div class="container"></div>
        <div class="row">
            <div class="col s12 m12 l12 l12 xl10 offset-xl1">
                
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>

        
        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </main>

    <footer class="page-footer" style="background-color: black; margin-top: 20em">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Visitas: <?php echo e(session('visitas')); ?></h5>
                    <p class="grey-text text-lighten-4">Centro de Investigación y Capacitacion Informatica y Sistemas.</p>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2014 Copyright 
                
            </div>
        </div>
    </footer>

    <?php echo $__env->make('layouts.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html>
<?php /**PATH /home/grupo02cc/cicis/resources/views/layouts/app.blade.php ENDPATH**/ ?>