<?php $__env->startSection('content'); ?>

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="<?php echo e(route('persona.create')); ?>" class="waves-effect waves-light btn dark-primary-color">Registrar</a>
            
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>CI</th>
                        <th>NOMBRE</th>
                        <th>SEXO</th>
                        <th>TELEFONO</th>
                        <th>FECHA DE NACIMIENTO</th>
                        <th>NACIONALIDAD</th>
                        <th>ACCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $personas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $persona): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($persona->id); ?></td>
                                <td><?php echo e($persona->ci); ?></td>
                                <td><?php echo e($persona->nombre); ?></td>
                                <td><?php echo e($persona->sexo); ?></td>
                                <td><?php echo e($persona->telefono); ?></td>
                                <td><?php echo e($persona->fecha_nac); ?></td>
                                <td><?php echo e($persona->nacionalidad); ?></td>
                                <td>
                                    <a href="<?php echo e(route('persona.edit', [$persona->id])); ?>"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="<?php echo e(route('persona.destroy', [$persona->id])); ?>"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alfreding0\Documents\web-projects\yisu\cicis\resources\views/persona/index.blade.php ENDPATH**/ ?>