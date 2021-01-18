@extends('layouts.base')
@include('layouts.menu')

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-15">
      <h2 class="text-center mb-5">Administración de podas de costes de producción</h2>
      <a class="btn btn-success mb-4" href="{{ url('/podas_prod_form')}}"/>
        Agregar poda de costes de producción
      </a>

      <!--Mensaje de eliminado-->
      @if(session('podas_prod_delete'))
      <div class="alert alert-success">
        {{ session('podas_prod_delete') }}
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
            <th>TOTAL PODAS (Horas o Unidaddes)</th>
            <th>TOTAL PODAS (Coste Unitario)</th>
            <th>TOTAL PODAS (Coste Toltal)</th>
            <th>Acciones</th>
          </tr>

          <tbody>
            @foreach($podas_prod as $poda_prod)
            <tr>
              <td>{{ $poda_prod->parcela_id}}</td>
              <td>{{ $poda_prod->recursos_humanos_hrs}}</td>
              <td>{{ $poda_prod->recursos_humanos_coste_unit}}</td>
              <td>{{ $poda_prod->recursos_humanos_coste_total}}</td>
              <td>{{ $poda_prod->recursos_materiales_hrs}}</td>
              <td>{{ $poda_prod->resursos_materiales_coste_u}}</td>
              <td>{{ $poda_prod->resursos_materiales_coste_t}}</td>
              <td>{{ $poda_prod->total_podas_hrs}}</td>
              <td>{{ $poda_prod->total_podas_coste_unit}}</td>
              <td>{{ $poda_prod->total_podas_coste_total}}</td>
              <td>
                <a href="{{ route('podas_prod_form_update', $poda_prod->id)}}"
                  class="btn btn-primary mb-1">
                  <li class="fas fa-pencil-alt"></li>
                </a>

                <form action="{{ route('podas_prod_delete', $poda_prod->id) }}"
                    method="POST" class="btn mb-1">
                  @csrf @method('DELETE')
                  <button type="submit"
                    onclick="return confirm('¿Desea eliminar la poda?');"
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
      {{ $podas_prod->links() }}

    </div>
  </div>
</div>
