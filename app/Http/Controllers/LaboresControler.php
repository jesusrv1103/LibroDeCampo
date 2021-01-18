<?php

namespace App\Http\Controllers;

use App\Labores;
use App\Parcelas;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LaboresControler extends Controller
{
  //Listado de labores
  public function labores_list(){
    $data['labores'] = Labores::paginate(3);
    return view('labores.listar', $data);
  }

  //Formulario de labores
  public function labores_form(){
    $parcelas = Parcelas::get();
    return view('labores.form', compact('parcelas'));
  }

  //Guardar labores
  public function labores_save(Request $request){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'fecha' => 'required|date',
      'practica_realizada' => 'required|string|min:5|max:50'
    ]);

    $labores_data = request()->except('_token');
    Labores::insert($labores_data);
    return back()->with('labores_save', 'Labor guardada');
  }

  //Eliminar labores
  public function labores_delete($id){
    Labores::destroy($id);
    return back()->with('labores_delete', 'Labor eliminada');
  }

  //Formulario modificar danos por fenomenos mataorologicos
  public function labores_form_update($id){
    $labor = Labores::findOrFail($id);
    $parcelas = Parcelas::get();
    return view('labores.form_update', compact('labor', 'parcelas'));
  }

  //Modificar danos por fenomenos mataorologicos
  public function labores_update(Request $request, $id){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'fecha' => 'required|date',
      'practica_realizada' => 'required|string|min:5|max:50'
    ]);
    
    $labores_data = request()->except((['_token', '_method']));
    Labores::where('id', '=', $id)->update($labores_data);
    return back()->with('labores_update', 'Labor modificada');
  }
}
