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
      @if(session('recoleccion_update'))
        <div class="alert alert-success">
          {{ session('recoleccion_update') }}
        </div>
      @endif

      <div class="card">
        <form action="{{ route('recoleccion_update', $recoleccion->id)}}" method="POST">
          @csrf @method('PATCH')

          <div class="card-header text-center">MODIFICAR RECOLECCIÓN</div>
          <div class="card-body">
            <div class="row form-group">
              <label for="" class="col-4">N° de parcela agrícola</label>
              <select name="parcela_id">
              @foreach($parcelas as $parcela)
                <option value="{{ $parcela->id }}"
                    @if($parcela->id == $recoleccion->parcela_id)
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
              value="{{ $recoleccion->fecha}}"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Variedad recolectada</label>
              <input type="number" name="variedad_recolectada"
                class="form-control col-md-7"
                value="{{ $recoleccion->variedad_recolectada}}"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Rendimiento</label>
              <input type="number" name="rendimiento" placeholder="kg/parcela"
                class="form-control col-md-7"
                value="{{ $recoleccion->rendimiento}}"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Destino de la cosecha</label>
              <input type="text" name="destino_cosecha"
                class="form-control col-md-7"
                value="{{ $recoleccion->destino_cosecha}}"/>
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
<a class="btn btn-light btn-xs mt-5" href="{{url('/recoleccion')}}">&laquo volver</a>
</div>
