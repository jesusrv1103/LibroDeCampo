<?php

namespace App\Http\Controllers;

use App\Podas;
use App\Parcelas;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PodasControler extends Controller
{
  //Listado de podas
  public function podas_list(){
    $data['podas'] = Podas::paginate(3);
    return view('podas.listar', $data);
  }

  //Formulario de podas
  public function podas_form(){
    $parcelas = Parcelas::get();
    return view('podas.form', compact('parcelas'));
  }

  //Guardar podas
  public function podas_save(Request $request){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'fecha' => 'required|date',
      'practica_realizada' => 'required|string|min:5|max:50'
    ]);

    $podas_data = request()->except('_token');
    Podas::insert($podas_data);
    return back()->with('podas_save', 'Poda guardada');
  }

  //Eliminar podas
  public function podas_delete($id){
    Podas::destroy($id);
    return back()->with('podas_delete', 'Poda eliminada');
  }

  //Formulario modificar danos por fenomenos mataorologicos
  public function podas_form_update($id){
    $poda = Podas::findOrFail($id);
    $parcelas = Parcelas::get();
    return view('podas.form_update', compact('poda', 'parcelas'));
  }

  //Modificar danos por fenomenos mataorologicos
  public function podas_update(Request $request, $id){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'fecha' => 'required|date',
      'practica_realizada' => 'required|string|min:5|max:50'
    ]);

    $podas_data = request()->except((['_token', '_method']));
    Podas::where('id', '=', $id)->update($podas_data);
    return back()->with('podas_update', 'Poda modificada');
  }
}
