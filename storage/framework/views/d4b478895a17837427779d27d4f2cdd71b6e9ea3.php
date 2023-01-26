<?php $__env->startSection('content'); ?>

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="<?php echo e(route('cursos.create')); ?>" class="waves-effect waves-light btn dark-primary-color">Registrar</a>
            
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>CODIGO</th>
                        <th>NOMBRE</th>
                        <th>DESCRIPCION</th>
                        <th>DURACION</th>
                        <th>REQUISITO</th>
                        <th>NIVEL</th>
                        <th>ESTADO</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($item->cursos->codigo); ?></td>
                                <td><?php echo e($item->nombre); ?></td>
                                <td><?php echo e($item->descripcion); ?></td>
                                <td><?php echo e($item->cursos->duracion); ?></td>
                                <td><?php echo e($item->cursos->requisito); ?></td>
                                <td><?php echo e($item->cursos->nivel); ?></td>
                                <td><?php echo e($item->estado); ?></td>
                                <td>
                                    <a href="<?php echo e(route('cursos.edit', [$item->id])); ?>"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="<?php echo e(route('cursos.destroy', [$item->id])); ?>"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/grupo02cc/cicis/resources/views/cursos/index.blade.php ENDPATH**/ ?>