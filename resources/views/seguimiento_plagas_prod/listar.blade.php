@extends('layouts.base')
@include('layouts.menu')

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-15">
      <h2 class="text-center mb-5">Administración de seguimiento plagas costes de producción</h2>
      <a class="btn btn-success mb-4" href="{{ url('/seguimiento_plagas_prod_form')}}"/>
        Agregar seguimiento de plagas costes de producción
      </a>

      <!--Mensaje de eliminado-->
      @if(session('seguimiento_plagas_prod_delete'))
      <div class="alert alert-success">
        {{ session('seguimiento_plagas_prod_delete') }}
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
            <th>TOTAL SEGUIMIENTO DE PLAGAS (Horas o Unidaddes)</th>
            <th>TOTAL SEGUIMIENTO DE PLAGAS (Coste Unitario)</th>
            <th>TOTAL SEGUIMIENTO DE PLAGAS (Coste Toltal)</th>
            <th>Acciones</th>
          </tr>

          <tbody>
            @foreach($seguimiento_plagas_prod as $seguimiento_plaga_prod)
            <tr>
              <td>{{ $seguimiento_plaga_prod->parcela_id}}</td>
              <td>{{ $seguimiento_plaga_prod->recursos_humanos_hrs}}</td>
              <td>{{ $seguimiento_plaga_prod->recursos_humanos_coste_unit}}</td>
              <td>{{ $seguimiento_plaga_prod->recursos_humanos_coste_total}}</td>
              <td>{{ $seguimiento_plaga_prod->recursos_materiales_hrs}}</td>
              <td>{{ $seguimiento_plaga_prod->resursos_materiales_coste_u}}</td>
              <td>{{ $seguimiento_plaga_prod->resursos_materiales_coste_t}}</td>
              <td>{{ $seguimiento_plaga_prod->total_seguimiento_plagas_hrs}}</td>
              <td>{{ $seguimiento_plaga_prod->total_seguimiento_plagas_coste_unit}}</td>
              <td>{{ $seguimiento_plaga_prod->total_seguimiento_plagas_coste_total}}</td>
              <td>
                <a href="{{ route('seguimiento_plagas_prod_form_update', $seguimiento_plaga_prod->id)}}"
                  class="btn btn-primary mb-1">
                  <li class="fas fa-pencil-alt"></li>
                </a>

                <form action="{{ route('seguimiento_plagas_prod_delete', $seguimiento_plaga_prod->id) }}"
                    method="POST" class="btn mb-1">
                  @csrf @method('DELETE')
                  <button type="submit"
                    onclick="return confirm('¿Desea eliminar el control de plaga?');"
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
      {{ $seguimiento_plagas_prod->links() }}

    </div>
  </div>
</div>
