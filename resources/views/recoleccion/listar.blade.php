@extends('layouts.base')
@include('layouts.menu')

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-15">
      <h2 class="text-center mb-5">Administración de recolecciones</h2>
      <a class="btn btn-success mb-4" href="{{ url('/recoleccion_form')}}"/>
        Agregar recolección
      </a>

      <!--Mensaje de eliminado-->
      @if(session('recoleccion_delete'))
      <div class="alert alert-success">
        {{ session('recoleccion_delete') }}
      </div>
      @endif

      <table class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th>N° de parcela agrícola</th>
            <th>Fecha</th>
            <th>Variedad recolectada</th>
            <th>Rendimiento recolectada</th>
            <th>Destino de cosecha</th>
            <th>Acciones</th>
          </tr>

          <tbody>
            @foreach($recolecciones as $recoleccion)
            <tr>
              <td>{{ $recoleccion->parcela_id}}</td>
              <td>{{ $recoleccion->fecha}}</td>
              <td>{{ $recoleccion->variedad_recolectada}}</td>
              <td>{{ $recoleccion->rendimiento}}</td>
              <td>{{ $recoleccion->destino_cosecha}}</td>
              <td>
                <a href="{{ route('recoleccion_form_update', $recoleccion->id)}}"
                  class="btn btn-primary mb-1">
                  <li class="fas fa-pencil-alt"></li>
                </a>

                <form action="{{ route('recoleccion_delete',
                  $recoleccion->id) }}" method="POST" class="btn mb-1">
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
      {{ $recolecciones->links() }}

    </div>
  </div>
</div>
