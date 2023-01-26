<?php $__env->startSection('content'); ?>

    <div class="row" style="margin-top: 5%">
        <?php if(auth()->user()->tipo !== 'EST'): ?>
        <div class="col s4">
            <a href="<?php echo e(route('servicios.create')); ?>" class="waves-effect waves-light btn dark-primary-color">Registrar</a>
        </div>
        <?php endif; ?>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>CODIGO</th>
                        <th>NOMBRE</th>
                        <th>DESCRIPCION</th>
                        <th>COSTO</th>
                        <th>ESTADO</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($item->servicios->codigo); ?></td>
                                <td><?php echo e($item->nombre); ?></td>
                                <td><?php echo e($item->descripcion); ?></td>
                                <td><?php echo e($item->servicios->costo); ?></td>
                                <td><?php echo e($item->estado); ?></td>
                                <td>
                                    <?php if(auth()->user()->tipo !== 'EST'): ?>
                                    <a href="<?php echo e(route('servicios.edit', [$item->id])); ?>"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="<?php echo e(route('servicios.destroy', [$item->id])); ?>"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alfreding0\Documents\web-projects\yisu\cicis\resources\views/servicios/index.blade.php ENDPATH**/ ?>