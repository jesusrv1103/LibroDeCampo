@extends('layouts.base')
@include('layouts.menu')

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-7 mt-3">

      <!-- Validación de errores -->
      @if($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
              <li> {{ $error }} </li>
            @endforeach
          </ul>
        </div>
      @endif

      <!-- Mensaje de guardado -->
      @if(session('seguimiento_plagas_update'))
        <div class="alert alert-success">
          {{ session('seguimiento_plagas_update') }}
        </div>
      @endif

      <img class="pictures_form" src="{{ asset('/pictures/SeguimientoPlagas.png') }}"/>
      <div class="card">
        <form action="{{ route('seguimiento_plagas_update', $seguimiento_plaga->id)}}"
            method="POST">
          @csrf @method('PATCH')

          <div class="card-header text-center">MODIFICAR SEGUINETO DE PLAGAS</div>
          <div class="card-body">
            <div class="row form-group">
              <label for="" class="col-4">N° de Parcela agricola</label>
              <select name="parcela_id">
              @foreach($parcelas as $parcela)
                <option value="{{ $parcela->id }}"
                    @if($parcela->id == $seguimiento_plaga->parcela_id)
                      selected
                    @endif>
                  {{ $parcela->id }}
                </option>
              @endforeach
              </select>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Fecha</label>
              <input type="date" name="fecha" class="form-control col-md-7"
                value="{{ $seguimiento_plaga->fecha}}"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">N° cepas observadas</label>
              <input type="number" name="no_cepas_observadas"
                class="form-control col-md-7"
                value="{{ $seguimiento_plaga->no_cepas_observadas}}"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">N° órganos por cepa</label>
              <input type="number" name="no_organismos_cepa"
              class="form-control col-md-7"
              value="{{ $seguimiento_plaga->no_organismos_cepa}}"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Parásito observado</label>
              <input type="text" name="parasito_observado"
              class="form-control col-md-7"
              value="{{ $seguimiento_plaga->parasito_observado}}"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Nivel de ataque</label>
              <input type="number" name="nivel_ataque"
                class="form-control col-md-7"
                value="{{ $seguimiento_plaga->nivel_ataque}}"/>
            </div>

            <div class="row form-group">
                <label for="" class="col-4">Tratamiento</label>
                @if(($seguimiento_plaga->tratamiento == 1))
                  <input type="radio" name="tratamiento" value="1" checked
                    class="col-md-2">
                  <label for="si">Si</label><br>
                  <input type="radio" name="tratamiento" value="0"
                    class="col-md-2">
                  <label for="no">No</label><br>
                @else
                <input type="radio" name="tratamiento" value="1"
                  class="col-md-2">
                <label for="si">Si</label><br>
                <input type="radio" name="tratamiento" value="0" checked
                  class="col-md-2">
                <label for="no">No</label><br>
                @endif
            </div>

            <div class="row form-group">
              <button type="submit" class="btn btn-success col-md-9 offset-2">
                Guardar
              </button>
            </div>
          </div>
        </form>
      </div>
      <br>
  </div>
</div>
<a class="btn btn-light btn-xs mt-5" href="{{url('/seguimiento_plagas')}}">&laquo volver</a>
</div>
