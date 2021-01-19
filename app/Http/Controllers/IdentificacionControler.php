<?php
namespace App\Http\Controllers;

use App\Identificacion;
use App\Municipios;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IdentificacionControler extends Controller
{
  //Listado de datos de identificacion
  public function identificacion_list(){
    $identificacion = Identificacion::findOrFail(1);
    $municipios = Municipios::get();
    return view('identificacion.listar',
      compact('identificacion', 'municipios'));
  }

  public function identificacion_form_update(){
    $identificacion = Identificacion::findOrFail(1);
    $municipios = Municipios::get();
    return view('identificacion.form_update',
      compact('identificacion', 'municipios'));
  }

  //Modificar datos de identificacion
  public function identificacion_update(Request $request, $id){
    $validador = $this->validate($request, [
      'campana' => 'required|string|min:5|max:100',
      'titular_explotacion' => 'required|string|min:5|max:200',
      'direccion' => 'required|string|min:5|max:30',
      'telefono' => 'required|string|min:10|max:10',
      'municipio_id' => 'required|required',
      'fax' => 'string|min:0|max:20',
      'codigo_postal' => 'required|string|min:5|max:5',
      'tecnico_resp_exp' => 'required|string|min:5|max:50',
      'firma_digital' => 'required|string|min:5|max:50',
    ]);

    $identificacion_data = request()->except((['_token', '_method']));
    Identificacion::where('id', '=', $id)->update($identificacion_data);
    return back()->with('identificacion_update',
      'Datos de identificacion modificados');
  }

}
