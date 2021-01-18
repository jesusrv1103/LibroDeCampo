@extends('layouts.base')
@include('layouts.menu')

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-15">
      <h2 class="text-center mb-5">Administración de abonados costes de producción</h2>
      <a class="btn btn-success mb-4" href="{{ url('/abonados_prod_form')}}"/>
        Agregar abonados costes de producción
      </a>

      <!--Mensaje de eliminado-->
      @if(session('abonados_prod_delete'))
      <div class="alert alert-success">
        {{ session('abonados_prod_delete') }}
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
            <th>TOTAL ABONADOS (Horas o Unidaddes)</th>
            <th>TOTAL ABONADOS (Coste Unitario)</th>
            <th>TOTAL ABONADOS (Coste Toltal)</th>
            <th>Acciones</th>
          </tr>

          <tbody>
            @foreach($abonados_prod as $abonado_prod)
            <tr>
              <td>{{ $abonado_prod->parcela_id}}</td>
              <td>{{ $abonado_prod->recursos_humanos_hrs}}</td>
              <td>{{ $abonado_prod->recursos_humanos_coste_unit}}</td>
              <td>{{ $abonado_prod->recursos_humanos_coste_total}}</td>
              <td>{{ $abonado_prod->recursos_materiales_hrs}}</td>
              <td>{{ $abonado_prod->resursos_materiales_coste_u}}</td>
              <td>{{ $abonado_prod->resursos_materiales_coste_t}}</td>
              <td>{{ $abonado_prod->total_abonados_hrs}}</td>
              <td>{{ $abonado_prod->total_abonados_coste_unit}}</td>
              <td>{{ $abonado_prod->total_abonados_coste_total}}</td>
              <td>
                <a href="{{ route('abonados_prod_form_update', $abonado_prod->id)}}"
                  class="btn btn-primary mb-1">
                  <li class="fas fa-pencil-alt"></li>
                </a>

                <form action="{{ route('abonados_prod_delete', $abonado_prod->id) }}"
                    method="POST" class="btn mb-1">
                  @csrf @method('DELETE')
                  <button type="submit"
                    onclick="return confirm('¿Desea eliminar el abonado?');"
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
      {{ $abonados_prod->links() }}

    </div>
  </div>
</div>
