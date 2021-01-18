<?php

namespace App\Http\Controllers;

use App\Parcelas;
use App\Municipios;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ParcelasControler extends Controller
{
    //Listado de parcelas
    public function parcelas_list(){
      $municipios = Municipios::get();
      $parcelas = Parcelas::paginate(3);
      return view('parcelas.listar', compact('parcelas', 'municipios'));
    }

    //Formulario de parcelas
    public function parcelas_form(){
      $municipios = Municipios::get();
      return view('parcelas.form', compact('municipios'));
    }

    //Guardar parcelas
    public function parcelas_save(Request $request){
      $validador = $this->validate($request, [
        'municipio_id' => 'required',
        'paraje' => 'required|string|min:5|max:20',
        'superficie_HA' => 'required|numeric|min:0',
        'poligono' => 'required|string|min:5|max:30',
        'parcela_recinto' => 'required|numeric|min:0',
        'variedad' => 'required|string|min:5|max:30',
        'patron' => 'required|string|min:5|max:30',
        'proveedor_MV' => 'required|string|min:5|max:30',
        'fecha_plantio' => 'required|date',
        'marco_plantio' => 'required|string|min:5|max:30',
        'cultivo_anterior' => 'required|string|min:5|max:30',
        'sistema_formacion' => 'required|string|min:5|max:30',
        'cubierta_vegetal' => 'required'
      ]);

      $parcelas_data = request()->except('_token');
      Parcelas::insert($parcelas_data);
      return back()->with('parcelas_save', 'Parcela guardada');
    }

    //Eliminar parcelas
    public function parcelas_delete($id){
      Parcelas::destroy($id);
      return back()->with('parcelas_delete', 'Parcela eliminada');
    }

    //Formulario modificar parcelas
    public function parcelas_form_update($id){
      $parcela = Parcelas::findOrFail($id);
      $municipios = Municipios::get();
      return view('parcelas.form_update', compact('parcela', 'municipios'));
    }

    //Modificar parcelas
    public function parcelas_update(Request $request, $id){
      $validador = $this->validate($request, [
        'municipio_id' => 'required',
        'paraje' => 'required|string|min:5|max:20',
        'superficie_HA' => 'required|numeric|min:0',
        'poligono' => 'required|string|min:5|max:30',
        'parcela_recinto' => 'required|numeric|min:0',
        'variedad' => 'required|string|min:5|max:30',
        'patron' => 'required|string|min:5|max:30',
        'proveedor_MV' => 'required|string|min:5|max:30',
        'fecha_plantio' => 'required|date',
        'marco_plantio' => 'required|string|min:5|max:30',
        'cultivo_anterior' => 'required|string|min:5|max:30',
        'sistema_formacion' => 'required|string|min:5|max:30',
        'cubierta_vegetal' => 'required'
      ]);

      $parcelas_data = request()->except((['_token', '_method']));
      Parcelas::where('id', '=', $id)->update($parcelas_data);
      return back()->with('parcelas_update', 'Parcela modificada');
    }
}
