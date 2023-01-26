<?php $__env->startSection('content'); ?>

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="<?php echo e(route('ofertas.create')); ?>" class="waves-effect waves-light btn dark-primary-color">Registrar</a>
            
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>FECHA INICIO</th>
                        <th>FECHA FIN</th>
                        <th>ESTADO</th>
                        <th>HORARIO</th>
                        <th>USUARIOS</th>
                        <th>CURSOS</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $ofertas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oferta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($oferta->id); ?></td>
                                <td><?php echo e($oferta->fecha_inicio); ?></td>
                                <td><?php echo e($oferta->fecha_fin); ?></td>
                                <td><?php echo e($oferta->estado); ?></td>
                                <td><?php echo e($oferta->horario); ?></td>
                                <td><?php echo e($oferta->usuarios->name); ?></td>
                                <td><?php echo e($oferta->cursos->nombre); ?></td>
                                <td>
                                    <a href="<?php echo e(route('ofertas.edit', [$oferta->id])); ?>"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="<?php echo e(route('ofertas.destroy', [$oferta->id])); ?>"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/grupo02cc/cicis/resources/views/ofertas/index.blade.php ENDPATH**/ ?>