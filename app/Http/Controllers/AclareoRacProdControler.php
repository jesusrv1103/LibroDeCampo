<?php

namespace App\Http\Controllers;

use App\AclareoRacProd;
use App\Parcelas;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AclareoRacProdControler extends Controller
{
  //Listado de aclareo de racimos
  public function aclareo_racimos_prod_list(){
    $data['aclareo_racimos_prod'] = AclareoRacProd::paginate(3);
    return view('aclareo_racimos_prod.listar', $data);
  }

  //Formulario de aclareo de racimos
  public function aclareo_racimos_prod_form(){
    $parcelas = Parcelas::get();
    return view('aclareo_racimos_prod.form', compact('parcelas'));
  }

  //Guardar aclareo de racimos
  public function aclareo_racimos_prod_save(Request $request){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'recursos_humanos_hrs' => 'required|numeric|min:0',
      'recursos_humanos_coste_unit' => 'required|numeric|min:0',
      'recursos_humanos_coste_total' => 'required|numeric|min:0',
      'recursos_materiales_hrs' => 'required|numeric|min:0',
      'resursos_materiales_coste_u' => 'required|numeric|min:0',
      'resursos_materiales_coste_t' => 'required|numeric|min:0',
      'total_aclareos_hrs' => 'required|numeric|min:0',
      'total_aclareos_coste_unit' => 'required|numeric|min:0',
      'total_aclareos_coste_total' => 'required|numeric|min:0'
    ]);

    $aclareo_racimo_prod_data = request()->except('_token');
    AclareoRacProd::insert($aclareo_racimo_prod_data);
    return back()->with('aclareo_racimos_prod_save',
      'Aclareo de racimos de costes de producción guardado');
  }

  //Eliminar aclareo de racimos
  public function aclareo_racimos_prod_delete($id){
    AclareoRacProd::destroy($id);
    return back()->with('aclareo_racimos_prod_delete',
      'Aclareo de racimos de costes de producción eliminado');
  }

  //Formulario modificar aclareo de racimos
  public function aclareo_racimos_prod_form_update($id){
    $aclareo_racimo_prod = AclareoRacProd::findOrFail($id);
    $parcelas = Parcelas::get();
    return view('aclareo_racimos_prod.form_update',
      compact('aclareo_racimo_prod', 'parcelas'));
  }

  //Modificar aclareo de racimos
  public function aclareo_racimos_prod_update(Request $request, $id){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'recursos_humanos_hrs' => 'required|numeric|min:0',
      'recursos_humanos_coste_unit' => 'required|numeric|min:0',
      'recursos_humanos_coste_total' => 'required|numeric|min:0',
      'recursos_materiales_hrs' => 'required|numeric|min:0',
      'resursos_materiales_coste_u' => 'required|numeric|min:0',
      'resursos_materiales_coste_t' => 'required|numeric|min:0',
      'total_aclareos_hrs' => 'required|numeric|min:0',
      'total_aclareos_coste_unit' => 'required|numeric|min:0',
      'total_aclareos_coste_total' => 'required|numeric|min:0'
    ]);

    $aclareo_racimo_prod_data = request()->except((['_token', '_method']));
    AclareoRacProd::where('id', '=', $id)->update($aclareo_racimo_prod_data);
    return back()->with('aclareo_racimos_prod_update',
      'Aclareo de racimos de costes de producción modificado');
  }
}
