<?php
namespace App\Http\Controllers;

use App\RiegosProd;
use App\Parcelas;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RiegosProdControler extends Controller
{
  //Listado de riegos
  public function riegos_prod_list(){
    $data['riegos_prod'] = RiegosProd::paginate(3);
    return view('riegos_prod.listar', $data);
  }

  //Formulario de riegos
  public function riegos_prod_form(){
    $parcelas = Parcelas::get();
    return view('riegos_prod.form', compact('parcelas'));
  }

  //Guardar riegos
  public function riegos_prod_save(Request $request){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'recursos_humanos_hrs' => 'required|numeric|min:0',
      'recursos_humanos_coste_unit' => 'required|numeric|min:0',
      'recursos_humanos_coste_total' => 'required|numeric|min:0',
      'recursos_materiales_hrs' => 'required|numeric|min:0',
      'resursos_materiales_coste_u' => 'required|numeric|min:0',
      'resursos_materiales_coste_t' => 'required|numeric|min:0',
      'total_riegos_hrs' => 'required|numeric|min:0',
      'total_riegos_coste_unit' => 'required|numeric|min:0',
      'total_riegos_coste_total' => 'required|numeric|min:0'
    ]);

    $riegos_data = request()->except('_token');
    RiegosProd::insert($riegos_data);
    return back()->with('riegos_prod_save',
      'Riego de costes de produccion guardado');
  }

  //Eliminar riegos
  public function riegos_prod_delete($id){
    RiegosProd::destroy($id);
    return back()->with('riegos_prod_delete',
      'Riego de costes de produccion eliminado');
  }

  //Formulario modificar riegos
  public function riegos_prod_form_update($id){
    $riego_prod = RiegosProd::findOrFail($id);
    $parcelas = Parcelas::get();
    return view('riegos_prod.form_update', compact('riego_prod', 'parcelas'));
  }

  //Modificar riegos
  public function riegos_prod_update(Request $request, $id){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'recursos_humanos_hrs' => 'required|numeric|min:0',
      'recursos_humanos_coste_unit' => 'required|numeric|min:0',
      'recursos_humanos_coste_total' => 'required|numeric|min:0',
      'recursos_materiales_hrs' => 'required|numeric|min:0',
      'resursos_materiales_coste_u' => 'required|numeric|min:0',
      'resursos_materiales_coste_t' => 'required|numeric|min:0',
      'total_riegos_hrs' => 'required|numeric|min:0',
      'total_riegos_coste_unit' => 'required|numeric|min:0',
      'total_riegos_coste_total' => 'required|numeric|min:0'
    ]);

    $riegos_data = request()->except((['_token', '_method']));
    RiegosProd::where('id', '=', $id)->update($riegos_data);
    return back()->with('riegos_prod_update',
      'Riego de costes de produccion modificado');
  }
}
