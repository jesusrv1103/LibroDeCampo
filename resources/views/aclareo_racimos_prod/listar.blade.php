@extends('layouts.base')
@include('layouts.menu')

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-15">
      <h2 class="text-center mb-5">Administración de aclareos racimos de costes de producción</h2>
      <a class="btn btn-success mb-4" href="{{ url('/aclareo_racimos_prod_form')}}"/>
        Agregar aclareos racimos costes de producción
      </a>

      <!--Mensaje de eliminado-->
      @if(session('aclareo_racimos_prod_delete'))
      <div class="alert alert-success">
        {{ session('aclareo_racimos_prod_delete') }}
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
            <th>TOTAL ACLAREO RACIMOS (Horas o Unidaddes)</th>
            <th>TOTAL ACLAREO RACIMOS (Coste Unitario)</th>
            <th>TOTAL ACLAREO RACIMOS (Coste Toltal)</th>
            <th>Acciones</th>
          </tr>

          <tbody>
            @foreach($aclareo_racimos_prod as $aclareo_racimo_prod)
            <tr>
              <td>{{ $aclareo_racimo_prod->parcela_id}}</td>
              <td>{{ $aclareo_racimo_prod->recursos_humanos_hrs}}</td>
              <td>{{ $aclareo_racimo_prod->recursos_humanos_coste_unit}}</td>
              <td>{{ $aclareo_racimo_prod->recursos_humanos_coste_total}}</td>
              <td>{{ $aclareo_racimo_prod->recursos_materiales_hrs}}</td>
              <td>{{ $aclareo_racimo_prod->resursos_materiales_coste_u}}</td>
              <td>{{ $aclareo_racimo_prod->resursos_materiales_coste_t}}</td>
              <td>{{ $aclareo_racimo_prod->total_aclareos_hrs}}</td>
              <td>{{ $aclareo_racimo_prod->total_aclareos_coste_unit}}</td>
              <td>{{ $aclareo_racimo_prod->total_aclareos_coste_total}}</td>
              <td>
                <a href="{{ route('aclareo_racimos_prod_form_update', $aclareo_racimo_prod->id)}}"
                  class="btn btn-primary mb-1">
                  <li class="fas fa-pencil-alt"></li>
                </a>

                <form action="{{ route('aclareo_racimos_prod_delete', $aclareo_racimo_prod->id) }}"
                    method="POST" class="btn mb-1">
                  @csrf @method('DELETE')
                  <button type="submit"
                    onclick="return confirm('¿Desea eliminar la aclareo racimo?');"
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
      {{ $aclareo_racimos_prod->links() }}

    </div>
  </div>
</div>
