<?php
namespace App\Http\Controllers;

use App\RecoleccionProd;
use App\Parcelas;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RecoleccionProdControler extends Controller
{
  //Listado de recolecciones
  public function recoleccion_prod_list(){
    $data['recoleccion_prod'] = RecoleccionProd::paginate(3);
    return view('recoleccion_prod.listar', $data);
  }

  //Formulario de recolecciones
  public function recoleccion_prod_form(){
    $parcelas = Parcelas::get();
    return view('recoleccion_prod.form', compact('parcelas'));
  }

  //Guardar recolecciones
  public function recoleccion_prod_save(Request $request){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'recursos_humanos_hrs' => 'required|numeric|min:0',
      'recursos_humanos_coste_unit' => 'required|numeric|min:0',
      'recursos_humanos_coste_total' => 'required|numeric|min:0',
      'recursos_materiales_hrs' => 'required|numeric|min:0',
      'resursos_materiales_coste_u' => 'required|numeric|min:0',
      'resursos_materiales_coste_t' => 'required|numeric|min:0',
      'total_recoleccion_hrs' => 'required|numeric|min:0',
      'total_recoleccion_coste_unit' => 'required|numeric|min:0',
      'total_recoleccion_coste_total' => 'required|numeric|min:0'
    ]);

    $recoleccion_prod_data = request()->except('_token');
    RecoleccionProd::insert($recoleccion_prod_data);
    return back()->with('recoleccion_prod_save',
      'Recoleccion de costes de produccion guardado');
  }

  //Eliminar recolecciones
  public function recoleccion_prod_delete($id){
    RecoleccionProd::destroy($id);
    return back()->with('recoleccion_prod_delete',
      'Recoleccion de costes de produccion eliminado');
  }

  //Formulario modificar recolecciones
  public function recoleccion_prod_form_update($id){
    $recoleccion_prod = RecoleccionProd::findOrFail($id);
    $parcelas = Parcelas::get();
    return view('recoleccion_prod.form_update',
      compact('recoleccion_prod', 'parcelas'));
  }

  //Modificar recolecciones
  public function recoleccion_prod_update(Request $request, $id){
    $recoleccion_prod_data = request()->except((['_token', '_method']));
    RecoleccionProd::where('id', '=', $id)->update($recoleccion_prod_data);
    return back()->with('recoleccion_prod_update',
      'Recoleccion de costes de produccion modificado');
  }
}
