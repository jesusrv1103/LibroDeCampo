@extends('layouts.base')
@include('layouts.menu')

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-15">
      <h2 class="text-center mb-5">Administración de labores</h2>
      <a class="btn btn-success mb-4" href="{{ url('/labores_form')}}"/>
        Agregar labores
      </a>

      <!--Mensaje de eliminado-->
      @if(session('labores_delete'))
      <div class="alert alert-success">
        {{ session('labores_delete') }}
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
            @foreach($labores as $labor)
            <tr>
              <td>{{ $labor->parcela_id}}</td>
              <td>{{ $labor->fecha}}</td>
              <td>{{ $labor->practica_realizada}}</td>
              <td>
                <a href="{{ route('labores_form_update',
                  $labor->id) }}" class="btn btn-primary mb-1">
                  <li class="fas fa-pencil-alt"></li>
                </a>

                <form action="{{ route('labores_delete', $labor->id) }}"
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
      {{ $labores->links() }}

    </div>
  </div>
</div>
