<?php $__env->startSection('titulo', 'Crear Usuario'); ?>
<?php $__env->startSection('contenido'); ?>
    <h1 class="text-center">Crear Usuarios</h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(url('/')); ?>">Inicio</a></li>
        <li><a href="<?php echo e(route('usuarios.index')); ?>">Usuarios</a></li>
        <li class="active">Crear Usuarios</li>
    </ol>
    <!-- Formulario -->
    <div class="col-md-8 col-md-offset-2">
        <form action="<?php echo e(route('usuarios.store')); ?>" method="POST">
            <?php echo e(csrf_field()); ?>

            <div class="form-group<?php echo e($errors->has('nombre') ? ' has-error' : ''); ?>">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" value="<?php echo e(old('nombre')); ?>" name="nombre" required class="form-control" placeholder="Ingrese Nombre">
                    <?php if($errors->has('nombre')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('nombre')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group<?php echo e($errors->has('apellido') ? ' has-error' : ''); ?>">
                <div class="form-group">
                    <label>Apellido</label>
                    <input type="text" value="<?php echo e(old('apellido')); ?>" name="apellido" required class="form-control" placeholder="Ingrese Apellido">
                    <?php if($errors->has('apellido')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('apellido')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password"  name="password" required class="form-control" placeholder="Ingrese Contraseña">
                    <?php if($errors->has('password')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('password')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                <div class="form-group">
                    <label>Repetir Contraseña</label>
                    <input type="password" name="password_confirmation" required class="form-control" placeholder="Repetir Contraseña">
                    <?php if($errors->has('password_confirmation')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                <div class="form-group">
                    <label>Correo Electrónico</label>
                    <input type="email" value="<?php echo e(old('email')); ?>" name="email" class="form-control" required placeholder="Ingrese Correo Electrónico">
                    <?php if($errors->has('email')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group<?php echo e($errors->has('direccion') ? ' has-error' : ''); ?>">
                <div class="form-group">
                    <label>Dirección</label>
                    <input type="text" value="<?php echo e(old('direccion')); ?>" name="direccion" class="form-control" required placeholder="Ingrese Dirección">
                    <?php if($errors->has('direccion')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('direccion')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group<?php echo e($errors->has('telefono') ? ' has-error' : ''); ?>">
                <div class="form-group">
                    <label>Teléfono</label>
                    <input type="number" value="<?php echo e(old('telefono')); ?>" name="telefono" class="form-control" required placeholder="Ingrese Teléfono">
                    <?php if($errors->has('telefono')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('telefono')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Crear Usuario</button>
                <a href="<?php echo e(route('usuarios.index')); ?>" class="btn btn-danger">Volver Atrás</a>
            </div>
        </form>
    </div>
    <!-- Fin Formulario-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>