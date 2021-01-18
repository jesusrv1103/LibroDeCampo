<?php

namespace App\Http\Controllers;

use App\SeguimientoPlagas;
use App\Parcelas;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SeguimientoPlagasControler extends Controller
{
  //Listado de seguimiento de plagas
  public function seguimiento_plagas_list(){
    $data['seguimiento_plagas'] = SeguimientoPlagas::paginate(3);
    return view('seguimiento_plagas.listar', $data);
  }

  //Formulario de seguimiento de plagas
  public function seguimiento_plagas_form(){
    $parcelas = Parcelas::get();
    return view('seguimiento_plagas.form', compact('parcelas'));
  }

  //Guardar seguimiento de plagas
  public function seguimiento_plagas_save(Request $request){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'fecha' => 'required|date',
      'no_cepas_observadas' => 'required|numeric|min:0',
      'no_organismos_cepa'  => 'required|numeric|min:0',
      'parasito_observado'  => 'required|string|min:5|max:50',
      'nivel_ataque'  => 'required|numeric|min:0',
      'tratamiento'  => 'required',
    ]);


    $seguimiento_plagas_data = request()->except('_token');
    SeguimientoPlagas::insert($seguimiento_plagas_data);
    return back()->with('seguimiento_plagas_save',
      'Seguimiento de plagas guardado');
  }

  //Eliminar seguimiento de plagas
  public function seguimiento_plagas_delete($id){
    SeguimientoPlagas::destroy($id);
    return back()->with('seguimiento_plagas_delete',
      'Seguimiento de plagas eliminado');
  }

  //Formulario modificar seguimiento de plagas
  public function seguimiento_plagas_form_update($id){
    $seguimiento_plaga = SeguimientoPlagas::findOrFail($id);
    $parcelas = Parcelas::get();
    return view('seguimiento_plagas.form_update',
      compact('seguimiento_plaga', 'parcelas'));
  }

  //Modificar seguimiento de plagas
  public function seguimiento_plagas_update(Request $request, $id){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'fecha' => 'required|date',
      'no_cepas_observadas' => 'required|numeric|min:0',
      'no_organismos_cepa'  => 'required|numeric|min:0',
      'parasito_observado'  => 'required|string|min:5|max:50',
      'nivel_ataque'  => 'required|numeric|min:0',
      'tratamiento'  => 'required',
    ]);

    $seguimiento_plagas_data = request()->except((['_token', '_method']));
    SeguimientoPlagas::where('id', '=', $id)->update($seguimiento_plagas_data);
    return back()->with('seguimiento_plagas_update',
      'Seguimiento de plagas modificado');
  }


}
