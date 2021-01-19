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
      @if(session('abonados_update'))
        <div class="alert alert-success">
          {{ session('abonados_update') }}
        </div>
      @endif

      <img class="pictures_form" src="{{ asset('/pictures/Abono.png') }}"/>
      <div class="card">
        <form action="{{ route('abonados_update', $abonado->id)}}" method="POST">
          @csrf @method('PATCH')

          <div class="card-header text-center">MODIFICAR ABONADOS</div>
          <div class="card-body">
            <div class="row form-group">
              <label for="" class="col-4">N° de Parcela agricola</label>
              <select name="parcela_id">
              @foreach($parcelas as $parcela)
                <option value="{{ $parcela->id }}"
                    @if($parcela->id == $abonado->parcela_id)
                      selected
                    @endif>
                  {{ $parcela->id }}
                </option>
              @endforeach
              </select>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Fecha</label>
              <input type="date" name="fecha" value="{{ $abonado->fecha}}"
                class="form-control col-md-7"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Nombre comercial</label>
              <input type="text" name="nombre_comercial"
                value="{{ $abonado->nombre_comercial}}"
                  class="form-control col-md-7"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Composicion</label>
              <input type="number"name="composicion" placeholder="N%, P%, K%"
                value="{{ $abonado->composicion}}"
                class="form-control col-md-7"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Forma de aplicación</label>
              <input type="text" name="forma_aplicacion"
                value="{{ $abonado->forma_aplicacion}}"
                class="form-control col-md-7"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Gasto de abono</label>
              <input type="number" name="gasto_abono" placeholder="kg/parcela"
                value="{{ $abonado->gasto_abono}}" class="form-control col-md-7"/>
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
<a class="btn btn-light btn-xs mt-5" href="{{url('/abonados')}}">&laquo volver</a>
</div>
