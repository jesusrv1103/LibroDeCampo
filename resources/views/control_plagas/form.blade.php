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
      @if(session('control_plagas_save'))
        <div class="alert alert-success">
          {{ session('control_plagas_save') }}
        </div>
      @endif

      <img class="pictures_form" src="{{ asset('/pictures/ControlPlagas.png') }}"/>
      <div class="card">
        <form action="{{ url('/control_plagas_save')}}" method="POST">
          @csrf

          <div class="card-header text-center">AGREGAR UN CONTROL DE PLAGAS</div>
          <div class="card-body">
            <div class="row form-group">
              <label for="" class="col-4">N° de parcela agrícola</label>
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
              <label for="" class="col-4">Materia activa</label>
              <input type="number" name="materia_activa" placeholder="%"
                class="form-control col-md-7"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Forma de aplicación</label>
              <input type="text" name="forma_aplicacion"
                class="form-control col-md-7"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Gasto de producto</label>
              <input type="number" name="gasto_producto"
                placeholder="gr, kg, 1/parcela"
                class="form-control col-md-7"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Mala hierba/Parasitos a controlar</label>
              <input type="text" name="control_HP" class="form-control col-md-7"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">N° de orden del tratamiento</label>
              <input type="number" name="no_tratamiento"
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
<a class="btn btn-light btn-xs mt-5" href="{{url('/control_plagas')}}">&laquo volver</a>
</div>
