<?php $__env->startSection('titulo', 'Index Usuarios'); ?>
<?php $__env->startSection('contenido'); ?>
    <h1 class="text-center">Listado de Usuarios</h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(url('/')); ?>">Inicio</a></li>
        <li><a href="<?php echo e(route('usuarios.index')); ?>">Usuarios</a></li>
        <li class="active">Index</li>
    </ol>
    <?php if(Session::has('alert')): ?>
        <div class="alert alert-success"><?php echo Session::get('alert'); ?></div>
    <?php endif; ?>
    <div class="col-md-10 col-md-offset-1">
        <a href="<?php echo e(route('usuarios.create')); ?>" class="btn btn-success"><i class="fa fa-user" aria-hidden="true"></i> Crear Usuario</a>
    </div>
    <div class="col-md-10 col-md-offset-1">
        <!-- Datatables -->
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
            </tr>
            </tfoot>
            <tbody>
            <tr>
                <td>Tiger</td>
                <td>Nixon</td>
                <td>61</td>
            </tr>
            <tr>
                <td>Garrett</td>
                <td>Winters</td>
                <td>63</td>
            </tr>
            </tbody>
        </table>
        <!-- fin Datatables -->
    </div>
    <?php $__env->startSection('scripts'); ?>
        <script>
            $(document).ready(function() {
                $('#example').DataTable( {
                    "language": {
                        "search":"Buscar",
                        "lengthMenu": "Mostar _MENU_ registros por página",
                        "zeroRecords": "Lo sentimos, no encontramos lo que estas buscando",
                        "info": "Mostrando página _PAGE_ de _PAGES_",
                        "infoEmpty": "Registros no encontrados",
                        "infoFiltered": "(Filtrado en _MAX_ registros totales)"
                    }
                } );
            } );
        </script>
    <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>