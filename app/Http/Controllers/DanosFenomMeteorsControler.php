<?php

namespace App\Http\Controllers;

use App\DanosFenomMeteors;
use App\Parcelas;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DanosFenomMeteorsControler extends Controller
{
    //Listado de danos por fenomenos mataorologicos
    public function danos_fenom_meteors_list(){
      $data['danos_fenom_meteors'] = DanosFenomMeteors::paginate(3);
      return view('danos_fenom_meteors.listar', $data);
    }

    //Formulario de danos por fenomenos mataorologicos
    public function danos_fenom_meteors_form(){
      $parcelas = Parcelas::get();
      return view('danos_fenom_meteors.form', compact('parcelas'));
    }

    //Guardar danos por fenomenos mataorologicos
    public function danos_fenom_meteors_save(Request $request){
      $validador = $this->validate($request, [
        'parcela_id' => 'required',
        'fecha' => 'required|date',
        'dano' => 'required|numeric|min:0',
        'medidas_adoptivas' => 'required|string|min:5|max:35'
      ]);

      $danos_fenom_meteors_data = request()->except('_token');
      DanosFenomMeteors::insert($danos_fenom_meteors_data);
      return back()->with('danos_fenom_meteors_save',
        'Daños por fenomenos mataorologicos guardada');
    }

  //Eliminar danos por fenomenos mataorologicos
  public function danos_fenom_meteors_delete($id){
    DanosFenomMeteors::destroy($id);
    return back()->with('danos_fenom_meteors_delete',
      'Daños por fenomenos mataorologicos eliminada');
  }

  //Formulario modificar danos por fenomenos mataorologicos
  public function danos_fenom_meteors_form_update($id){
    $dano_fenom_meteor = DanosFenomMeteors::findOrFail($id);
    $parcelas = Parcelas::get();
    return view('danos_fenom_meteors.form_update',
      compact('dano_fenom_meteor', 'parcelas'));
  }

  //Modificar danos por fenomenos mataorologicos
  public function danos_fenom_meteors_update(Request $request, $id){
    $validador = $this->validate($request, [
      'parcela_id' => 'required',
      'fecha' => 'required|date',
      'dano' => 'required|numeric|min:0',
      'medidas_adoptivas' => 'required|string|min:5|max:35'
    ]);

    $danos_fenom_meteors_data = request()->except((['_token', '_method']));
    DanosFenomMeteors::where('id', '=', $id)->update($danos_fenom_meteors_data);
    return back()->with('danos_fenom_meteors_update',
      'Daños por fenomenos mataorologicos modificado');
  }
}
