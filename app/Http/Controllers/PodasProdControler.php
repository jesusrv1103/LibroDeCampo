<?php
namespace App\Http\Controllers;

use App\PodasProd;
use App\Parcelas;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PodasProdControler extends Controller
{
  //Listado de podas
  public function podas_prod_list(){
    $data['podas_prod'] = PodasProd::paginate(3);
    return view('podas_prod.listar', $data);
  }

  //Formulario de podas
  public function podas_prod_form(){
    $parcelas = Parcelas::get();
    return view('podas_prod.form', compact('parcelas'));
  }

  //Guardar podas
  public function podas_prod_save(Request $request){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'recursos_humanos_hrs' => 'required|numeric|min:0',
      'recursos_humanos_coste_unit' => 'required|numeric|min:0',
      'recursos_humanos_coste_total' => 'required|numeric|min:0',
      'recursos_materiales_hrs' => 'required|numeric|min:0',
      'resursos_materiales_coste_u' => 'required|numeric|min:0',
      'resursos_materiales_coste_t' => 'required|numeric|min:0',
      'total_podas_hrs' => 'required|numeric|min:0',
      'total_podas_coste_unit' => 'required|numeric|min:0',
      'total_podas_coste_total' => 'required|numeric|min:0'
    ]);

    $podas_prod_data = request()->except('_token');
    PodasProd::insert($podas_prod_data);
    return back()->with('podas_prod_save',
      'Poda de costes de produccion guardado');
  }

  //Eliminar podas
  public function podas_prod_delete($id){
    PodasProd::destroy($id);
    return back()->with('podas_prod_delete',
      'Poda de costes de produccion eliminado');
  }

  //Formulario modificar podas
  public function podas_prod_form_update($id){
    $poda_prod = PodasProd::findOrFail($id);
    $parcelas = Parcelas::get();
    return view('podas_prod.form_update', compact('poda_prod', 'parcelas'));
  }

  //Modificar podas
  public function podas_prod_update(Request $request, $id){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'recursos_humanos_hrs' => 'required|numeric|min:0',
      'recursos_humanos_coste_unit' => 'required|numeric|min:0',
      'recursos_humanos_coste_total' => 'required|numeric|min:0',
      'recursos_materiales_hrs' => 'required|numeric|min:0',
      'resursos_materiales_coste_u' => 'required|numeric|min:0',
      'resursos_materiales_coste_t' => 'required|numeric|min:0',
      'total_podas_hrs' => 'required|numeric|min:0',
      'total_podas_coste_unit' => 'required|numeric|min:0',
      'total_podas_coste_total' => 'required|numeric|min:0'
    ]);
    
    $podas_prod_data = request()->except((['_token', '_method']));
    PodasProd::where('id', '=', $id)->update($podas_prod_data);
    return back()->with('podas_prod_update',
      'Poda de costes de produccion modificado');
  }
}
