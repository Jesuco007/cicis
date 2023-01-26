<?php $__env->startSection('content'); ?>

<div class="row">
    <form method="POST" action="<?php echo e(route('persona.update', [$persona->id])); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>

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
                            <input id="ci" type="number" class="validate" name="ci" value="<?php echo e($persona->ci); ?>" required>
                            <label for="ci">ci:</label>
                            <?php $__errorArgs = ['ci'];
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
                            <input id="nombre" type="text" class="validate" name="nombre" value="<?php echo e($persona->nombre); ?>" required>
                            <label for="nombre">Nombres:</label>
                            <?php $__errorArgs = ['nombre'];
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
                            <input id="sexo" type="text" class="validate" name="sexo" value="<?php echo e($persona->sexo); ?>" required>
                            <label for="sexo">sexo:</label>
                            <?php $__errorArgs = ['sexo'];
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
                            <input id="telefono" type="number" class="validate" name="telefono" value="<?php echo e($persona->telefono); ?>" required>
                            <label for="telefono">telefono:</label>
                            <?php $__errorArgs = ['telefono'];
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
                            <input id="fecha_nac" type="date" class="validate" name="fecha_nac" value="<?php echo e($persona->fecha_nac); ?>" required>
                            <label for="fecha_nac">fecha_nac:</label>
                            <?php $__errorArgs = ['fecha_nac'];
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
                            <input id="nacionalidad" type="text" class="validate" name="nacionalidad" value="<?php echo e($persona->nacionalidad); ?>" required>
                            <label for="nacionalidad">nacionalidad:</label>
                            <?php $__errorArgs = ['nacionalidad'];
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
                            <select name="tipo" id="tipo" required>
                                <option <?php echo e($persona->tipo==='ADMIN'?'selected':''); ?> value="ADMIN">Admin</option>
                                <option <?php echo e($persona->tipo==='PROPI'?'selected':''); ?> value="PROPI">Propietario</option>
                                <option <?php echo e($persona->tipo==='EMPLE'?'selected':''); ?> value="EMPLE">Empleado</option>
                                <option <?php echo e($persona->tipo==='COORD'?'selected':''); ?> value="COORD">Coordinador</option>
                                <option <?php echo e($persona->tipo==='STAFF'?'selected':''); ?> value="STAFF">Staff</option>
                                <option <?php echo e($persona->tipo==='DIREC'?'selected':''); ?> value="DIREC">Director de carrera</option>
                                <option <?php echo e($persona->tipo==='CLIEN'?'selected':''); ?> value="CLIEN">Cliente</option>
                            </select>
                            <label for="tipo">Tipo:</label>
                            <?php $__errorArgs = ['tipo'];
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

                    <div class="card-action right-align">
                        <button type="submit" class="waves-effect waves-brown btn-flat red-text bold" onclick="showProgress()">Guardar cambios</button>
                    </div>

                </div>

            </div>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/grupo02cc/cicis/resources/views/persona/edit.blade.php ENDPATH**/ ?>