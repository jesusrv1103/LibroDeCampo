@extends('layouts.base')
@include('layouts.menu')

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-15">
      <h2 class="text-center mb-5">Administración de recolección de costes de producción</h2>
      <a class="btn btn-success mb-4" href="{{ url('/recoleccion_prod_form')}}"/>
        Agregar recolección de costes de producción
      </a>

      <!--Mensaje de eliminado-->
      @if(session('recoleccion_prod_delete'))
      <div class="alert alert-success">
        {{ session('recoleccion_prod_delete') }}
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
            <th>TOTAL RECOLECCIÓN (Horas o Unidaddes)</th>
            <th>TOTAL RECOLECCIÓN (Coste Unitario)</th>
            <th>TOTAL RECOLECCIÓN (Coste Toltal)</th>
            <th>Acciones</th>
          </tr>

          <tbody>
            @foreach($recoleccion_prod as $rec_prod)
            <tr>
              <td>{{ $rec_prod->parcela_id}}</td>
              <td>{{ $rec_prod->recursos_humanos_hrs}}</td>
              <td>{{ $rec_prod->recursos_humanos_coste_unit}}</td>
              <td>{{ $rec_prod->recursos_humanos_coste_total}}</td>
              <td>{{ $rec_prod->recursos_materiales_hrs}}</td>
              <td>{{ $rec_prod->resursos_materiales_coste_u}}</td>
              <td>{{ $rec_prod->resursos_materiales_coste_t}}</td>
              <td>{{ $rec_prod->total_recoleccion_hrs}}</td>
              <td>{{ $rec_prod->total_recoleccion_coste_unit}}</td>
              <td>{{ $rec_prod->total_recoleccion_coste_total}}</td>
              <td>
                <a href="{{ route('recoleccion_prod_form_update', $rec_prod->id)}}"
                  class="btn btn-primary mb-1">
                  <li class="fas fa-pencil-alt"></li>
                </a>

                <form action="{{ route('recoleccion_prod_delete', $rec_prod->id) }}"
                    method="POST" class="btn mb-1">
                  @csrf @method('DELETE')
                  <button type="submit"
                    onclick="return confirm('¿Desea eliminar la recolección?');"
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
      {{ $recoleccion_prod->links() }}

    </div>
  </div>
</div>
