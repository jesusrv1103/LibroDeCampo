@extends('layouts.base')
@include('layouts.menu')

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-15">
      <h2 class="text-center mb-5">Administración de captura en trampas costes de producción</h2>
      <a class="btn btn-success mb-4" href="{{ url('/captura_trampas_prod_form')}}"/>
        Agregar captura en trampas costes de producción
      </a>

      <!--Mensaje de eliminado-->
      @if(session('captura_trampas_prod_delete'))
      <div class="alert alert-success">
        {{ session('captura_trampas_prod_delete') }}
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
            <th>TOTAL CAPTURA EN TRAMPAS (Horas o Unidaddes)</th>
            <th>TOTAL CAPTURA EN TRAMPAS (Coste Unitario)</th>
            <th>TOTAL CAPTURA EN TRAMPAS (Coste Toltal)</th>
            <th>Acciones</th>
          </tr>

          <tbody>
            @foreach($captura_trampas_prod as $captura_trampa_prod)
            <tr>
              <td>{{ $captura_trampa_prod->parcela_id}}</td>
              <td>{{ $captura_trampa_prod->recursos_humanos_hrs}}</td>
              <td>{{ $captura_trampa_prod->recursos_humanos_coste_unit}}</td>
              <td>{{ $captura_trampa_prod->recursos_humanos_coste_total}}</td>
              <td>{{ $captura_trampa_prod->recursos_materiales_hrs}}</td>
              <td>{{ $captura_trampa_prod->resursos_materiales_coste_u}}</td>
              <td>{{ $captura_trampa_prod->resursos_materiales_coste_t}}</td>
              <td>{{ $captura_trampa_prod->total_captura_trampas_hrs}}</td>
              <td>{{ $captura_trampa_prod->total_captura_trampas_coste_unit}}</td>
              <td>{{ $captura_trampa_prod->total_captura_trampas_coste_total}}</td>
              <td>
                <a href="{{ route('captura_trampas_prod_form_update', $captura_trampa_prod->id)}}"
                  class="btn btn-primary mb-1">
                  <li class="fas fa-pencil-alt"></li>
                </a>

                <form action="{{ route('captura_trampas_prod_delete', $captura_trampa_prod->id) }}"
                    method="POST" class="btn mb-1">
                  @csrf @method('DELETE')
                  <button type="submit"
                    onclick="return confirm('¿Desea eliminar el captura en trampa?');"
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
      {{ $captura_trampas_prod->links() }}

    </div>
  </div>
</div>
