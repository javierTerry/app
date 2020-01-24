<?php
use Illuminate\Http\Request;
use App\Fase;

//SE CREA LA RUTA DE URL LLAMADA fases PARA REGRESAR UNA VISTA DE LA CARPETA fases UBICADA EN VIEWS
//

Route::get('fase/ping', function () {
    return 'Hello World';
});


Route::get('fases', function () {
	$fases = datacenter::orderBy('created_at','desc')->get();
    return view('fases.index', compact('fases'));
})->name('fases.index');

//SE CREA LA RUTA LLAMADA CREAR PARA PODER PASAR A LA VISTA DE REGISTRO DE UN NUEVO CENTRO DE DATOS
//
Route::get('fases/create', function () {
    return view('fases.create');
})->name('fases.create');

//SE CREA LA RUTA POST PARA ALMACENAR LA INFORMACION REQUERIDA A LA BD Y SE CREA LA VARIABLE REQUEST Y TAMBIEN SE CREA LA CLASE PARA QUE NOS ENVIE EL FORMULARIO 
//
Route::post('fases', function (Request $request) {
    $newDatacenter = new Datacenter;
    $newDatacenter->ubicacion = $request->input('ubicacion');
    $newDatacenter->ip = $request->input('ip');
    $newDatacenter->save();

    return redirect()->route('fases.index')->with('info','Centro de Datos creado exitosamente');
})->name('fases.store');

//SE CREA LA RUTA DE PARA ELIMINAR DATOS POR MEDIO DE ID

Route::delete('fases/{id}', function($id){
		$datacenter = datacenter::findOrFail($id);
		$datacenter->delete();
		return redirect()->route('fases.index')->with('info','Centro de Datos Eliminado Exitosamente');
})->name('fases.destroy');


//RUTA DE ACTUALIZACION DE DATOS 
Route::get('fases/{id}/edit', function($id){
		$datacenter = datacenter::findOrFail($id);
		return view('fases.edit', compact	('datacenter'));		
})->name('fases.edit');



Route::put('fases/{id}', function(Request $request, $id){
	$fases = datacenter::findOrFail($id);
	$fases->host = $request->input('host');
	$fases->ip = $request->input('ip');
	$fases->equipo = $request->input('equipo');
	$fases->marca = $request->input('marca');
	$fases->modelo = $request->input('modelo');
	$fases->serie = $request->input('serie');
	$fases->site = $request->input('site');
	$fases->fase = $request->input('fase');
	$fases->pod = $request->input('pod');
	$fases->rack = $request->input('rack');
	$fases->ur = $request->input('ur');
	$fases->fuente = $request->input('fuente');
	$fases->save();
	return redirect()->route('fases.index')->with('info','Actualizado exitosamete');
})->name('fases.update');	





