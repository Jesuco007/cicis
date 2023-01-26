

<nav class="navbar nav-extended no-padding">
    <div class="nav-wrapper">
        <?php if(auth()->guard()->check()): ?>
            
            <ul id="nav-mobile" class="right">
                <li><a href="<?php echo e(url('/home')); ?>" class="right"><strong>Home</strong></a></li>
                <li><a href="<?php echo e(route('buscador')); ?>"><i class="material-icons">search</i></a></li>
                <li><a id="dark-mode-toggle" class="dropdown-trigger" href="#!" data-target="tema"><i class="material-icons right">brightness_6</i></a></li>
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
                        <?php echo e(Auth::user()->name.' | '.Auth::user()->tipo); ?>

                    </a>
                </li>
            </ul>
            
        <?php else: ?>
            <ul>
                <li><a id="dark-mode-toggle" class="dropdown-trigger" href="#!" data-target="tema"><i class="material-icons right">brightness_6</i></a></li>
                <li><a href="<?php echo e(route('login')); ?>">Log in</a></li>
            </ul>


            
        <?php endif; ?>

        <?php echo $__env->yieldContent('breadcrumb'); ?>
    </div>
</nav>



<ul id="tema" class="dropdown-content">
    <li><a id="lightmode-old" href="#!">Adultos Dia</a></li>
    <li><a id="darkmode-old" href="#!">Adultos Noche</a></li>
    <li><a id="lightmode-young" href="#!">Jóvenes</a></li>
    <li><a id="lightmode-child" href="#!">Niños</a></li>
</ul>
<?php /**PATH C:\Users\alfreding0\Documents\web-projects\yisu\cicis\resources\views/layouts/header.blade.php ENDPATH**/ ?>