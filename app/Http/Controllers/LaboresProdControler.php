<?php
namespace App\Http\Controllers;

use App\LaboresProd;
use App\Parcelas;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LaboresProdControler extends Controller
{
  //Listado de labores
  public function labores_prod_list(){
    $data['labores_prod'] = LaboresProd::paginate(3);
    return view('labores_prod.listar', $data);
  }

  //Formulario de labores
  public function labores_prod_form(){
    $parcelas = Parcelas::get();
    return view('labores_prod.form', compact('parcelas'));
  }

  //Guardar labores
  public function labores_prod_save(Request $request){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'recursos_humanos_hrs' => 'required|numeric|min:0',
      'recursos_humanos_coste_unit' => 'required|numeric|min:0',
      'recursos_humanos_coste_total' => 'required|numeric|min:0',
      'recursos_materiales_hrs' => 'required|numeric|min:0',
      'resursos_materiales_coste_u' => 'required|numeric|min:0',
      'resursos_materiales_coste_t' => 'required|numeric|min:0',
      'total_labores_hrs' => 'required|numeric|min:0',
      'total_labores_coste_unit' => 'required|numeric|min:0',
      'total_labores_coste_total' => 'required|numeric|min:0'
    ]);

    $labores_prod_data = request()->except('_token');
    LaboresProd::insert($labores_prod_data);
    return back()->with('labores_prod_save',
      'Labor de costes de produccion guardado');
  }

  //Eliminar labores
  public function labores_prod_delete($id){
    LaboresProd::destroy($id);
    return back()->with('labores_prod_delete',
      'Labor de costes de produccion eliminado');
  }

  //Formulario modificar labores
  public function labores_prod_form_update($id){
    $labor_prod = LaboresProd::findOrFail($id);
    $parcelas = Parcelas::get();
    return view('labores_prod.form_update',
      compact('labor_prod', 'parcelas'));
  }

  //Modificar labores
  public function labores_prod_update(Request $request, $id){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'recursos_humanos_hrs' => 'required|numeric|min:0',
      'recursos_humanos_coste_unit' => 'required|numeric|min:0',
      'recursos_humanos_coste_total' => 'required|numeric|min:0',
      'recursos_materiales_hrs' => 'required|numeric|min:0',
      'resursos_materiales_coste_u' => 'required|numeric|min:0',
      'resursos_materiales_coste_t' => 'required|numeric|min:0',
      'total_labores_hrs' => 'required|numeric|min:0',
      'total_labores_coste_unit' => 'required|numeric|min:0',
      'total_labores_coste_total' => 'required|numeric|min:0'
    ]);

    $labores_prod_data = request()->except((['_token', '_method']));
    LaboresProd::where('id', '=', $id)->update($labores_prod_data);
    return back()->with('labores_prod_update',
      'Labor de costes de produccion modificado');
  }
}
