<?php
namespace App\Http\Controllers;

use App\DatosIdentificacion;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DatosIdentificacionControler extends Controller
{
  //Listado de datos de identificacion
  public function datos_identificacion_list(){
    $data['datos_identificacion'] = DatosIdentificacion::paginate(3);
    return view('datos_identificacion.listar', $data);
  }

  //Formulario de datos de identificacion
  public function datos_identificacion_form(){
    return view('datos_identificacion.form');
  }

  //Guardar datos de identificacion
  public function datos_identificacion_save(Request $request){
    $datos_identificacion_data = request()->except('_token');
    DatosIdentificacion::insert($datos_identificacion_data);
    return back()->with('datos_identificacion_save',
      'Datos de identificacion guardados');
  }

  //Eliminar datos de identificacion
  public function datos_identificacion_delete($id){
    DatosIdentificacion::destroy($id);
    return back()->with('datos_identificacion_delete',
      'Datos de identificacion eliminados');
  }

  //Formulario modificar datos de identificacion
  public function datos_identificacion_form_update($id){
    $datos_identificacion = DatosIdentificacion::findOrFail($id);
    return view('datos_identificacion.form_update',
      compact('datos_identificacion'));
  }

  //Modificar datos de identificacion
  public function datos_identificacion_update(Request $request, $id){
    $datos_identificacion_data = request()->except((['_token', '_method']));
    DatosIdentificacion::where('id', '=', $id)->update($datos_identificacion_data);
    return back()->with('datos_identificacion_update',
      'Datos de identificacion modificados');
  }
}
