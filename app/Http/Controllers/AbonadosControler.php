<?php

namespace App\Http\Controllers;

use App\Abonados;
use App\Parcelas;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AbonadosControler extends Controller
{
  //Listado de abonados
  public function abonados_list(){
    $data['abonados'] = Abonados::paginate(3);
    return view('abonados.listar', $data);
  }

  //Formulario de abonados
  public function abonados_form(){
    $parcelas = Parcelas::get();
    return view('abonados.form', compact('parcelas'));
  }

  //Guardar abonados
  public function abonados_save(Request $request){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'fecha' => 'required|date',
      'nombre_comercial' => 'required|string|min:5|max:30',
      'composicion' => 'required|numeric|min:0',
      'forma_aplicacion' => 'required|string|min:5|max:50',
      'gasto_abono' => 'required|numeric|min:0'
    ]);

    $abonados_data = request()->except('_token');
    Abonados::insert($abonados_data);
    return back()->with('abonados_save', 'Abonado guardado');
  }

  //Eliminar abonados
  public function abonados_delete($id){
    Abonados::destroy($id);
    return back()->with('abonados_delete', 'Abonado eliminado');
  }

  //Formulario modificar abonados
  public function abonados_form_update($id){
    $abonado = Abonados::findOrFail($id);
    $parcelas = Parcelas::get();
    return view('abonados.form_update', compact('abonado', 'parcelas'));
  }

  //Modificar abonados
  public function abonados_update(Request $request, $id){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'fecha' => 'required|date',
      'nombre_comercial' => 'required|string|min:5|max:30',
      'composicion' => 'required|numeric|min:0',
      'forma_aplicacion' => 'required|string|min:5|max:50',
      'gasto_abono' => 'required|numeric|min:0'
    ]);

    $abonados_data = request()->except((['_token', '_method']));
    Abonados::where('id', '=', $id)->update($abonados_data);
    return back()->with('abonados_update', 'Abonado modificado');
  }

}
