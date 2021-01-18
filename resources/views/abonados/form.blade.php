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
      @if(session('abonados_save'))
        <div class="alert alert-success">
          {{ session('abonados_save') }}
        </div>
      @endif

      <div class="card">
        <form action="{{ url('/abonados_save')}}" method="POST">
          @csrf

          <div class="card-header text-center">AGREGAR ABONADOS</div>
          <div class="card-body">
            <div class="row form-group">
              <label for="" class="col-4">N° de Parcela agricola</label>
              <select name="parcela_id">
              @foreach($parcelas as $parcela)
                <option value="{{ $parcela->id }}">
                  {{ $parcela->id }}
                </option>
              @endforeach
              </select>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Fecha</label>
              <input type="date" name="fecha" class="form-control col-md-7"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Nombre comercial</label>
              <input type="text" name="nombre_comercial"
                class="form-control col-md-7"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Composicion</label>
              <input type="number"name="composicion" placeholder="N%, P%, K%"
                class="form-control col-md-7"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Forma de aplicación</label>
              <input type="text" name="forma_aplicacion"
                class="form-control col-md-7"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Gasto de abono (kg/parcela)</label>
              <input type="number" name="gasto_abono" placeholder="kg/parcela"
                class="form-control col-md-7"/>
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
