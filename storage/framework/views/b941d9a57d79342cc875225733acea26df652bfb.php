<?php $__env->startSection('contenido'); ?>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<br>
	<br>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						Listado de Centros de datos
						<a href="<?php echo e(route('datacenters.create')); ?>" class="btn btn-success btn-sm float-right">Nuevo Centro de datos</a>
					</div>
					<div class="card-body">
						<?php if(session('info')): ?>
							<div class="alert alert-success">
								<?php echo e(session('info')); ?>

							</div>
						<?php endif; ?>
						<table class="table table-hover table-sm">	
								<thead>	
									<th>Nombre</th>
									<th>Ubicación</th>
									<th>Acción</th>
								</thead>
								<tbody>	
									<?php $__currentLoopData = $datacenters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datacenter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr>	
											<td>	
												<?php echo e($datacenter->nombre); ?>

											</td>

											<td>	
												<?php echo e($datacenter->ubicacion); ?>

											</td>
											<td>
												<a href="<?php echo e(route('datacenters.edit',$datacenter->id)); ?>" class="btn btn-warning btn-sm">Editar</a>
												<a href="javascript: document.getElementById('delete-<?php echo e($datacenter->id); ?>').submit()" class="btn btn-danger btn-sm">Eliminar</a>
												<form id="delete-<?php echo e($datacenter->id); ?>" action="<?php echo e(route('datacenters.destroy', $datacenter->id)); ?>"method="POST">
												<?php echo method_field('delete'); ?>	
												<?php echo csrf_field(); ?>
												</form>
											</td>
										</tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
								</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app\resources\views/datacenters/index.blade.php ENDPATH**/ ?>