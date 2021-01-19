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
    @if(session('labores_update'))
      <div class="alert alert-success">
        {{ session('labores_update') }}
      </div>
    @endif

      <img class="pictures_form" src="{{ asset('/pictures/Labores.png') }}"/>
      <div class="card">
        <form action="{{ route('labores_update', $labor->id)}}" method="POST">
          @csrf @method('PATCH')

          <div class="card-header text-center">MODIFICAR LABOR</div>
          <div class="card-body">
            <div class="row form-group">
              <label for="" class="col-4">N° de Parcela agricola</label>
              <select name="parcela_id">
              @foreach($parcelas as $parcela)
                <option value="{{ $parcela->id }}"
                    @if($parcela->id == $labor->parcela_id)
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
                value="{{ $labor->fecha}}"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Práctica realizada</label>
              <input type="text" name="practica_realizada"
                class="form-control col-md-7" value="{{ $labor->practica_realizada}}"/>
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
<a class="btn btn-light btn-xs mt-5" href="{{url('/labores')}}">&laquo volver</a>
</div>
