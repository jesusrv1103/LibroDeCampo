<?php
namespace App\Http\Controllers;

use App\AbonadosProd;
use App\Parcelas;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AbonadosProdControler extends Controller
{
  //Listado de abonados
  public function abonados_prod_list(){
    $data['abonados_prod'] = AbonadosProd::paginate(3);
    return view('abonados_prod.listar', $data);
  }

  //Formulario de abonados
  public function abonados_prod_form(){
    $parcelas = Parcelas::get();
    return view('abonados_prod.form', compact('parcelas'));
  }

  //Guardar abonados
  public function abonados_prod_save(Request $request){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'recursos_humanos_hrs' => 'required|numeric|min:0',
      'recursos_humanos_coste_unit' => 'required|numeric|min:0',
      'recursos_humanos_coste_total' => 'required|numeric|min:0',
      'recursos_materiales_hrs' => 'required|numeric|min:0',
      'resursos_materiales_coste_u' => 'required|numeric|min:0',
      'resursos_materiales_coste_t' => 'required|numeric|min:0',
      'total_abonados_hrs' => 'required|numeric|min:0',
      'total_abonados_coste_unit' => 'required|numeric|min:0',
      'total_abonados_coste_total' => 'required|numeric|min:0'
    ]);

    $abonados_prod_data = request()->except('_token');
    AbonadosProd::insert($abonados_prod_data);
    return back()->with('abonados_prod_save',
      'Abonado de costes de produccion guardado');
  }

  //Eliminar abonados
  public function abonados_prod_delete($id){
    AbonadosProd::destroy($id);
    return back()->with('abonados_prod_delete',
      'Abonado de costes de produccion eliminado');
  }

  //Formulario modificar abonados
  public function abonados_prod_form_update($id){
    $abonado_prod = AbonadosProd::findOrFail($id);
    $parcelas = Parcelas::get();
    return view('abonados_prod.form_update',
      compact('abonado_prod', 'parcelas'));
  }

  //Modificar abonados
  public function abonados_prod_update(Request $request, $id){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'recursos_humanos_hrs' => 'required|numeric|min:0',
      'recursos_humanos_coste_unit' => 'required|numeric|min:0',
      'recursos_humanos_coste_total' => 'required|numeric|min:0',
      'recursos_materiales_hrs' => 'required|numeric|min:0',
      'resursos_materiales_coste_u' => 'required|numeric|min:0',
      'resursos_materiales_coste_t' => 'required|numeric|min:0',
      'total_abonados_hrs' => 'required|numeric|min:0',
      'total_abonados_coste_unit' => 'required|numeric|min:0',
      'total_abonados_coste_total' => 'required|numeric|min:0'
    ]);

    $abonados_prod_data = request()->except((['_token', '_method']));
    AbonadosProd::where('id', '=', $id)->update($abonados_prod_data);
    return back()->with('abonados_prod_update',
      'Abonado de costes de produccion modificado');
  }
}
