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
      @if(session('danos_fenom_meteors_update'))
        <div class="alert alert-success">
          {{ session('danos_fenom_meteors_update') }}
        </div>
      @endif

      <div class="card">
        <form action="{{ route('danos_fenom_meteors_update',
          $dano_fenom_meteor->id)}}"
          method="POST">
          @csrf @method('PATCH')

          <div class="card-header text-center">
            MODIFICAR DAÑOS POR FENÓMENOS METEOROLÓGICOS
          </div>
          <div class="card-body">
            <div class="row form-group">
              <label for="" class="col-4">N° de Parcela agricola</label>
              <select name="parcela_id">
              @foreach($parcelas as $parcela)
                <option value="{{ $parcela->id }}"
                    @if($parcela->id == $dano_fenom_meteor->parcela_id)
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
                value="{{ $dano_fenom_meteor->fecha}}"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Daño %</label>
              <input type="number" name="dano" class="form-control col-md-7"
                value="{{ $dano_fenom_meteor->dano}}"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Medidas adoptivas</label>
              <input type="text" name="medidas_adoptivas"
                class="form-control col-md-7"
                value="{{ $dano_fenom_meteor->medidas_adoptivas}}"/>
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
<a class="btn btn-light btn-xs mt-5" href="{{url('/danos_fenom_meteors')}}">&laquo volver</a>
</div>
