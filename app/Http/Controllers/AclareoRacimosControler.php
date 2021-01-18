<?php

namespace App\Http\Controllers;

use App\AclareoRacimos;
use App\Parcelas;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AclareoRacimosControler extends Controller
{
  //Listado de aclareo de racimos
  public function aclareo_racimos_list(){
    $data['aclareo_racimos'] = AclareoRacimos::paginate(3);
    return view('aclareo_racimos.listar', $data);
  }

  //Formulario de aclareo de racimos
  public function aclareo_racimos_form(){
    $parcelas = Parcelas::get();
    return view('aclareo_racimos.form', compact('parcelas'));
  }

  //Guardar aclareo de racimos
  public function aclareo_racimos_save(Request $request){
    $validador = $this->validate($request, [
      'fecha' => 'required|date',
      'practica_realizada' => 'required|string|min:5|max:50'
    ]);

    $aclareo_racimos_data = request()->except('_token');
    AclareoRacimos::insert($aclareo_racimos_data);
    return back()->with('aclareo_racimos_save', 'Aclareo de racimos guardado');
  }

  //Eliminar aclareo de racimos
  public function aclareo_racimos_delete($id){
    AclareoRacimos::destroy($id);
    return back()->with('aclareo_racimos_delete',
      'Aclareo de racimos eliminado');
  }

  //Formulario modificar aclareo de racimos
  public function aclareo_racimos_form_update($id){
    $aclareo_racimo = AclareoRacimos::findOrFail($id);
    $parcelas = Parcelas::get();
    return view('aclareo_racimos.form_update',
      compact('aclareo_racimo', 'parcelas'));
  }

  //Modificar aclareo de racimos
  public function aclareo_racimos_update(Request $request, $id){
    $validador = $this->validate($request, [
      'fecha' => 'required|date',
      'practica_realizada' => 'required|string|min:5|max:50'
    ]);

    $aclareo_racimo_data = request()->except((['_token', '_method']));
    AclareoRacimos::where('id', '=', $id)->update($aclareo_racimo_data);
    return back()->with('aclareo_racimos_update',
      'Aclareo de racimos modificado');
  }
}
