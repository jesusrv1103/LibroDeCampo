<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Identificacion
Route::get('/', 'IdentificacionControler@identificacion_list');
Route::get('/identificacion', 'IdentificacionControler@identificacion_form_update')->name('identificacion_form_update');
Route::patch('/identificacion_update/{id}', 'IdentificacionControler@identificacion_update')->name('identificacion_update');

//Maquinaria
Route::get('/maquinaria', 'MaquinariaControler@maquinaria_list');
Route::get('/maquinaria_form', 'MaquinariaControler@maquinaria_form');
Route::post('/maquinaria_save', 'MaquinariaControler@maquinaria_save')->name('maquinaria_save');
Route::delete('/maquinaria_delete/{id}', 'MaquinariaControler@maquinaria_delete')->name('maquinaria_delete');
Route::get('/maquinaria_form_update/{id}', 'MaquinariaControler@maquinaria_form_update')->name('maquinaria_form_update');
Route::patch('/maquinaria_update/{id}', 'MaquinariaControler@maquinaria_update')->name('maquinaria_update');

//Parcelas
Route::get('/parcelas', 'ParcelasControler@parcelas_list');
Route::get('/parcelas_form', 'ParcelasControler@parcelas_form');
Route::post('/parcelas_save', 'ParcelasControler@parcelas_save')->name('parcelas_save');
Route::delete('/parcelas_delete/{id}', 'ParcelasControler@parcelas_delete')->name('parcelas_delete');
Route::get('/parcelas_form_update/{id}', 'ParcelasControler@parcelas_form_update')->name('parcelas_form_update');
Route::patch('/parcelas_update/{id}', 'ParcelasControler@parcelas_update')->name('parcelas_update');

//Riegos
Route::get('/riegos', 'RiegosControler@riegos_list');
Route::get('/riegos_form', 'RiegosControler@riegos_form');
Route::post('/riegos_save', 'RiegosControler@riegos_save')->name('riegos_save');
Route::delete('/riegos_delete/{id}', 'RiegosControler@riegos_delete')->name('riegos_delete');
Route::get('/riegos_form_update/{id}', 'RiegosControler@riegos_form_update')->name('riegos_form_update');
Route::patch('/riegos_update/{id}', 'RiegosControler@riegos_update')->name('riegos_update');

//Abonados
Route::get('/abonados', 'AbonadosControler@abonados_list');
Route::get('/abonados_form', 'AbonadosControler@abonados_form');
Route::post('/abonados_save', 'AbonadosControler@abonados_save')->name('abonados_save');
Route::delete('/abonados_delete/{id}','AbonadosControler@abonados_delete')->name('abonados_delete');
Route::get('/abonados_form_update/{id}', 'AbonadosControler@abonados_form_update')->name('abonados_form_update');
Route::patch('/abonados_update/{id}', 'AbonadosControler@abonados_update')->name('abonados_update');

//Podas
Route::get('/podas', 'PodasControler@podas_list');
Route::get('/podas_form', 'PodasControler@podas_form');
Route::post('/podas_save', 'PodasControler@podas_save')->name('podas_save');
Route::delete('/podas_delete/{id}','PodasControler@podas_delete')->name('podas_delete');
Route::get('/podas_form_update/{id}', 'PodasControler@podas_form_update')->name('podas_form_update');
Route::patch('/podas_update/{id}', 'PodasControler@podas_update')->name('podas_update');

//Aclareo racimos
Route::get('/aclareo_racimos', 'AclareoRacimosControler@aclareo_racimos_list');
Route::get('/aclareo_racimos_form', 'AclareoRacimosControler@aclareo_racimos_form');
Route::post('/aclareo_racimos_save', 'AclareoRacimosControler@aclareo_racimos_save')->name('aclareo_racimos_save');
Route::delete('/aclareo_racimos_delete/{id}','AclareoRacimosControler@aclareo_racimos_delete')->name('aclareo_racimos_delete');
Route::get('/aclareo_racimos_form_update/{id}', 'AclareoRacimosControler@aclareo_racimos_form_update')->name('aclareo_racimos_form_update');
Route::patch('/aclareo_racimos_update/{id}', 'AclareoRacimosControler@aclareo_racimos_update')->name('aclareo_racimos_update');

//Labores
Route::get('/labores', 'LaboresControler@labores_list');
Route::get('/labores_form', 'LaboresControler@labores_form');
Route::post('/labores_save', 'LaboresControler@labores_save')->name('labores_save');
Route::delete('/labores_delete/{id}','LaboresControler@labores_delete')->name('labores_delete');
Route::get('/labores_form_update/{id}', 'LaboresControler@labores_form_update')->name('labores_form_update');
Route::patch('/labores_update/{id}', 'LaboresControler@labores_update')->name('labores_update');

//Recolecciones
Route::get('/recoleccion', 'RecoleccionControler@recoleccion_list');
Route::get('/recoleccion_form', 'RecoleccionControler@recoleccion_form');
Route::post('/recoleccion_save', 'RecoleccionControler@recoleccion_save')->name('recoleccion_save');
Route::delete('/recoleccion_delete/{id}','RecoleccionControler@recoleccion_delete')->name('recoleccion_delete');
Route::get('/recoleccion_form_update/{id}', 'RecoleccionControler@recoleccion_form_update')->name('recoleccion_form_update');
Route::patch('/recoleccion_update/{id}', 'RecoleccionControler@recoleccion_update')->name('recoleccion_update');

//Control de Plagas
Route::get('/control_plagas', 'ControlPlagasControler@control_plagas_list');
Route::get('/control_plagas_form', 'ControlPlagasControler@control_plagas_form');
Route::post('/control_plagas_save', 'ControlPlagasControler@control_plagas_save')->name('control_plagas_save');
Route::delete('/control_plagas_delete/{id}','ControlPlagasControler@control_plagas_delete')->name('control_plagas_delete');
Route::get('/control_plagas_form_update/{id}', 'ControlPlagasControler@control_plagas_form_update')->name('control_plagas_form_update');
Route::patch('/control_plagas_update/{id}', 'ControlPlagasControler@control_plagas_update')->name('control_plagas_update');

//Seguimiento de Plagas
Route::get('/seguimiento_plagas', 'SeguimientoPlagasControler@seguimiento_plagas_list');
Route::get('/seguimiento_plagas_form', 'SeguimientoPlagasControler@seguimiento_plagas_form');
Route::post('/seguimiento_plagas_save', 'SeguimientoPlagasControler@seguimiento_plagas_save')->name('seguimiento_plagas_save');
Route::delete('/seguimiento_plagas_delete/{id}','SeguimientoPlagasControler@seguimiento_plagas_delete')->name('seguimiento_plagas_delete');
Route::get('/seguimiento_plagas_form_update/{id}', 'SeguimientoPlagasControler@seguimiento_plagas_form_update')->name('seguimiento_plagas_form_update');
Route::patch('/seguimiento_plagas_update/{id}', 'SeguimientoPlagasControler@seguimiento_plagas_update')->name('seguimiento_plagas_update');

//Captura de trampas
Route::get('/captura_trampas', 'CapturaTrampasControler@captura_trampas_list');
Route::get('/captura_trampas_form', 'CapturaTrampasControler@captura_trampas_form');
Route::post('/captura_trampas_save', 'CapturaTrampasControler@captura_trampas_save')->name('captura_trampas_save');
Route::delete('/captura_trampas_delete/{id}','CapturaTrampasControler@captura_trampas_delete')->name('captura_trampas_delete');
Route::get('/captura_trampas_form_update/{id}', 'CapturaTrampasControler@captura_trampas_form_update')->name('captura_trampas_form_update');
Route::patch('/captura_trampas_update/{id}', 'CapturaTrampasControler@captura_trampas_update')->name('captura_trampas_update');

//Daños por fenómenos meteorológicos
Route::get('/danos_fenom_meteors', 'DanosFenomMeteorsControler@danos_fenom_meteors_list');
Route::get('/danos_fenom_meteors_form', 'DanosFenomMeteorsControler@danos_fenom_meteors_form');
Route::post('/danos_fenom_meteors_save', 'DanosFenomMeteorsControler@danos_fenom_meteors_save')->name('danos_fenom_meteors_save');
Route::delete('/danos_fenom_meteors_delete/{id}','DanosFenomMeteorsControler@danos_fenom_meteors_delete')->name('danos_fenom_meteors_delete');
Route::get('/danos_fenom_meteors_form_update/{id}', 'DanosFenomMeteorsControler@danos_fenom_meteors_form_update')->name('danos_fenom_meteors_form_update');
Route::patch('/danos_fenom_meteors_update/{id}', 'DanosFenomMeteorsControler@danos_fenom_meteors_update')->name('danos_fenom_meteors_update');



//Abonados Costes Produccion
Route::get('/abonados_prod', 'AbonadosProdControler@abonados_prod_list');
Route::get('/abonados_prod_form', 'AbonadosProdControler@abonados_prod_form');
Route::post('/abonados_prod_save', 'AbonadosProdControler@abonados_prod_save')->name('abonados_prod_save');
Route::delete('/abonados_prod_delete/{id}','AbonadosProdControler@abonados_prod_delete')->name('abonados_prod_delete');
Route::get('/abonados_prod_form_update/{id}', 'AbonadosProdControler@abonados_prod_form_update')->name('abonados_prod_form_update');
Route::patch('/abonados_prod_update/{id}', 'AbonadosProdControler@abonados_prod_update')->name('abonados_prod_update');

//Riegos Costes Produccion
Route::get('/riegos_prod', 'RiegosProdControler@riegos_prod_list');
Route::get('/riegos_prod_form', 'RiegosProdControler@riegos_prod_form');
Route::post('/riegos_prod_save', 'RiegosProdControler@riegos_prod_save')->name('riegos_prod_save');
Route::delete('/riegos_prod_delete/{id}','RiegosProdControler@riegos_prod_delete')->name('riegos_prod_delete');
Route::get('/riegos_prod_form_update/{id}', 'RiegosProdControler@riegos_prod_form_update')->name('riegos_prod_form_update');
Route::patch('/riegos_prod_update/{id}', 'RiegosProdControler@riegos_prod_update')->name('riegos_prod_update');

//Podas Costes Produccion
Route::get('/podas_prod', 'PodasProdControler@podas_prod_list');
Route::get('/podas_prod_form', 'PodasProdControler@podas_prod_form');
Route::post('/podas_prod_save', 'PodasProdControler@podas_prod_save')->name('podas_prod_save');
Route::delete('/podas_prod_delete/{id}','PodasProdControler@podas_prod_delete')->name('podas_prod_delete');
Route::get('/podas_prod_form_update/{id}', 'PodasProdControler@podas_prod_form_update')->name('podas_prod_form_update');
Route::patch('/podas_prod_update/{id}', 'PodasProdControler@podas_prod_update')->name('podas_prod_update');

//Aclareo Racimos Costes Produccion
Route::get('/aclareo_racimos_prod', 'AclareoRacProdControler@aclareo_racimos_prod_list');
Route::get('/aclareo_racimos_prod_form', 'AclareoRacProdControler@aclareo_racimos_prod_form');
Route::post('/aclareo_racimos_prod_save', 'AclareoRacProdControler@aclareo_racimos_prod_save')->name('aclareo_racimos_prod_save');
Route::delete('/aclareo_racimos_prod_delete/{id}','AclareoRacProdControler@aclareo_racimos_prod_delete')->name('aclareo_racimos_prod_delete');
Route::get('/aclareo_racimos_prod_form_update/{id}', 'AclareoRacProdControler@aclareo_racimos_prod_form_update')->name('aclareo_racimos_prod_form_update');
Route::patch('/aclareo_racimos_prod_update/{id}', 'AclareoRacProdControler@aclareo_racimos_prod_update')->name('aclareo_racimos_prod_update');

//Labores Costes Produccion
Route::get('/labores_prod', 'LaboresProdControler@labores_prod_list');
Route::get('/labores_prod_form', 'LaboresProdControler@labores_prod_form');
Route::post('/labores_prod_save', 'LaboresProdControler@labores_prod_save')->name('labores_prod_save');
Route::delete('/labores_prod_delete/{id}','LaboresProdControler@labores_prod_delete')->name('labores_prod_delete');
Route::get('/labores_prod_form_update/{id}', 'LaboresProdControler@labores_prod_form_update')->name('labores_prod_form_update');
Route::patch('/labores_prod_update/{id}', 'LaboresProdControler@labores_prod_update')->name('labores_prod_update');

//Recolección Costes Produccion
Route::get('/recoleccion_prod', 'RecoleccionProdControler@recoleccion_prod_list');
Route::get('/recoleccion_prod_form', 'RecoleccionProdControler@recoleccion_prod_form');
Route::post('/recoleccion_prod_save', 'RecoleccionProdControler@recoleccion_prod_save')->name('recoleccion_prod_save');
Route::delete('/recoleccion_prod_delete/{id}','RecoleccionProdControler@recoleccion_prod_delete')->name('recoleccion_prod_delete');
Route::get('/recoleccion_prod_form_update/{id}', 'RecoleccionProdControler@recoleccion_prod_form_update')->name('recoleccion_prod_form_update');
Route::patch('/recoleccion_prod_update/{id}', 'RecoleccionProdControler@recoleccion_prod_update')->name('recoleccion_prod_update');

//Control de Plagas Costes Produccion
Route::get('/control_plagas_prod', 'ControlPlagasProdControler@control_plagas_prod_list');
Route::get('/control_plagas_prod_form', 'ControlPlagasProdControler@control_plagas_prod_form');
Route::post('/control_plagas_prod_save', 'ControlPlagasProdControler@control_plagas_prod_save')->name('control_plagas_prod_save');
Route::delete('/control_plagas_prod_delete/{id}','ControlPlagasProdControler@control_plagas_prod_delete')->name('control_plagas_prod_delete');
Route::get('/control_plagas_prod_form_update/{id}', 'ControlPlagasProdControler@control_plagas_prod_form_update')->name('control_plagas_prod_form_update');
Route::patch('/control_plagas_prod_update/{id}', 'ControlPlagasProdControler@control_plagas_prod_update')->name('control_plagas_prod_update');

//Seguimiento de Plagas Costes Produccion
Route::get('/seguimiento_plagas_prod', 'SeguimientoPlagasProdControler@seguimiento_plagas_prod_list');
Route::get('/seguimiento_plagas_prod_form', 'SeguimientoPlagasProdControler@seguimiento_plagas_prod_form');
Route::post('/seguimiento_plagas_prod_save', 'SeguimientoPlagasProdControler@seguimiento_plagas_prod_save')->name('seguimiento_plagas_prod_save');
Route::delete('/seguimiento_plagas_prod_delete/{id}','SeguimientoPlagasProdControler@seguimiento_plagas_prod_delete')->name('seguimiento_plagas_prod_delete');
Route::get('/seguimiento_plagas_prod_form_update/{id}', 'SeguimientoPlagasProdControler@seguimiento_plagas_prod_form_update')->name('seguimiento_plagas_prod_form_update');
Route::patch('/seguimiento_plagas_prod_update/{id}', 'SeguimientoPlagasProdControler@seguimiento_plagas_prod_update')->name('seguimiento_plagas_prod_update');

//Captura en Trampas Costes Produccion
Route::get('/captura_trampas_prod', 'CapturaTrampasProdControler@captura_trampas_prod_list');
Route::get('/captura_trampas_prod_form', 'CapturaTrampasProdControler@captura_trampas_prod_form');
Route::post('/captura_trampas_prod_save', 'CapturaTrampasProdControler@captura_trampas_prod_save')->name('captura_trampas_prod_save');
Route::delete('/captura_trampas_prod_delete/{id}','CapturaTrampasProdControler@captura_trampas_prod_delete')->name('captura_trampas_prod_delete');
Route::get('/captura_trampas_prod_form_update/{id}', 'CapturaTrampasProdControler@captura_trampas_prod_form_update')->name('captura_trampas_prod_form_update');
Route::patch('/captura_trampas_prod_update/{id}', 'CapturaTrampasProdControler@captura_trampas_prod_update')->name('captura_trampas_prod_update');

//Daños por Fenomenos Meteorológicos Costes Produccion
Route::get('/danos_fenom_meteors_prod', 'DanosFenomMeteorsProdControler@danos_fenom_meteors_prod_list');
Route::get('/danos_fenom_meteors_prod_form', 'DanosFenomMeteorsProdControler@danos_fenom_meteors_prod_form');
Route::post('/danos_fenom_meteors_prod_save', 'DanosFenomMeteorsProdControler@danos_fenom_meteors_prod_save')->name('danos_fenom_meteors_prod_save');
Route::delete('/danos_fenom_meteors_prod_delete/{id}','DanosFenomMeteorsProdControler@danos_fenom_meteors_prod_delete')->name('danos_fenom_meteors_prod_delete');
Route::get('/danos_fenom_meteors_prod_form_update/{id}', 'DanosFenomMeteorsProdControler@danos_fenom_meteors_prod_form_update')->name('danos_fenom_meteors_prod_form_update');
Route::patch('/danos_fenom_meteors_prod_update/{id}', 'DanosFenomMeteorsProdControler@danos_fenom_meteors_prod_update')->name('danos_fenom_meteors_prod_update');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
