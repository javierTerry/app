<?php
use Illuminate\Http\Request;
use App\Datacenter;


Route::get('fase/ping', function () {
    return 'Hello World';
});


//SE CREA LA RUTA DE URL LLAMADA DATACENTERS PARA REGRESAR UNA VISTA DE LA CARPETA DATACENTERS UBICADA EN VIEWS
//
Route::get('datacenters', function () {
	$datacenters = datacenter::orderBy('created_at','desc')->get();
    return view('datacenters.index', compact('datacenters'));
})->name('datacenters.index');

//SE CREA LA RUTA LLAMADA CREAR PARA PODER PASAR A LA VISTA DE REGISTRO DE UN NUEVO CENTRO DE DATOS
//
Route::get('datacenters/create', function () {
    return view('datacenters.create');
})->name('datacenters.create');

//SE CREA LA RUTA POST PARA ALMACENAR LA INFORMACION REQUERIDA A LA BD Y SE CREA LA VARIABLE REQUEST Y TAMBIEN SE CREA LA CLASE PARA QUE NOS ENVIE EL FORMULARIO 
//
Route::post('datacenters', function (Request $request) {
    $newDatacenter = new Datacenter;
    $newDatacenter->ubicacion = $request->input('ubicacion');
    $newDatacenter->ip = $request->input('ip');
    $newDatacenter->save();

    return redirect()->route('datacenters.index')->with('info','Centro de Datos creado exitosamente');
})->name('datacenters.store');

//SE CREA LA RUTA DE PARA ELIMINAR DATOS POR MEDIO DE ID

Route::delete('datacenters/{id}', function($id){
		$datacenter = datacenter::findOrFail($id);
		$datacenter->delete();
		return redirect()->route('datacenters.index')->with('info','Centro de Datos Eliminado Exitosamente');
})->name('datacenters.destroy');


//RUTA DE ACTUALIZACION DE DATOS 
Route::get('datacenters/{id}/edit', function($id){
		$datacenter = datacenter::findOrFail($id);
		return view('datacenters.edit', compact	('datacenter'));		
})->name('datacenters.edit');



Route::put('datacenters/{id}', function(Request $request, $id){
	$datacenters = datacenter::findOrFail($id);
	$datacenters->host = $request->input('host');
	$datacenters->ip = $request->input('ip');
	$datacenters->equipo = $request->input('equipo');
	$datacenters->marca = $request->input('marca');
	$datacenters->modelo = $request->input('modelo');
	$datacenters->serie = $request->input('serie');
	$datacenters->site = $request->input('site');
	$datacenters->fase = $request->input('fase');
	$datacenters->pod = $request->input('pod');
	$datacenters->rack = $request->input('rack');
	$datacenters->ur = $request->input('ur');
	$datacenters->fuente = $request->input('fuente');
	$datacenters->save();
	return redirect()->route('datacenters.index')->with('info','Actualizado exitosamete');
})->name('datacenters.update');	





