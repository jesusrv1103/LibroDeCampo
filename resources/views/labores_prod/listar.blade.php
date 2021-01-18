@extends('layouts.base')
@include('layouts.menu')

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-15">
      <h2 class="text-center mb-5">Administración de labores costes de producción</h2>
      <a class="btn btn-success mb-4" href="{{ url('/labores_prod_form')}}"/>
        Agregar labores costes de producción
      </a>

      <!--Mensaje de eliminado-->
      @if(session('labores_prod_delete'))
      <div class="alert alert-success">
        {{ session('labores_prod_delete') }}
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
            <th>TOTAL LABORES (Horas o Unidaddes)</th>
            <th>TOTAL LABORES (Coste Unitario)</th>
            <th>TOTAL LABORES (Coste Toltal)</th>
            <th>Acciones</th>
          </tr>

          <tbody>
            @foreach($labores_prod as $labor_prod)
            <tr>
              <td>{{ $labor_prod->parcela_id}}</td>
              <td>{{ $labor_prod->recursos_humanos_hrs}}</td>
              <td>{{ $labor_prod->recursos_humanos_coste_unit}}</td>
              <td>{{ $labor_prod->recursos_humanos_coste_total}}</td>
              <td>{{ $labor_prod->recursos_materiales_hrs}}</td>
              <td>{{ $labor_prod->resursos_materiales_coste_u}}</td>
              <td>{{ $labor_prod->resursos_materiales_coste_t}}</td>
              <td>{{ $labor_prod->total_labores_hrs}}</td>
              <td>{{ $labor_prod->total_labores_coste_unit}}</td>
              <td>{{ $labor_prod->total_labores_coste_total}}</td>
              <td>
                <a href="{{ route('labores_prod_form_update', $labor_prod->id)}}"
                  class="btn btn-primary mb-1">
                  <li class="fas fa-pencil-alt"></li>
                </a>

                <form action="{{ route('labores_prod_delete', $labor_prod->id) }}"
                    method="POST" class="btn mb-1">
                  @csrf @method('DELETE')
                  <button type="submit"
                    onclick="return confirm('¿Desea eliminar la labor?');"
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
      {{ $labores_prod->links() }}

    </div>
  </div>
</div>
