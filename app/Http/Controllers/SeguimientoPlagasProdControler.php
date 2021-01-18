<?php

namespace App\Http\Controllers;

use App\SeguimientoPlagasProd;
use App\Parcelas;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SeguimientoPlagasProdControler extends Controller
{
  //Listado de seguimiento de plagas produccion
  public function seguimiento_plagas_prod_list(){
    $data['seguimiento_plagas_prod'] = SeguimientoPlagasProd::paginate(3);
    return view('seguimiento_plagas_prod.listar', $data);
  }

  //Formulario de seguimiento de plagas produccion
  public function seguimiento_plagas_prod_form(){
    $parcelas = Parcelas::get();
    return view('seguimiento_plagas_prod.form', compact('parcelas'));
  }

  //Guardar seguimiento de plagas produccion
  public function seguimiento_plagas_prod_save(Request $request){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'recursos_humanos_hrs' => 'required|numeric|min:0',
      'recursos_humanos_coste_unit' => 'required|numeric|min:0',
      'recursos_humanos_coste_total' => 'required|numeric|min:0',
      'recursos_materiales_hrs' => 'required|numeric|min:0',
      'resursos_materiales_coste_u' => 'required|numeric|min:0',
      'resursos_materiales_coste_t' => 'required|numeric|min:0',
      'total_seguimiento_plagas_hrs' => 'required|numeric|min:0',
      'total_seguimiento_plagas_coste_unit' => 'required|numeric|min:0',
      'total_seguimiento_plagas_coste_total' => 'required|numeric|min:0'
    ]);

    $seguimiento_plaga_prod_data = request()->except('_token');
    SeguimientoPlagasProd::insert($seguimiento_plaga_prod_data);
    return back()->with('seguimiento_plagas_prod_save',
      'Seguimiento de plagas de costes de producción guardado');
  }

  //Eliminar seguimiento de plagas produccion
  public function seguimiento_plagas_prod_delete($id){
    SeguimientoPlagasProd::destroy($id);
    return back()->with('seguimiento_plagas_prod_delete',
      'Seguimiento de plagas de costes de producción eliminado');
  }

  //Formulario modificar seguimiento de plagas produccion
  public function seguimiento_plagas_prod_form_update($id){
    $seguimiento_plaga_prod = SeguimientoPlagasProd::findOrFail($id);
    $parcelas = Parcelas::get();
    return view('seguimiento_plagas_prod.form_update',
      compact('seguimiento_plaga_prod', 'parcelas'));
  }

  //Modificar seguimiento de plagas produccion
  public function seguimiento_plagas_prod_update(Request $request, $id){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'recursos_humanos_hrs' => 'required|numeric|min:0',
      'recursos_humanos_coste_unit' => 'required|numeric|min:0',
      'recursos_humanos_coste_total' => 'required|numeric|min:0',
      'recursos_materiales_hrs' => 'required|numeric|min:0',
      'resursos_materiales_coste_u' => 'required|numeric|min:0',
      'resursos_materiales_coste_t' => 'required|numeric|min:0',
      'total_seguimiento_plagas_hrs' => 'required|numeric|min:0',
      'total_seguimiento_plagas_coste_unit' => 'required|numeric|min:0',
      'total_seguimiento_plagas_coste_total' => 'required|numeric|min:0'
    ]);

    $seguimiento_plaga_prod_data = request()->except((['_token', '_method']));
    SeguimientoPlagasProd::where('id', '=', $id)->update($seguimiento_plaga_prod_data);
    return back()->with('seguimiento_plagas_prod_update',
      'Seguimiento de plagas de costes de producción modificado');
  }
}
