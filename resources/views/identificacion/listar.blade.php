@extends('layouts.base')
@include('layouts.menu')

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-7 mt-3">
        <div class="identificacion card">
              <img id="maceta" src="{{ asset('/pictures/Maceta.png') }}"/>
              <label for=""class="mt-3 col-8">Campaña:
                <label class="datos_indetificacion">
                  {{ $identificacion->campana }}
                </label>
              </label>

            <fieldset>
              <center>
                <legend>DATOS DE IDENTIFICACIÓN</legend>
              </center>
                <label for=""class="col-8">
                  Titular de la explotación:
                    <label class="datos_indetificacion">
                      {{ $identificacion->titular_explotacion }}
                    </label>
                </label>
                <label for=""class="col-8">
                  Direccion:
                    <label class="datos_indetificacion">
                      {{ $identificacion->direccion }}
                    </label>
                </label>
                <label for=""class="col-8">
                  Municipio:
                  <label class="datos_indetificacion">
                    @foreach($municipios as $municipio)
                      @if($municipio->id == $identificacion->municipio_id)
                        {{ $municipio->nombre }}
                      @endif
                    @endforeach
                  </label>
                </label>
                <label for=""class="col-9">
                  Tecnico responsable de la explotación:
                  <label class="datos_indetificacion">
                    {{ $identificacion->tecnico_resp_exp }}
                  </label>
                </label>
            </fieldset>

              <label for=""class="col-8">
                Fax:
                <label class="datos_indetificacion">
                  {{ $identificacion->fax }}
                </label>
              </label>

              <label for=""class="col-8">
                Codigo Postal:
                <label class="datos_indetificacion">
                  {{ $identificacion->codigo_postal }}
                </label>
              </label>

              <label for=""class="col-8">
                Firma:
                <label class="datos_indetificacion">
                  {{ $identificacion->firma_digital }}
                </label>
              </label>
        </div>
      </div>
    </div>
  </div>
</html>
