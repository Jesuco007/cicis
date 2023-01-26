
<?php $__env->startSection('content'); ?>
<h3>Buscador general</h3>

<div class="row">
    <form action="<?php echo e(route('buscador')); ?>">
        <div class="input-field col s10">
            <input id="buscar" type="text" class="validate" name="busqueda" value="<?php echo e(old('busqueda')); ?>" required>
            <label for="buscar">Texto de búsqueda general:</label>
        </div>
        <div class="input-field col s2">
            <button class="btn">Buscar</button>
        </div>
    </form>
</div>




<div class="row">
    <div class="divider"></div>
</div>


<h6>Resultados de búsqueda para el término: <?php echo e($busqueda); ?></h6>


<div class="row" style="margin-top: 5%">
    <h5>Resultados en Personas</h5>
    <div class="col s12 m12 l12 xl12">
        <table class="striped" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>CI</th>
                    <th style="text-decoration: underline;">NOMBRE</th>
                    <th>SEXO</th>
                    <th>TELEFONO</th>
                    <th>FECHA DE NACIMIENTO</th>
                    <th>NACIONALIDAD</th>
                    <th>TIPO</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $personas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $persona): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($persona->id); ?></td>
                    <td><?php echo e($persona->ci); ?></td>
                    <td style="text-decoration: underline;"><?php echo e($persona->nombre); ?></td>
                    <td><?php echo e($persona->sexo); ?></td>
                    <td><?php echo e($persona->telefono); ?></td>
                    <td><?php echo e($persona->fecha_nac); ?></td>
                    <td><?php echo e($persona->nacionalidad); ?></td>
                    <td><?php echo e($persona->tipo); ?></td>
                    <td>
                        <?php if( ! auth()->user()->tipo === 'EST'): ?>
                        <a href="<?php echo e(route('persona.edit', [$persona->id])); ?>"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                        <a href="<?php echo e(route('persona.destroy', [$persona->id])); ?>"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>





<div class="row">
    <div class="divider"></div>
</div>





<div class="row" style="margin-top: 5%">
    <h5>Resultados en Cursos</h5>
    <div class="col s12 m12 l12 xl12">
        <table class="striped" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>CODIGO</th>
                    <th style="text-decoration: underline;">NOMBRE</th>
                    <th>DESCRIPCION</th>
                    <th>DURACION</th>
                    <th>REQUISITO</th>
                    <th>NIVEL</th>
                    <th>ESTADO</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->cursos->codigo); ?></td>
                    <td style="text-decoration: underline;"><?php echo e($item->nombre); ?></td>
                    <td><?php echo e($item->descripcion); ?></td>
                    <td><?php echo e($item->cursos->duracion); ?></td>
                    <td><?php echo e($item->cursos->requisito); ?></td>
                    <td><?php echo e($item->cursos->nivel); ?></td>
                    <td><?php echo e($item->estado); ?></td>
                    <td>
                        <?php if( ! auth()->user()->tipo === 'EST'): ?>
                        <a href="<?php echo e(route('cursos.edit', [$item->id])); ?>"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                        <a href="<?php echo e(route('cursos.destroy', [$item->id])); ?>"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>





<div class="row">
    <div class="divider"></div>
</div>








<div class="row" style="margin-top: 5%">
    <h5>Resultados en Servicios</h5>
    <div class="col s12 m12 l12 xl12">
        <table class="striped" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>CODIGO</th>
                    <th style="text-decoration: underline;">NOMBRE</th>
                    <th>DESCRIPCION</th>
                    <th>COSTO</th>
                    <th>ESTADO</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $servicios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->servicios->codigo); ?></td>
                    <td style="text-decoration: underline;"><?php echo e($item->nombre); ?></td>
                    <td><?php echo e($item->descripcion); ?></td>
                    <td><?php echo e($item->servicios->costo); ?></td>
                    <td><?php echo e($item->estado); ?></td>
                    <td>
                        <?php if( ! auth()->user()->tipo === 'EST'): ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alfreding0\Documents\web-projects\yisu\cicis\resources\views/buscador.blade.php ENDPATH**/ ?>