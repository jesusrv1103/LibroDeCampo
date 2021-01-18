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
      @if(session('riegos_update'))
        <div class="alert alert-success">
          {{ session('riegos_update') }}
        </div>
      @endif

      <div class="card">
        <form action="{{ route('riegos_update', $riego->id)}}" method="POST">
          @csrf @method('PATCH')

          <div class="card-header text-center">MODIFICAR RIEGO</div>
          <div class="card-body">
            <div class="row form-group">
              <label for="" class="col-4">N° de Parcela agricola</label>
              <select name="parcela_id">
              @foreach($parcelas as $parcela)
                <option value="{{ $parcela->id }}"
                    @if($parcela->id == $riego->parcela_id)
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
                value="{{ $riego->fecha }}"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Sistema de riego</label>
              <input type="text" name="sistema_riego" class="form-control col-md-7"
                value="{{ $riego->sistema_riego }}"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Gasto de agua</label>
              <input type="number"name="gasto_agua" placeholder="m³/parcela"
                class="form-control col-md-7" value="{{ $riego->gasto_agua }}"/>
            </div>

            <div class="row form-group">
              <button type="submit" class="btn btn-success col-md-9 offset-2">
                Guardar
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <a class="btn btn-light btn-xs mt-5" href="{{url('/riegos')}}">&laquo volver</a>
</div>
