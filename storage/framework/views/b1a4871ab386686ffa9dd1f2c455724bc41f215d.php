<?php $__env->startSection('content'); ?>

    <div class="row" style="margin-top: 5%">
        <div class="col s12">
            <a href="<?php echo e(route('roles.create')); ?>" class="waves-effect waves-light btn dark-primary-color">Registrar</a>
            <span style="margin-left: 5em">ROLES O MODULOS DE ACCESO QUE CADA USUARIO PUEDE ACCEDER</span>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>USUARIO</th>
                        <th>MÓDULO</th>
                        <th>NOMBRE RUTA</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($rol->id); ?></td>
                                <td>##<?php echo e($rol->user->name); ?>##</td>
                                <td><?php echo e($rol->nombre_largo); ?></td>
                                <td><?php echo e($rol->nombre_corto); ?></td>
                                
                                <td>
                                    
                                    <a href="<?php echo e(route('roles.destroy', [$rol->id])); ?>"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alfreding0\Documents\web-projects\yisu\cicis\resources\views/roles/index.blade.php ENDPATH**/ ?>