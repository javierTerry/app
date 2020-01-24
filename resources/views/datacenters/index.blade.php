@extends('layouts.main')
@section('contenido')
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
						<a href="{{route('datacenters.create')}}" class="btn btn-success btn-sm float-right">Nuevo Centro de datos</a>
					</div>
					<div class="card-body">
						@if(session('info'))
							<div class="alert alert-success">
								{{ session('info') }}
							</div>
						@endif
						<table class="table table-hover table-sm">	
								<thead>	
									<th>host</th>
									<th>ip</th>
									<th>equipo</th>
									<th>marca</th>
									<th>modelo</th>
									<th>serie</th>
									<th>site</th>
									<th>fase</th>
									<th>pod</th>
									<th>rack</th>
									<th>ur</th>
									<th>fuente</th>

									<th>Acción</th>
								</thead>
								<tbody>	
									@foreach($datacenters as $datacenter)
										<tr>	
											<td>	
												{{ $datacenter->host }}
											</td>

											<td>	
												{{ $datacenter->ip }}
											</td>

											<td>	
												{{ $datacenter->equipo }}
											</td>

											<td>	
												{{ $datacenter->marca }}
											</td>

											<td>	
												{{ $datacenter->modelo }}
											</td>

											<td>	
												{{ $datacenter->serie }}
											</td>

											<td>	
												{{ $datacenter->site }}
											</td>

											<td>	
												{{ $datacenter->fase }}
											</td>

											<td>	
												{{ $datacenter->pod }}
											</td>

											<td>	
												{{ $datacenter->rack }}
											</td>
											<td>	
												{{ $datacenter->ur }}
											</td>
											<td>	
												{{ $datacenter->fuente }}
											</td>
											<td>
												<a href="{{route('datacenters.edit',$datacenter->id) }}" class="btn btn-warning btn-sm">Editar</a>
												<a href="javascript: document.getElementById('delete-{{ $datacenter->id}}').submit()" class="btn btn-danger btn-sm">Eliminar</a>
												<form id="delete-{{ $datacenter->id}}" action="{{route('datacenters.destroy', $datacenter->id) }}"method="POST">
												@method	('delete')	
												@csrf
												</form>
											</td>
										</tr>
									@endforeach	
								</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection