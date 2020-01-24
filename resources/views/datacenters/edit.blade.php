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
						Actualizar Centro de Datos.
					</div>
					<div class="card-body">
						<form action="{{route('datacenters.update',$datacenter->id)}}" method="POST">
							@method	('put')
							@csrf
							<div class="form-group">
								<label for="">host</label>
								<input type="text" class="form-control" value="{{$datacenter->host}}" name="host">
							</div>
							<div class="form-group">
								<label for="">ip</label>
								<input type="text" class="form-control" value="{{$datacenter->ip}}" name="ip">
							</div>

							<div class="form-group">
								<label for="">equipo</label>
								<input type="text" class="form-control" value="{{$datacenter->equipo}}" name="equipo">
							</div>

							<div class="form-group">
								<label for="">marca</label>
								<input type="text" class="form-control" value="{{$datacenter->marca}}" name="marca">
							</div>

							<div class="form-group">
								<label for="">modelo</label>
								<input type="text" class="form-control" value="{{$datacenter->modelo}}" name="modelo">
							</div>

							<div class="form-group">
								<label for="">serie</label>
								<input type="text" class="form-control" value="{{$datacenter->serie}}" name="serie">
							</div>

							<div class="form-group">
								<label for="">site</label>
								<input type="text" class="form-control" value="{{$datacenter->site}}" name="site">
							</div>

							<div class="form-group">
								<label for="">fase</label>
								<input type="text" class="form-control" value="{{$datacenter->fase}}" name="fase">
							</div>

							<div class="form-group">
								<label for="">pod</label>
								<input type="text" class="form-control" value="{{$datacenter->pod}}" name="pod">
							</div>

							<div class="form-group">
								<label for="">rack</label>
								<input type="text" class="form-control" value="{{$datacenter->rack}}" name="rack">
							</div>

							<div class="form-group">
								<label for="">ur</label>
								<input type="text" class="form-control" value="{{$datacenter->ur}}" name="ur">
							</div>

							<div class="form-group">
								<label for="">fuente</label>
								<input type="text" class="form-control" value="{{$datacenter->fuente}}" name="fuente">
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