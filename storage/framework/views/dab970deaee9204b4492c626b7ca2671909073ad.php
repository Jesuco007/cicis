<?php $__env->startSection('content'); ?>

<div class="row">
    <form method="POST" action="<?php echo e(route('cursos.update', [$item->id])); ?>">
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
                            <input id="nombre" type="text" class="validate" name="nombre" value="<?php echo e($item->nombre); ?>" required>
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
                            <input id="descripcion" type="text" class="validate" name="descripcion" value="<?php echo e($item->descripcion); ?>" required>
                            <label for="descripcion">descripcion:</label>
                            <?php $__errorArgs = ['descripcion'];
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
                            <input id="duracion" type="text" class="validate" name="duracion" value="<?php echo e($item->cursos->duracion); ?>" required>
                            <label for="duracion">duracion:</label>
                            <?php $__errorArgs = ['duracion'];
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
                            <input id="requisito" type="text" class="validate" name="requisito" value="<?php echo e($item->cursos->requisito); ?>" required>
                            <label for="requisito">requisito:</label>
                            <?php $__errorArgs = ['requisito'];
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
                            <input id="nivel" type="text" class="validate" name="nivel" value="<?php echo e($item->cursos->nivel); ?>" required>
                            <label for="nivel">nivel:</label>
                            <?php $__errorArgs = ['nivel'];
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
                            <input id="estado" type="text" class="validate" name="estado" value="<?php echo e($item->estado); ?>" required>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alfreding0\Documents\web-projects\yisu\cicis\resources\views/cursos/edit.blade.php ENDPATH**/ ?>