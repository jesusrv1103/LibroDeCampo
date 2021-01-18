<?php

namespace App\Http\Controllers;

use App\DanosFenomMeteorsProd;
use App\Parcelas;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DanosFenomMeteorsProdControler extends Controller
{
    //Listado de danos por fenomenos mataorologicos
    public function danos_fenom_meteors_prod_list(){
      $data['danos_fenom_meteors_prod'] = DanosFenomMeteorsProd::paginate(3);
      return view('danos_fenom_meteors_prod.listar', $data);
    }

    //Formulario de danos por fenomenos mataorologicos
    public function danos_fenom_meteors_prod_form(){
      $parcelas = Parcelas::get();
      return view('danos_fenom_meteors_prod.form', compact('parcelas'));
    }

    //Guardar danos por fenomenos mataorologicos
    public function danos_fenom_meteors_prod_save(Request $request){
      $validador = $this->validate($request, [
        'parcela_id' => 'required',
        'recursos_humanos_hrs' => 'required|numeric|min:0',
        'recursos_humanos_coste_unit' => 'required|numeric|min:0',
        'recursos_humanos_coste_total' => 'required|numeric|min:0',
        'recursos_materiales_hrs' => 'required|numeric|min:0',
        'resursos_materiales_coste_u' => 'required|numeric|min:0',
        'resursos_materiales_coste_t' => 'required|numeric|min:0',
        'total_danos_fenom_meteors_hrs' => 'required|numeric|min:0',
        'total_danos_fenom_meteors_coste_unit' => 'required|numeric|min:0',
        'total_danos_fenom_meteors_coste_total' => 'required|numeric|min:0'
      ]);

      $danos_fenom_meteors_prod_data = request()->except('_token');
      DanosFenomMeteorsProd::insert($danos_fenom_meteors_prod_data);
      return back()->with('danos_fenom_meteors_prod_save',
        'Daños por fenomenos mataorologicos guardada');
    }

  //Eliminar danos por fenomenos mataorologicos
  public function danos_fenom_meteors_prod_delete($id){
    DanosFenomMeteorsProd::destroy($id);
    return back()->with('danos_fenom_meteors_prod_delete',
      'Daños por fenomenos mataorologicos eliminada');
  }

  //Formulario modificar danos por fenomenos mataorologicos
  public function danos_fenom_meteors_prod_form_update($id){
    $dano_fenom_meteor_prod = DanosFenomMeteorsProd::findOrFail($id);
    $parcelas = Parcelas::get();
    return view('danos_fenom_meteors_prod.form_update',
      compact('dano_fenom_meteor_prod', 'parcelas'));
  }

  //Modificar danos por fenomenos mataorologicos
  public function danos_fenom_meteors_prod_update(Request $request, $id){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'recursos_humanos_hrs' => 'required|numeric|min:0',
      'recursos_humanos_coste_unit' => 'required|numeric|min:0',
      'recursos_humanos_coste_total' => 'required|numeric|min:0',
      'recursos_materiales_hrs' => 'required|numeric|min:0',
      'resursos_materiales_coste_u' => 'required|numeric|min:0',
      'resursos_materiales_coste_t' => 'required|numeric|min:0',
      'total_danos_fenom_meteors_hrs' => 'required|numeric|min:0',
      'total_danos_fenom_meteors_coste_unit' => 'required|numeric|min:0',
      'total_danos_fenom_meteors_coste_total' => 'required|numeric|min:0'
    ]);

    $danos_fenom_meteors_prod_data = request()->except((['_token', '_method']));
    DanosFenomMeteorsProd::where('id', '=', $id)->update($danos_fenom_meteors_prod_data);
    return back()->with('danos_fenom_meteors_prod_update',
      'Daños por fenomenos mataorologicos modificado');
  }
}
