<?php $__env->startSection('content'); ?>

<div class="row">
    <form method="POST" action="<?php echo e(route('usuarios.store')); ?>">
        <?php echo csrf_field(); ?>

        <div class="col s12 m10 offset-m1">
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
                            <input id="name" type="text" class="validate" name="name" value="<?php echo e(old('name')); ?>" required>
                            <label for="name">Nombres:</label>
                            <?php $__errorArgs = ['name'];
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
                            <input id="email" type="text" class="validate" name="email" value="<?php echo e(old('email')); ?>" required>
                            <label for="email">email:</label>
                            <?php $__errorArgs = ['email'];
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
                            <input id="password" type="password" class="validate" name="password" value="<?php echo e(old('password')); ?>" required>
                            <label for="password">password:</label>
                            <?php $__errorArgs = ['password'];
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
                            <option value="DIR">Director</option>
                            <option value="COO">Coordinador</option>
                            <option value="SEC">Secretaria</option>
                            <option value="EST">Estudiante</option>
                        </select>
                        
                        <label for="tipo">tipo de usuario:</label>
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

                    <div class="input-field col s12 m4">
                        <select name="persona_id" id="persona_id" required>
                            <?php $__currentLoopData = $personas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $persona): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($persona->id); ?>"><?php echo e($persona->nombre. ' '.$persona->ci); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <label for="persona_id">personas:</label>
                        <?php $__errorArgs = ['persona_id'];
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
                    <button type="submit" class="waves-effect waves-brown btn-flat red-text bold" onclick="showProgress()">Guardar</button>

                </div>

            </div>

        </div>
</div>
</form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alfreding0\Documents\web-projects\yisu\cicis\resources\views/usuarios/create.blade.php ENDPATH**/ ?>