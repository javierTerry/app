<?php $__env->startSection('contenido'); ?>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<br>
	<br>
	<br>
	<div class="container">
		<br>
		<br>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						Actualizar Centro de Datos.
					</div>
					<div class="card-body">
						<form action="<?php echo e(route('datacenters.update',$datacenter->id)); ?>" method="POST">
							<?php echo method_field('put'); ?>
							<?php echo csrf_field(); ?>
							<div class="form-group">
								<label for="">Nombre</label>
								<input type="text" class="form-control" value="<?php echo e($datacenter->nombre); ?>" name="nombre">
							</div>
							<div class="form-group">
								<label for="">Ubicación</label>
								<input type="text" class="form-control" value="<?php echo e($datacenter->ubicacion); ?>" name="ubicacion">
							</div>
							<button type="submit" class="btn btn-primary">Guardar</button>
							<a href="<?php echo e(route('datacenters.index')); ?>" class="btn btn-danger">Cancelar</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app\resources\views/datacenters/edit.blade.php ENDPATH**/ ?>