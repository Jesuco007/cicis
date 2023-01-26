

<nav class="navbar nav-extended no-padding">
    <div class="nav-wrapper">
        <?php if(auth()->guard()->check()): ?>
            
            <ul id="nav-mobile" class="right">

                <?php $__currentLoopData = auth()->user()->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modulo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="<?php echo e(route($modulo->nombre_largo.'.index')); ?>"><?php echo e($modulo->nombre_corto); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                            class="material-icons left">exit_to_app</i>Salir</a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" hidden>
                        <?php echo csrf_field(); ?>
                    </form>
                </li>
                <li>
                    <a href="#" role="button">
                        <?php echo e(Auth::user()->name); ?>

                    </a>
                </li>
            </ul>
            

        <?php endif; ?>

        <?php if(auth()->guard()->check()): ?>
            <a href="<?php echo e(url('/home')); ?>" class="right"><strong>Home</strong></a>
        <?php else: ?>
            <ul>
                <li><a href="<?php echo e(route('login')); ?>">Log in</a></li>
            </ul>


            
        <?php endif; ?>

        <?php echo $__env->yieldContent('breadcrumb'); ?>
    </div>
</nav>
<?php /**PATH /home/grupo02cc/cicis/resources/views/layouts/header.blade.php ENDPATH**/ ?>