@extends('layouts.base')
@include('layouts.menu')

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-15">
      <h2 class="text-center mb-5">Administración de riegos</h2>
      <a class="btn btn-success mb-4" href="{{ url('/riegos_form')}}"/>Agregar riego</a>

      <!--Mensaje de eliminado-->
      @if(session('riegos_delete'))
      <div class="alert alert-success">
        {{ session('riegos_delete') }}
      </div>
      @endif

      <table class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th>N° de Parcela Agrícola</th>
            <th>Fecha</th>
            <th>Sistema de riego</th>
            <th>Gasto de agua (m³/parcela)</th>
            <th>Acciones</th>
          </tr>

          <tbody>
            @foreach($riegos as $riego)
            <tr>
              <td>{{ $riego->parcela_id}}</td>
              <td>{{ $riego->fecha}}</td>
              <td>{{ $riego->sistema_riego}}</td>
              <td>{{ $riego->gasto_agua}}</td>
              <td>
                <a href="{{ route('riegos_form_update', $riego->id)}}"
                  class="btn btn-primary mb-1">
                  <li class="fas fa-pencil-alt"></li>
                </a>

                <form action="{{ route('riegos_delete', $riego->id) }}"
                    method="POST" class="btn mb-1">
                  @csrf @method('DELETE')
                  <button type="submit"
                    onclick="return confirm('¿Desea eliminar el riego?');"
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
      {{ $riegos->links() }}

    </div>
  </div>
</div>
