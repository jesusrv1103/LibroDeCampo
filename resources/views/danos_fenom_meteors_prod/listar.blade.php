@extends('layouts.base')
@include('layouts.menu')

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-15">
      <h2 class="text-center mb-5">Administración de daños por fenómenos meteorologicos costes de producción</h2>
      <a class="btn btn-success mb-4" href="{{ url('/danos_fenom_meteors_prod_form')}}"/>
        Agregar daños por fenómenos meteorologicos costes de producción
      </a>

      <!--Mensaje de eliminado-->
      @if(session('danos_fenom_meteors_prod_delete'))
      <div class="alert alert-success">
        {{ session('danos_fenom_meteors_prod_delete') }}
      </div>
      @endif

      <table class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th>N° de Parcela Agrícola</th>
            <th>Recursos Humanos (Horas o Unidaddes)</th>
            <th>Recursos Humanos (Coste Unitario)</th>
            <th>Recursos Humanos (Coste Total)</th>
            <th>Recursos Materiales (Horas o Unidaddes)</th>
            <th>Recursos Materiales (Coste Unitario)</th>
            <th>Recursos Materiales (Coste Total)</th>
            <th>TOTAL DAÑOS POR FENÓMENOS METEOROLÓGICOS (Horas o Unidaddes)</th>
            <th>TOTAL DAÑOS POR FENÓMENOS METEOROLÓGICOS (Coste Unitario)</th>
            <th>TOTAL DAÑOS POR FENÓMENOS METEOROLÓGICOS (Coste Toltal)</th>
            <th>Acciones</th>
          </tr>

          <tbody>
            @foreach($danos_fenom_meteors_prod as $dano_fenom_meteor_prod)
            <tr>
              <td>{{ $dano_fenom_meteor_prod->parcela_id}}</td>
              <td>{{ $dano_fenom_meteor_prod->recursos_humanos_hrs}}</td>
              <td>{{ $dano_fenom_meteor_prod->recursos_humanos_coste_unit}}</td>
              <td>{{ $dano_fenom_meteor_prod->recursos_humanos_coste_total}}</td>
              <td>{{ $dano_fenom_meteor_prod->recursos_materiales_hrs}}</td>
              <td>{{ $dano_fenom_meteor_prod->resursos_materiales_coste_u}}</td>
              <td>{{ $dano_fenom_meteor_prod->resursos_materiales_coste_t}}</td>
              <td>{{ $dano_fenom_meteor_prod->total_danos_fenom_meteors_hrs}}</td>
              <td>{{ $dano_fenom_meteor_prod->total_danos_fenom_meteors_coste_unit}}</td>
              <td>{{ $dano_fenom_meteor_prod->total_danos_fenom_meteors_coste_total}}</td>
              <td>
                <a href="{{ route('danos_fenom_meteors_prod_form_update', $dano_fenom_meteor_prod->id)}}"
                  class="btn btn-primary mb-1">
                  <li class="fas fa-pencil-alt"></li>
                </a>

                <form action="{{ route('danos_fenom_meteors_prod_delete', $dano_fenom_meteor_prod->id) }}"
                    method="POST" class="btn mb-1">
                  @csrf @method('DELETE')
                  <button type="submit"
                    onclick="return confirm('¿Desea eliminar el daño por fenómenos meteorologicos?');"
                    class="btn btn-danger">
                    <li class="fas fa-trash-alt"></li>
                  </button>
                </form>

              </td>
            </tr>
            @endforeach
          </tbody>
        </thead>
      </table>
      {{ $danos_fenom_meteors_prod->links() }}

    </div>
  </div>
</div>
