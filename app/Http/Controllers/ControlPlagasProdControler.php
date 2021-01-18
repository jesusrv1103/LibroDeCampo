<?php

namespace App\Http\Controllers;

use App\ControlPlagasProd;
use App\Parcelas;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ControlPlagasProdControler extends Controller
{
  //Listado de control de plagas produccion
  public function control_plagas_prod_list(){
    $data['control_plagas_prod'] = ControlPlagasProd::paginate(3);
    return view('control_plagas_prod.listar', $data);
  }

  //Formulario de control de plagas produccion
  public function control_plagas_prod_form(){
    $parcelas = Parcelas::get();
    return view('control_plagas_prod.form', compact('parcelas'));
  }

  //Guardar control de plagas produccion
  public function control_plagas_prod_save(Request $request){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'recursos_humanos_hrs' => 'required|numeric|min:0',
      'recursos_humanos_coste_unit' => 'required|numeric|min:0',
      'recursos_humanos_coste_total' => 'required|numeric|min:0',
      'recursos_materiales_hrs' => 'required|numeric|min:0',
      'resursos_materiales_coste_u' => 'required|numeric|min:0',
      'resursos_materiales_coste_t' => 'required|numeric|min:0',
      'total_control_plagas_hrs' => 'required|numeric|min:0',
      'total_control_plagas_coste_unit' => 'required|numeric|min:0',
      'total_control_plagas_coste_total' => 'required|numeric|min:0'
    ]);

    $control_plaga_prod_data = request()->except('_token');
    ControlPlagasProd::insert($control_plaga_prod_data);
    return back()->with('control_plagas_prod_save',
      'Control de plagas de costes de producción guardado');
  }

  //Eliminar control de plagas produccion
  public function control_plagas_prod_delete($id){
    ControlPlagasProd::destroy($id);
    return back()->with('control_plagas_prod_delete',
      'Control de plagas de costes de producción eliminado');
  }

  //Formulario modificar control de plagas produccion
  public function control_plagas_prod_form_update($id){
    $control_plaga_prod = ControlPlagasProd::findOrFail($id);
    $parcelas = Parcelas::get();
    return view('control_plagas_prod.form_update',
      compact('control_plaga_prod', 'parcelas'));
  }

  //Modificar control de plagas produccion
  public function control_plagas_prod_update(Request $request, $id){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'recursos_humanos_hrs' => 'required|numeric|min:0',
      'recursos_humanos_coste_unit' => 'required|numeric|min:0',
      'recursos_humanos_coste_total' => 'required|numeric|min:0',
      'recursos_materiales_hrs' => 'required|numeric|min:0',
      'resursos_materiales_coste_u' => 'required|numeric|min:0',
      'resursos_materiales_coste_t' => 'required|numeric|min:0',
      'total_control_plagas_hrs' => 'required|numeric|min:0',
      'total_control_plagas_coste_unit' => 'required|numeric|min:0',
      'total_control_plagas_coste_total' => 'required|numeric|min:0'
    ]);

    $control_plaga_prod_data = request()->except((['_token', '_method']));
    ControlPlagasProd::where('id', '=', $id)->update($control_plaga_prod_data);
    return back()->with('control_plagas_prod_update',
      'Control de plagas de costes de producción modificado');
  }
}
