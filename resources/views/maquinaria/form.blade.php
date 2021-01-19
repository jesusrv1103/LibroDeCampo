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
        @if(session('maquinaria_save'))
          <div class="alert alert-success">
            {{ session('maquinaria_save') }}
          </div>
        @endif

      <img class="pictures_form" src="{{ asset('/pictures/Maquina.png') }}"/>
      <div class="card">
        <form action="{{ url('/maquinaria_save')}}" method="POST">
          @csrf

          <div class="card-header text-center">AGREGAR MAQUINA</div>
          <div class="card-body">
            <div class="row form-group">
              <label for="" class="col-4">Tipo de equipo</label>
              <input type="text" name="tipo_equipo" class="form-control col-md-7"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Marca</label>
              <input type="text" name="marca" class="form-control col-md-7"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Modelo</label>
              <input type="text" name="modelo"
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
<a class="btn btn-light btn-xs mt-5" href="{{url('/maquinaria')}}">&laquo volver</a>
</div>
