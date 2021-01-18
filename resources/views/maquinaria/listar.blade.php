@extends('layouts.base')
@include('layouts.menu')

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-15">
      <h2 class="text-center mb-5">Administración de maquinaria</h2>
      <a class="btn btn-success mb-4" href="{{ url('/maquinaria_form')}}"/>Agregar maquina</a>

      <!--Mensaje de eliminado-->
      @if(session('maquinaria_delete'))
      <div class="alert alert-success">
        {{ session('maquinaria_delete') }}
      </div>
      @endif

      <table class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th>Tipo de equipo</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Acciones</th>
          </tr>

          <tbody>
            @foreach($maquinaria as $maquina)
            <tr>
              <td>{{ $maquina->tipo_equipo}}</td>
              <td>{{ $maquina->marca}}</td>
              <td>{{ $maquina->modelo}}</td>
              <td>
                <a href="{{ route('maquinaria_form_update', $maquina->id) }}"
                  class="btn btn-primary mb-1">
                  <li class="fas fa-pencil-alt"></li>
                </a>

                <form action="{{ route('maquinaria_delete', $maquina->id) }}"
                    method="POST" class="btn mb-1">
                  @csrf @method('DELETE')
                  <button type="submit"
                    onclick="return confirm('¿Desea eliminar la maquina?');"
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
      {{ $maquinaria->links() }}

    </div>
  </div>
</div>
