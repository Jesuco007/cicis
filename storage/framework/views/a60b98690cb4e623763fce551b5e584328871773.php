<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('You are logged in!')); ?>

                </div>
            </div>
        </div>
        <div class="center">
            <h3><strong>C.I.C.I.S.</strong></h3>
            <h4>Centro de Investigación y Capacitación Informática y Sistemas</h4>
            <h5 style="color: blue">Facultad Integral del Chaco</h5>
            <h5 style="color: red"><strong>U.A.G.R.M.</strong></h5>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alfreding0\Documents\web-projects\yisu\cicis\resources\views/home.blade.php ENDPATH**/ ?>