@extends('layouts.base')
@include('layouts.menu')

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-15">
      <h2 class="text-center mb-5">Administración de captura de trampas</h2>
      <a class="btn btn-success mb-4" href="{{ url('/captura_trampas_form')}}"/>Agregar captura de trampas</a>

      <!--Mensaje de eliminado-->
      @if(session('captura_trampas_delete'))
      <div class="alert alert-success">
        {{ session('captura_trampas_delete') }}
      </div>
      @endif

      <table class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th>N° de Parcela Agrícola</th>
            <th>Fecha</th>
            <th>Polilla del racimo</th>
            <th>Fecha</th>
            <th>Polilla del racimo</th>
            <th>Acciones</th>
          </tr>

          <tbody>
            @foreach($captura_trampas as $captura_trampa)
            <tr>
              <td>{{ $captura_trampa->parcela_id}}</td>
              <td>{{ $captura_trampa->fecha_1}}</td>
              <td>{{ $captura_trampa->polilla_racimo_1}}</td>
              <td>{{ $captura_trampa->fecha_2}}</td>
              <td>{{ $captura_trampa->polilla_racimo_2}}</td>
              <td>
                <a href="{{ route('captura_trampas_form_update', $captura_trampa->id) }}"
                  class="btn btn-primary mb-1">
                  <li class="fas fa-pencil-alt"></li>
                </a>

                <form action="{{ route('captura_trampas_delete', $captura_trampa->id) }}"
                    method="POST" class="btn mb-1">
                    @csrf @method('DELETE')
                  <button type="submit"
                    onclick="return confirm('¿Desea eliminar captura trampas?');"
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
      {{ $captura_trampas->links() }}

    </div>
  </div>
</div>
