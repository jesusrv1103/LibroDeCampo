<?php

namespace App\Http\Controllers;

use App\ControlPlagas;
use App\Parcelas;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ControlPlagasControler extends Controller
{
  //Listado de control de plagas
  public function control_plagas_list(){
    $data['control_plagas'] = ControlPlagas::paginate(3);
    return view('control_plagas.listar', $data);
  }

  //Formulario de Control de plagas
  public function control_plagas_form(){
    $parcelas = Parcelas::get();
    return view('control_plagas.form', compact('parcelas'));
  }

  //Guardar control de plagas
  public function control_plagas_save(Request $request){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'fecha' => 'required|date',
      'nombre_comercial' => 'required|string|min:5|max:30',
      'materia_activa' => 'required|numeric|min:0',
      'forma_aplicacion' => 'required|string|min:5|max:50',
      'gasto_producto' => 'required|numeric|min:0',
      'control_HP' => 'required|string|min:5|max:30',
      'no_tratamiento' => 'required|numeric|min:0'
    ]);

    $control_plagas_data = request()->except('_token');
    ControlPlagas::insert($control_plagas_data);
    return back()->with('control_plagas_save', 'Control de plagas guardado');
  }

  //Eliminar control de plagas
  public function control_plagas_delete($id){
    ControlPlagas::destroy($id);
    return back()->with('control_plagas_delete',
      'Control de plagas eliminado');
  }

  //Formulario modificar control de trampas
  public function control_plagas_form_update($id){
    $control_plaga = ControlPlagas::findOrFail($id);
    $parcelas = Parcelas::get();
    return view('control_plagas.form_update',
      compact('control_plaga', 'parcelas'));
  }

  //Modificar control de trampas
  public function control_plagas_update(Request $request, $id){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'fecha' => 'required|date',
      'nombre_comercial' => 'required|string|min:5|max:30',
      'materia_activa' => 'required|numeric|min:0',
      'forma_aplicacion' => 'required|string|min:5|max:50',
      'gasto_producto' => 'required|numeric|min:0',
      'control_HP' => 'required|string|min:5|max:30',
      'no_tratamiento' => 'required|numeric|min:0'
    ]);

    $control_plagas_data = request()->except((['_token', '_method']));
    ControlPlagas::where('id', '=', $id)->update($control_plagas_data);
    return back()->with('control_plagas_update',
      'Control de plagas modificado');
  }
}
