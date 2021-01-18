@extends('layouts.base')
@include('layouts.menu')

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-15">
      <h2 class="text-center mb-5">Administración de seguimiento de plagas</h2>
      <a class="btn btn-success mb-4" href="{{ url('/seguimiento_plagas_form')}}"/>
        Agregar seguimiento de plagas
      </a>

      <!--Mensaje de eliminado-->
      @if(session('seguimiento_plagas_delete'))
      <div class="alert alert-success">
        {{ session('seguimiento_plagas_delete') }}
      </div>
      @endif

      <table class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th>N° de Parcela Agrícola</th>
            <th>Fecha</th>
            <th>N° cepas observadas</th>
            <th>N° órganos por cepa</th>
            <th>Parásito observado</th>
            <th>Nivel de ataque</th>
            <th>Tratamiento</th>
            <th>Acciones</th>
          </tr>

          <tbody>
            @foreach($seguimiento_plagas as $seguimiento_plaga)
            <tr>
              <td>{{ $seguimiento_plaga->parcela_id}}</td>
              <td>{{ $seguimiento_plaga->fecha}}</td>
              <td>{{ $seguimiento_plaga->no_cepas_observadas}}</td>
              <td>{{ $seguimiento_plaga->no_organismos_cepa}}</td>
              <td>{{ $seguimiento_plaga->parasito_observado}}</td>
              <td>{{ $seguimiento_plaga->nivel_ataque}}</td>
              <td>
                @if(($seguimiento_plaga->tratamiento == 1))
                  <label for="si">Si</label><br>
                @else
                  <label for="no">No</label><br>
                @endif
              </td>
              <td>
                <a href="{{ route('seguimiento_plagas_form_update',
                  $seguimiento_plaga->id) }}" class="btn btn-primary mb-1">
                  <li class="fas fa-pencil-alt"></li>
                </a>

                <form action="{{ route('seguimiento_plagas_delete',
                  $seguimiento_plaga->id) }}" method="POST" class="btn mb-1">
                  @csrf @method('DELETE')

                  <button type="submit"
                    onclick="return confirm('¿Desea eliminar el seguimiento de plagas?');"
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
      {{ $seguimiento_plagas->links() }}

    </div>
  </div>
</div>
