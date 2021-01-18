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
        @if(session('parcelas_save'))
          <div class="alert alert-success">
            {{ session('parcelas_save') }}
          </div>
        @endif

      <div class="card">
        <form action="{{ url('/parcelas_save')}}" method="POST">
          @csrf

          <div class="card-header text-center">AGREGAR PARCELA</div>
          <div class="card-body">
            <div class="row form-group">
              <label for="" class="col-4">Municipio</label>
                <select name="municipio_id">
                @foreach($municipios as $municipio)
                  <option value="{{ $municipio->id }}">
                    {{ $municipio->nombre }}
                  </option>
                @endforeach
                </select>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Paraje</label>
              <input type="text" name="paraje"
                class="form-control col-md-7"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Superficie</label>
              <input type="number" name="superficie_HA" placeholder="ha"
                class="form-control col-md-7"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Polígono</label>
              <input type="text" name="poligono"
                class="form-control col-md-7"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Parcela</label>
              <input type="number" name="parcela_recinto" placeholder="recintos"
                class="form-control col-md-7"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Variedad</label>
              <input type="text" name="variedad"
                class="form-control col-md-7"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Patrón</label>
              <input type="text" name="patron" class="form-control col-md-7"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-5">Proveedor Material Vegetal</label>
              <input type="text" name="proveedor_MV"
                class="form-control col-md-6"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Fecha Plantación</label>
              <input type="date" name="fecha_plantio"
                class="form-control col-md-7"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Marco Plantación</label>
              <input type="text" name="marco_plantio"
                class="form-control col-md-7"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Cultivo Anterior</label>
              <input type="text" name="cultivo_anterior"
                class="form-control col-md-7"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Sistema de Formación</label>
              <input type="text" name="sistema_formacion"
                class="form-control col-md-7"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Cubierta Vegetal</label>
              <input type="radio" name="cubierta_vegetal" value="1"
                class="col-md-2">
              <label for="si">Si</label><br>
              <input type="radio" name="cubierta_vegetal" value="0"
                class="col-md-2">
              <label for="no">No</label><br>
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
<a class="btn btn-light btn-xs mt-5" href="{{url('/parcelas')}}">&laquo volver</a>
</div>
