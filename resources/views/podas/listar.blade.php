@extends('layouts.base')
@include('layouts.menu')

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-15">
      <h2 class="text-center mb-5">Administración de podas</h2>
      <a class="btn btn-success mb-4" href="{{ url('/podas_form')}}"/>
        Agregar podas
      </a>

      <!--Mensaje de eliminado-->
      @if(session('podas_delete'))
      <div class="alert alert-success">
        {{ session('podas_delete') }}
      </div>
      @endif

      <table class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th>N° de Parcela Agrícola</th>
            <th>Fecha</th>
            <th>Práctica realizada</th>
            <th>Acciones</th>
          </tr>

          <tbody>
            @foreach($podas as $poda)
            <tr>
              <td>{{ $poda->parcela_id}}</td>
              <td>{{ $poda->fecha}}</td>
              <td>{{ $poda->practica_realizada}}</td>
              <td>
                <a href="{{ route('podas_form_update',
                  $poda->id) }}" class="btn btn-primary mb-1">
                  <li class="fas fa-pencil-alt"></li>
                </a>

                <form action="{{ route('podas_delete', $poda->id) }}"
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
      {{ $podas->links() }}

    </div>
  </div>
</div>
