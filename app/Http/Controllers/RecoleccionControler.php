<?php

namespace App\Http\Controllers;

use App\Recoleccion;
use App\Parcelas;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RecoleccionControler extends Controller
{
  //Listado de recoleccion
  public function recoleccion_list(){
    $data['recolecciones'] = Recoleccion::paginate(3);
    return view('recoleccion.listar', $data);
  }

  //Formulario de recoleccion
  public function recoleccion_form(){
    $parcelas = Parcelas::get();
    return view('recoleccion.form', compact('parcelas'));
  }

  //Guardar recoleccion
  public function recoleccion_save(Request $request){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'fecha' => 'required|date',
      'variedad_recolectada' => 'required|numeric|min:0',
      'rendimiento'  => 'required|numeric|min:0',
      'destino_cosecha' => 'required|string|min:5|max:50'
    ]);

    $recoleccion_data = request()->except('_token');
    Recoleccion::insert($recoleccion_data);
    return back()->with('recoleccion_save', 'Recolección guardada');
  }

  //Eliminar recoleccion
  public function recoleccion_delete($id){
    Recoleccion::destroy($id);
    return back()->with('recoleccion_delete', 'Recolección eliminada');
  }

  //Formulario modificar recoleccion
  public function recoleccion_form_update($id){
    $recoleccion = Recoleccion::findOrFail($id);
    $parcelas = Parcelas::get();
    return view('recoleccion.form_update',
      compact('recoleccion', 'parcelas'));
  }

  //Modificar recoleccion
  public function recoleccion_update(Request $request, $id){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'fecha' => 'required|date',
      'variedad_recolectada' => 'required|numeric|min:0',
      'rendimiento'  => 'required|numeric|min:0',
      'destino_cosecha' => 'required|string|min:5|max:50'
    ]);
        
    $recoleccion_data = request()->except((['_token', '_method']));
    Recoleccion::where('id', '=', $id)->update($recoleccion_data);
    return back()->with('recoleccion_update', 'recolección modificada');
  }
}
