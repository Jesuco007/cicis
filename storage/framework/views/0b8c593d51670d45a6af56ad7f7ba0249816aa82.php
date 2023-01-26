<?php $__env->startSection('content'); ?>

<div class="row">
    <form method="POST" action="<?php echo e(route('ofertas.store')); ?>">
        <?php echo csrf_field(); ?>

        <div class="col s12 m10 offset-m1 l6 offset-l3 xl6 offset-xl3">
            <div id="panel-left" class="card">

                <div class="card-content">
                    <span class="card-title primary-text-color primary-text-style">
                        Formulario de Registro
                    </span>
                    <div class="row">
                        <div class="col s12 divider"></div>
                    </div>

                    <div class="row">

                        <div class="input-field col s12 m4">
                            <input id="fecha_inicio" type="date" class="validate" name="fecha_inicio" value="<?php echo e(old('fecha_inicio')); ?>" required>
                            <label for="fecha_inicio">fecha_inicio:</label>
                            <?php $__errorArgs = ['fecha_inicio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="help-block red-text"> <?php echo e($message); ?> </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="input-field col s12 m4">
                            <input id="fecha_fin" type="date" class="validate" name="fecha_fin" value="<?php echo e(old('fecha_fin')); ?>" required>
                            <label for="fecha_fin">fecha_fin:</label>
                            <?php $__errorArgs = ['fecha_fin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="help-block red-text"> <?php echo e($message); ?> </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="input-field col s12 m4">
                            <input id="estado" type="text" class="validate" name="estado" value="<?php echo e(old('estado')); ?>" required>
                            <label for="estado">estado:</label>
                            <?php $__errorArgs = ['estado'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="help-block red-text"> <?php echo e($message); ?> </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="input-field col s12 m4">
                            <input id="horario" type="text" class="validate" name="horario" value="<?php echo e(old('horario')); ?>" required>
                            <label for="horario">horario:</label>
                            <?php $__errorArgs = ['horario'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="help-block red-text"> <?php echo e($message); ?> </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="input-field col s12 m4">
                            <select name="usuarios_id" id="usuarios_id" required>
                                <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($usuario->id); ?>"><?php echo e($usuario->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <label for="usuarios_id">Tipo:</label>
                            <?php $__errorArgs = ['usuarios_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="help-block red-text"> <?php echo e($message); ?> </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="input-field col s12 m4">
                            <select name="cursos_codigo" id="cursos_codigo" required>
                                <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($curso->codigo); ?>"><?php echo e($curso->nombre); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <label for="cursos_codigo">Tipo:</label>
                            <?php $__errorArgs = ['cursos_codigo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="help-block red-text"> <?php echo e($message); ?> </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                    <div class="card-action right-align">
                        <button type="submit" class="waves-effect waves-brown btn-flat red-text bold" onclick="showProgress()">Guardar</button>
                    </div>

                </div>

            </div>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>           
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/grupo02cc/cicis/resources/views/ofertas/create.blade.php ENDPATH**/ ?>