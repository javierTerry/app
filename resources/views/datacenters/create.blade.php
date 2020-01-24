@extends('layouts.main')
@section('contenido')
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
						Registrar Nuevo Centro de Datos.
					</div>
					<div class="card-body">
						<form action="{{route('datacenters.store')}}" method="POST">
							@csrf
							<div class="form-group">
								<label for="">host</label>
								<input type="text" class="form-control" name="host">
							</div>
							<div class="form-group">
								<label for="">ip</label>
								<input type="text" class="form-control" name="ip">
							</div>

							<div class="form-group">
								<label for="">equipo</label>
								<input type="text" class="form-control" name="equipo">
							</div>

							<div class="form-group">
								<label for="">marca</label>
								<input type="text" class="form-control" name="marca">
							</div>

							<div class="form-group">
								<label for="">modelo</label>
								<input type="text" class="form-control" name="modelo">
							</div>

							<div class="form-group">
								<label for="">serie</label>
								<input type="text" class="form-control" name="serie">
							</div>

							<div class="form-group">
								<label for="">site</label>
								<input type="text" class="form-control" name="site">
							</div>

							<div class="form-group">
								<label for="">fase</label>
								<input type="text" class="form-control" name="fase">
							</div>

							<div class="form-group">
								<label for="">pod</label>
								<input type="text" class="form-control" name="pod">
							</div>

							<div class="form-group">
								<label for="">rack</label>
								<input type="text" class="form-control" name="rack">
							</div>

							<div class="form-group">
								<label for="">ur</label>
								<input type="text" class="form-control" name="ur">
							</div>

							<div class="form-group">
								<label for="">fuente</label>
								<input type="text" class="form-control" name="fuente">
							</div>

							<button type="submit" class="btn btn-primary">Guardar</button>
							<a href="{{route('datacenters.index')}}" class="btn btn-danger">Cancelar</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection