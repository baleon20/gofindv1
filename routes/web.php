<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/Route::get('/', function(){
return view('home');});

Route::group(['prefix' => 'pais'], function(){
	Route::get('/', 'PaisController@index')->name('Pais.list');
	Route::get('/create', 'PaisController@create')->name('Pais.create');
	Route::post('/store', 'PaisController@store')->name('Pais.store');
	Route::put('/update/{id}', 'PaisController@update')->name('Pais.update');
	Route::get('/delete/{id}', 'PaisController@destroy')->name('Pais.destroy');
	Route::get('/edit/{id}', 'PaisController@edit')->name('Pais.edit');
	Route::get('/show/{id}', 'PaisController@show')->name('Pais.show');
	Route::post('/search', 'PaisController@search')->name('Pais.getsearch');
	
});

Route::get('/', function(){
return "jajaja";});

Route::group(['prefix' => 'programa'], function(){
	Route::get('/', 'ProgramaController@index')->name('Programa.list');
	Route::get('/create', 'ProgramaController@create')->name('Programa.create');
	Route::post('/store', 'ProgramaController@store')->name('Programa.store');
	Route::put('/update/{id}', 'ProgramaController@update')->name('Programa.update');
	Route::get('/delete/{id}', 'ProgramaController@destroy')->name('Programa.destroy');
	Route::get('/edit/{id}', 'ProgramaController@edit')->name('Programa.edit');
	Route::get('/show/{id}', 'ProgramaController@show')->name('Programa.show');
	Route::post('/search', 'ProgramaController@search')->name('Programa.getsearch');


	});


Route::get('/', function(){
return "jajaja";});

Route::group(['prefix' => 'rol'], function(){
	Route::get('/', 'RolController@index')->name('Rol.list');
	Route::get('/create', 'RolController@create')->name('Rol.create');
	Route::post('/store', 'RolController@store')->name('Rol.store');
	Route::put('/update/{id}', 'RolController@update')->name('Rol.update');
	Route::get('/delete/{id}', 'RolController@destroy')->name('Rol.destroy');
	Route::get('/edit/{id}', 'RolController@edit')->name('Rol.edit');
	Route::get('/show/{id}', 'RolController@show')->name('Rol.show');
	Route::post('/search', 'RolController@search')->name('Rol.getsearch');

});

Route::get('/', function(){
return "jajaja";});

Route::group(['prefix' => 'tipodocumento'], function(){
	Route::get('/', 'TipoDocumentoController@index')->name('TipoDocumento.list');
	Route::get('/create', 'TipoDocumentoController@create')->name('TipoDocumento.create');
	Route::post('/store', 'TipoDocumentoController@store')->name('TipoDocumento.store');
	Route::put('/update/{id}', 'TipoDocumentoController@update')->name('TipoDocumento.update');
	Route::get('/delete/{id}', 'TipoDocumentoController@destroy')->name('TipoDocumento.destroy');
	Route::get('/edit/{id}', 'TipoDocumentoController@edit')->name('TipoDocumento.edit');
	Route::get('/show/{id}', 'TipoDocumentoController@show')->name('TipoDocumento.show');
	Route::post('/search', 'TipoDocumentoController@search')->name('TipoDocumento.getsearch');

});

Route::get('/', function(){
return "jajaja";});

Route::group(['prefix' => 'area'], function(){
	Route::get('/', 'AreaController@index')->name('Area.list');
	Route::get('/create', 'AreaController@create')->name('Area.create');
	Route::post('/store', 'AreaController@store')->name('Area.store');
	Route::put('/update/{id}', 'AreaController@update')->name('Area.update');
	Route::get('/delete/{id}', 'AreaController@destroy')->name('Area.destroy');
	Route::get('/edit/{id}', 'AreaController@edit')->name('Area.edit');
	Route::get('/show/{id}', 'AreaController@show')->name('Area.show');
	Route::post('/search', 'AreaController@search')->name('Area.getsearch');

});

Route::get('/', function(){
return "jajaja";});

Route::group(['prefix' => 'evento'], function(){
	Route::get('/', 'EventoController@index')->name('Evento.list');
	Route::get('/create', 'EventoController@create')->name('Evento.create');
	Route::post('/store', 'EventoController@store')->name('Evento.store');
	Route::put('/update/{id}', 'EventoController@update')->name('Evento.update');
	Route::get('/delete/{id}', 'EventoController@destroy')->name('Evento.destroy');
	Route::get('/edit/{id}', 'EventoController@edit')->name('Evento.edit');
	Route::get('/show/{id}', 'EventoController@show')->name('Evento.show');
	Route::post('/search', 'EventoController@search')->name('Evento.getsearch');

});

Route::get('/', function(){
return "jajaja";});

Route::group(['prefix' => 'nivelestudio'], function(){
	Route::get('/', 'NivelEstudioController@index')->name('NivelEstudio.list');
	Route::get('/create', 'NivelEstudioController@create')->name('NivelEstudio.create');
	Route::post('/store', 'NivelEstudioController@store')->name('NivelEstudio.store');
	Route::put('/update/{id}', 'NivelEstudioController@update')->name('NivelEstudio.update');
	Route::get('/delete/{id}', 'NivelEstudioController@destroy')->name('NivelEstudio.destroy');
	Route::get('/edit/{id}', 'NivelEstudioController@edit')->name('NivelEstudio.edit');
	Route::get('/show/{id}', 'NivelEstudioController@show')->name('NivelEstudio.show');
	Route::post('/search', 'NivelEstudioController@search')->name('NivelEstudio.getsearch');

});


Route::get('/', function(){
return "jajaja";});


Route::group(['prefix' => 'departamento'], function(){
	Route::get('/', 'DepartamentoController@index')->name('Departamento.list');
	Route::get('/create', 'DepartamentoController@create')->name('Departamento.create');
	Route::post('/store', 'DepartamentoController@store')->name('Departamento.store');
	Route::put('/update/{id}', 'DepartamentoController@update')->name('Departamento.update');
	Route::get('/delete/{id}', 'DepartamentoController@destroy')->name('Departamento.destroy');
	Route::get('/edit/{id}', 'DepartamentoController@edit')->name('Departamento.edit');
	Route::get('/show/{id}', 'DepartamentoController@show')->name('Departamento.show');
	Route::post('/search', 'DepartamentoController@search')->name('Departamento.getsearch');

});

Route::get('/', function(){
return "jajaja";});

Route::group(['prefix' => 'ciudad'], function(){
	Route::get('/', 'CiudadController@index')->name('Ciudad.list');
	Route::get('/create', 'CiudadController@create')->name('Ciudad.create');
	Route::post('/store', 'CiudadController@store')->name('Ciudad.store');
	Route::put('/update/{id}', 'CiudadController@update')->name('Ciudad.update');
	Route::get('/delete/{id}', 'CiudadController@destroy')->name('Ciudad.destroy');
	Route::get('/edit/{id}', 'CiudadController@edit')->name('Ciudad.edit');
	Route::get('/show/{id}', 'CiudadController@show')->name('Ciudad.show');
	Route::post('/search', 'CiudadController@search')->name('Ciudad.getsearch');

});

Route::get('/', function(){
return "jajaja";});

Route::group(['prefix' => 'ficha'], function(){
	Route::get('/', 'FichaController@index')->name('Ficha.list');
	Route::get('/create', 'FichaController@create')->name('Ficha.create');
	Route::post('/store', 'FichaController@store')->name('Ficha.store');
	Route::put('/update/{id}', 'FichaController@update')->name('Ficha.update');
	Route::get('/delete/{id}', 'FichaController@destroy')->name('Ficha.destroy');
	Route::get('/edit/{id}', 'FichaController@edit')->name('Ficha.edit');
	Route::get('/show/{id}', 'FichaController@show')->name('Ficha.show');
	Route::post('/search', 'FichaController@search')->name('Ficha.getsearch');

});


Route::get('/', function(){
return "jajaja";});

Route::group(['prefix' => 'usuario'], function(){
	Route::get('/', 'UsuarioController@index')->name('User.list');
	Route::get('/create', 'UsuarioController@create')->name('User.create');
	Route::post('/store', 'UsuarioController@store')->name('User.store');
	Route::put('/update/{id}', 'UsuarioController@update')->name('User.update');
	Route::get('/delete/{id}', 'UsuarioController@destroy')->name('User.destroy');
	Route::get('/edit/{id}', 'UsuarioController@edit')->name('User.edit');
	Route::get('/show/{id}', 'UsuarioController@show')->name('User.show');
	Route::post('/search', 'UsuarioController@search')->name('User.getsearch');

});

Route::get('/', function(){
return "jajaja";});

Route::group(['prefix' => 'egresado'], function(){
	Route::get('/', 'EgresadoController@index')->name('Egresado.list');
	Route::get('/create', 'EgresadoController@create')->name('Egresado.create');
	Route::post('/store', 'EgresadoController@store')->name('Egresado.store');
	Route::put('/update/{id}', 'EgresadoController@update')->name('Egresado.update');
	Route::get('/delete/{id}', 'EgresadoController@destroy')->name('Egresado.destroy');
	Route::get('/edit/{id}', 'EgresadoController@edit')->name('Egresado.edit');
	Route::get('/show/{id}', 'EgresadoController@show')->name('Egresado.show');
	Route::post('/search', 'EgresadoController@search')->name('Egresado.getsearch');

});

Route::get('/', function(){
return "jajaja";});

Route::group(['prefix' => 'empresa'], function(){
	Route::get('/', 'EmpresaController@index')->name('Empresa.list');
	Route::get('/create', 'EmpresaController@create')->name('Empresa.create');
	Route::post('/store', 'EmpresaController@store')->name('Empresa.store');
	Route::put('/update/{id}', 'EmpresaController@update')->name('Empresa.update');
	Route::get('/delete/{id}', 'EmpresaController@destroy')->name('Empresa.destroy');
	Route::get('/edit/{id}', 'EmpresaController@edit')->name('Empresa.edit');
	Route::get('/show/{id}', 'EmpresaController@show')->name('Empresa.show');
	Route::post('/search', 'EmpresaController@search')->name('Empresa.getsearch');

});

Route::get('/', function(){
return "jajaja";});

Route::group(['prefix' => 'vacante'], function(){
	Route::get('/', 'vacanteController@index')->name('vacante.list');
	Route::get('/create', 'vacanteController@create')->name('vacante.create');
	Route::post('/store', 'vacanteController@store')->name('vacante.store');
	Route::put('/update/{id}', 'vacanteController@update')->name('vacante.update');
	Route::get('/delete/{id}', 'vacanteController@destroy')->name('vacante.destroy');
	Route::get('/edit/{id}', 'vacanteController@edit')->name('vacante.edit');
	Route::get('/show/{id}', 'vacanteController@show')->name('vacante.show');
	Route::post('/search', 'vacanteController@search')->name('vacante.getsearch');

});

Route::get('/', function(){
return "jajaja";});

Route::group(['prefix' => 'postulacion'], function(){
	Route::get('/', 'PostulacionController@index')->name('Postulacion.list');
	Route::get('/create', 'PostulacionController@create')->name('Postulacion.create');
	Route::post('/store', 'PostulacionController@store')->name('Postulacion.store');
	Route::put('/update/{id}', 'PostulacionController@update')->name('Postulacion.update');
	Route::get('/delete/{id}', 'PostulacionController@destroy')->name('Postulacion.destroy');
	Route::get('/edit/{id}', 'PostulacionController@edit')->name('Postulacion.edit');
	Route::get('/show/{id}', 'PostulacionController@show')->name('Postulacion.show');
	Route::post('/search', 'PostulacionController@search')->name('Postulacion.getsearch');

});

Route::get('/', function(){
return "jajaja";});

Route::group(['prefix' => 'tipoevento'], function(){
	Route::get('/', 'TipoEventoController@index')->name('TipoEvento.list');
	Route::get('/create', 'TipoEventoController@create')->name('TipoEvento.create');
	Route::post('/store', 'TipoEventoController@store')->name('TipoEvento.store');
	Route::put('/update/{id}', 'TipoEventoController@update')->name('TipoEvento.update');
	Route::get('/delete/{id}', 'TipoEventoController@destroy')->name('TipoEvento.destroy');
	Route::get('/edit/{id}', 'TipoEventoController@edit')->name('TipoEvento.edit');
	Route::get('/show/{id}', 'TipoEventoController@show')->name('TipoEvento.show');
	Route::post('/search', 'TipoEventoController@search')->name('TipoEvento.getsearch');

});

Route::get('/', function(){
return "jajaja";});

Route::group(['prefix' => 'experiencia'], function(){
	Route::get('/', 'ExperienciaController@index')->name('Experiencia.list');
	Route::get('/create', 'ExperienciaController@create')->name('Experiencia.create');
	Route::post('/store', 'ExperienciaController@store')->name('Experiencia.store');
	Route::put('/update/{id}', 'ExperienciaController@update')->name('Experiencia.update');
	Route::get('/delete/{id}', 'ExperienciaController@destroy')->name('Experiencia.destroy');
	Route::get('/edit/{id}', 'ExperienciaController@edit')->name('Experiencia.edit');
	Route::get('/show/{id}', 'ExperienciaController@show')->name('Experiencia.show');
	Route::post('/search', 'ExperienciaController@search')->name('Experiencia.getsearch');

});

Route::get('/', function(){
return "jajaja";});

Route::group(['prefix' => 'fichaegresado'], function(){
	Route::get('/', 'FichaEgresadoController@index')->name('FichaEgresado.list');
	Route::get('/create', 'FichaEgresadoController@create')->name('FichaEgresado.create');
	Route::post('/store', 'FichaEgresadoController@store')->name('FichaEgresado.store');
	Route::put('/update/{id}', 'FichaEgresadoController@update')->name('FichaEgresado.update');
	Route::get('/delete/{id}', 'FichaEgresadoController@destroy')->name('FichaEgresado.destroy');
	Route::get('/edit/{id}', 'FichaEgresadoController@edit')->name('FichaEgresado.edit');
	Route::get('/show/{id}', 'FichaEgresadoController@show')->name('FichaEgresado.show');
	Route::post('/search', 'FichaEgresadoController@search')->name('FichaEgresado.getsearch');

});

Route::get('/', function(){
return "jajaja";});

Route::group(['prefix' => 'estudio'], function(){
	Route::get('/', 'EstudioController@index')->name('Estudio.list');
	Route::get('/create', 'EstudioController@create')->name('Estudio.create');
	Route::post('/store', 'EstudioController@store')->name('Estudio.store');
	Route::put('/update/{id}', 'EstudioController@update')->name('Estudio.update');
	Route::get('/delete/{id}', 'EstudioController@destroy')->name('Estudio.destroy');
	Route::get('/edit/{id}', 'EstudioController@edit')->name('Estudio.edit');
	Route::get('/show/{id}', 'EstudioController@show')->name('Estudio.show');
	Route::post('/search', 'EstudioController@search')->name('Estudio.getsearch');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/', function(){
	return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
