<?php

namespace App\Http\Controllers;

use App\CapturaTrampasProd;
use App\Parcelas;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CapturaTrampasProdControler extends Controller
{
  //Listado de captura en trampas produccion
  public function captura_trampas_prod_list(){
    $data['captura_trampas_prod'] = CapturaTrampasProd::paginate(3);
    return view('captura_trampas_prod.listar', $data);
  }

  //Formulario de captura en trampas produccion
  public function captura_trampas_prod_form(){
    $parcelas = Parcelas::get();
    return view('captura_trampas_prod.form', compact('parcelas'));
  }

  //Guardar captura en trampas produccion
  public function captura_trampas_prod_save(Request $request){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'recursos_humanos_hrs' => 'required|numeric|min:0',
      'recursos_humanos_coste_unit' => 'required|numeric|min:0',
      'recursos_humanos_coste_total' => 'required|numeric|min:0',
      'recursos_materiales_hrs' => 'required|numeric|min:0',
      'resursos_materiales_coste_u' => 'required|numeric|min:0',
      'resursos_materiales_coste_t' => 'required|numeric|min:0',
      'total_captura_trampas_hrs' => 'required|numeric|min:0',
      'total_captura_trampas_coste_unit' => 'required|numeric|min:0',
      'total_captura_trampas_coste_total' => 'required|numeric|min:0'
    ]);

    $captura_trampa_prod_data = request()->except('_token');
    CapturaTrampasProd::insert($captura_trampa_prod_data);
    return back()->with('captura_trampas_prod_save',
      'Captura en trampas de costes de producción guardado');
  }

  //Eliminar captura en trampas produccion
  public function captura_trampas_prod_delete($id){
    CapturaTrampasProd::destroy($id);
    return back()->with('captura_trampas_prod_delete',
      'Captura en trampas de costes de producción eliminado');
  }

  //Formulario modificar captura en trampas produccion
  public function captura_trampas_prod_form_update($id){
    $captura_trampa_prod = CapturaTrampasProd::findOrFail($id);
    $parcelas = Parcelas::get();
    return view('captura_trampas_prod.form_update',
      compact('captura_trampa_prod', 'parcelas'));
  }

  //Modificar captura en trampas produccion
  public function captura_trampas_prod_update(Request $request, $id){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'recursos_humanos_hrs' => 'required|numeric|min:0',
      'recursos_humanos_coste_unit' => 'required|numeric|min:0',
      'recursos_humanos_coste_total' => 'required|numeric|min:0',
      'recursos_materiales_hrs' => 'required|numeric|min:0',
      'resursos_materiales_coste_u' => 'required|numeric|min:0',
      'resursos_materiales_coste_t' => 'required|numeric|min:0',
      'total_captura_trampas_hrs' => 'required|numeric|min:0',
      'total_captura_trampas_coste_unit' => 'required|numeric|min:0',
      'total_captura_trampas_coste_total' => 'required|numeric|min:0'
    ]);

    $captura_trampa_prod_data = request()->except((['_token', '_method']));
    CapturaTrampasProd::where('id', '=', $id)->update($captura_trampa_prod_data);
    return back()->with('captura_trampas_prod_update',
      'Captura en trampas de costes de producción modificado');
  }
}
