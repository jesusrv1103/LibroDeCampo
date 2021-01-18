<?php

namespace App\Http\Controllers;

use App\CapturaTrampas;
use App\Parcelas;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CapturaTrampasControler extends Controller
{
  //Listado de captura trampas
  public function captura_trampas_list(){
    $data['captura_trampas'] = CapturaTrampas::paginate(3);
    return view('captura_trampas.listar', $data);
  }

  //Formulario de captura trampas
  public function captura_trampas_form(){
    $parcelas = Parcelas::get();
    return view('captura_trampas.form', compact('parcelas'));
  }

  //Guardar captura trampas
  public function captura_trampas_save(Request $request){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'fecha_1' => 'required|date',
      'polilla_racimo_1' => 'required|string|min:5|max:25',
      'fecha_2' => 'required|date',
      'polilla_racimo_2' => 'required|string|min:5|max:25'
    ]);

    $captura_trampas_data = request()->except('_token');
    CapturaTrampas::insert($captura_trampas_data);
    return back()->with('captura_trampas_save', 'Captura trampas guardado');
  }

  //Eliminar captura trampas
  public function captura_trampas_delete($id){
    CapturaTrampas::destroy($id);
    return back()->with('captura_trampas_delete', 'Captura trampas eliminado');
  }

  //Formulario modificar captura trampas
  public function captura_trampas_form_update($id){
    $captura_trampa = CapturaTrampas::findOrFail($id);
    $parcelas = Parcelas::get();
    return view('captura_trampas.form_update',
      compact('captura_trampa', 'parcelas'));
  }

  //Modificar captura trampas
  public function captura_trampas_update(Request $request, $id){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'fecha_1' => 'required|date',
      'polilla_racimo_1' => 'required|string|min:5|max:25',
      'fecha_2' => 'required|date',
      'polilla_racimo_2' => 'required|string|min:5|max:25'
    ]);

    $captura_trampas_data = request()->except((['_token', '_method']));
    CapturaTrampas::where('id', '=', $id)->update($captura_trampas_data);
    return back()->with('captura_trampas_update', 'Captura trampas modificado');
  }
}
