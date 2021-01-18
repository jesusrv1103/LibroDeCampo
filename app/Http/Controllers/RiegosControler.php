<?php
namespace App\Http\Controllers;

use App\Riegos;
use App\Parcelas;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RiegosControler extends Controller
{
  //Listado de riegos
  public function riegos_list(){
    $data['riegos'] = Riegos::paginate(3);
    return view('riegos.listar', $data);
  }

  //Formulario de riegos
  public function riegos_form(){
    $parcelas = Parcelas::get();
    return view('riegos.form', compact('parcelas'));
  }

  //Guardar riegos
  public function riegos_save(Request $request){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'fecha' => 'required|date',
      'sistema_riego' => 'required|string|min:5|max:25',
      'gasto_agua'  => 'required|numeric|min:0'
    ]);

    $riegos_data = request()->except('_token');
    Riegos::insert($riegos_data);
    return back()->with('riegos_save', 'Riego guardado');
  }

  //Eliminar riegos
  public function riegos_delete($id){
    Riegos::destroy($id);
    return back()->with('riegos_delete', 'Riego eliminado');
  }

  //Formulario modificar riegos
  public function riegos_form_update($id){
    $riego = Riegos::findOrFail($id);
    $parcelas = Parcelas::get();
    return view('riegos.form_update', compact('riego', 'parcelas'));
  }

  //Modificar riegos
  public function riegos_update(Request $request, $id){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'fecha' => 'required|date',
      'sistema_riego' => 'required|string|min:5|max:25',
      'gasto_agua'  => 'required|numeric|min:0'
    ]);

    $riegos_data = request()->except((['_token', '_method']));
    Riegos::where('id', '=', $id)->update($riegos_data);
    return back()->with('riegos_update', 'Riego modificado');
  }
}
