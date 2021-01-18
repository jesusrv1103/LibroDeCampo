@extends('layouts.base')
@include('layouts.menu')

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-15">
      <h2 class="text-center mb-5">Administración de riegos de costes de producción</h2>
      <a class="btn btn-success mb-4" href="{{ url('/riegos_prod_form')}}"/>
        Agregar riego costes de producción
      </a>

      <!--Mensaje de eliminado-->
      @if(session('riegos_prod_delete'))
      <div class="alert alert-success">
        {{ session('riegos_prod_delete') }}
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
            <th>TOTAL RIEGOS (Horas o Unidaddes)</th>
            <th>TOTAL RIEGOS (Coste Unitario)</th>
            <th>TOTAL RIEGOS (Coste Toltal)</th>
            <th>Acciones</th>
          </tr>

          <tbody>
            @foreach($riegos_prod as $riego_prod)
            <tr>
              <td>{{ $riego_prod->parcela_id}}</td>
              <td>{{ $riego_prod->recursos_humanos_hrs}}</td>
              <td>{{ $riego_prod->recursos_humanos_coste_unit}}</td>
              <td>{{ $riego_prod->recursos_humanos_coste_total}}</td>
              <td>{{ $riego_prod->recursos_materiales_hrs}}</td>
              <td>{{ $riego_prod->resursos_materiales_coste_u}}</td>
              <td>{{ $riego_prod->resursos_materiales_coste_t}}</td>
              <td>{{ $riego_prod->total_riegos_hrs}}</td>
              <td>{{ $riego_prod->total_riegos_coste_unit}}</td>
              <td>{{ $riego_prod->total_riegos_coste_total}}</td>
              <td>
                <a href="{{ route('riegos_prod_form_update', $riego_prod->id)}}"
                  class="btn btn-primary mb-1">
                  <li class="fas fa-pencil-alt"></li>
                </a>

                <form action="{{ route('riegos_prod_delete', $riego_prod->id) }}"
                    method="POST" class="btn mb-1">
                  @csrf @method('DELETE')
                  <button type="submit"
                    onclick="return confirm('¿Desea eliminar el riegos?');"
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
      {{ $riegos_prod->links() }}

    </div>
  </div>
</div>
