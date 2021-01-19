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
        @if(session('identificacion_update'))
          <div class="alert alert-success">
            {{ session('identificacion_update') }}
          </div>
        @endif

      <div class="card">
        <form action="{{ route('identificacion_update',
          $identificacion->id)}}" method="POST">
          @csrf @method('PATCH')

          <div class="card-header text-center">MODIFICAR DATOS DE IDENTIFICACIÓN</div>
          <div class="card-body">
            <div class="row form-group">
              <label for="" class="col-4">Campaña</label>
              <input type="text" name="campana" class="form-control col-md-7"
                value="{{ $identificacion->campana}}"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Titular de la explotación</label>
              <input type="text" name="titular_explotacion" class="form-control col-md-7"
                value="{{ $identificacion->titular_explotacion}}"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Dirección</label>
              <input type="text" name="direccion"
                class="form-control col-md-7"
                value="{{ $identificacion->direccion}}"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Teléfono</label>
              <input type="tel" name="telefono" class="form-control col-md-7"
                value="{{ $identificacion->telefono}}"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Municipio</label>
              <select name="municipio_id">
              @foreach($municipios as $municipio)
                <option value="{{ $municipio->id }}"
                  @if($municipio->id == $identificacion->municipio_id)
                    selected
                  @endif>
                  {{ $municipio->nombre }}
                </option>
              @endforeach
              </select>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Fax</label>
              <input type="text" name="fax" class="form-control col-md-7"
                value="{{ $identificacion->fax}}"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Codigo Postal</label>
              <input type="number" name="codigo_postal" class="form-control col-md-7"
                value="{{ $identificacion->codigo_postal}}"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-5">Técnico responsable de la explotación</label>
              <input type="text" name="tecnico_resp_exp"
                class="form-control col-md-6"
                value="{{ $identificacion->tecnico_resp_exp}}"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Firma</label>
              <input type="text" name="firma_digital"
                class="form-control col-md-7"
              value="{{ $identificacion->firma_digital}}"/>
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
<a class="btn btn-light btn-xs mt-5" href="{{url('/')}}">&laquo volver</a>
</div>
