<?php

namespace App\Http\Controllers;

use App\Maquinaria;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MaquinariaControler extends Controller
{
    //Listado de maquinaria
    public function maquinaria_list(){
      $data['maquinaria'] = Maquinaria::paginate(3);
      return view('maquinaria.listar', $data);
    }

    //Formulario de maquinaria
    public function maquinaria_form(){
      return view('maquinaria.form');
    }

    //Guardar maquinaria
    public function maquinaria_save(Request $request){
      $validador = $this->validate($request, [
        'tipo_equipo' => 'required|string|min:5|max:50',
        'marca' => 'required|string|min:5|max:50',
        'modelo' => 'required|string|min:5|max:50'
      ]);

      $maquinaria_data = request()->except('_token');
      Maquinaria::insert($maquinaria_data);
      return back()->with('maquinaria_save', 'Maquina guardada');
    }

    //Eliminar maquinaria
    public function maquinaria_delete($id){
      Maquinaria::destroy($id);
      return back()->with('maquinaria_delete', 'Maquina eliminada');
    }

    //Formulario modificar maquinaria
    public function maquinaria_form_update($id){
      $maquina = Maquinaria::findOrFail($id);
      return view('maquinaria.form_update', compact('maquina'));
    }

    //Modificar maquinaria
    public function maquinaria_update(Request $request, $id){
      $validador = $this->validate($request, [
        'tipo_equipo' => 'required|string|min:5|max:50',
        'marca' => 'required|string|min:5|max:50',
        'modelo' => 'required|string|min:5|max:50'
      ]);

      $maquinaria_data = request()->except((['_token', '_method']));
      Maquinaria::where('id', '=', $id)->update($maquinaria_data);
      return back()->with('maquinaria_update', 'Maquina modificada');
    }
}
