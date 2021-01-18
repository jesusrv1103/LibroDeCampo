@extends('layouts.base')
@include('layouts.menu')

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-15">
      <h2 class="text-center mb-5">Administración de control de plagas</h2>
      <a class="btn btn-success mb-4" href="{{ url('/control_plagas_form')}}"/>
        Agregar un control de plagas
      </a>

      <!--Mensaje de eliminado-->
      @if(session('control_plagas_delete'))
      <div class="alert alert-success">
        {{ session('control_plagas_delete') }}
      </div>
      @endif

      <table class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th>N° de Parcela agrícola</th>
            <th>Fecha</th>
            <th>Nombre comercial</th>
            <th>Materia activa (%)</th>
            <th>Forma aplicación</th>
            <th>Gasto de producto (gr,kg,1/parcela)</th>
            <th>Mala hierba/Parásitos a Controlar</th>
            <th>No° de orden del tratamiento</th>
            <th>Acciones</th>
          </tr>

          <tbody>
            @foreach($control_plagas as $control_plaga)
            <tr>
              <td>{{ $control_plaga->parcela_id}}</td>
              <td>{{ $control_plaga->fecha}}</td>
              <td>{{ $control_plaga->nombre_comercial}}</td>
              <td>{{ $control_plaga->materia_activa}}</td>
              <td>{{ $control_plaga->forma_aplicacion}}</td>
              <td>{{ $control_plaga->gasto_producto}}</td>
              <td>{{ $control_plaga->control_HP}}</td>
              <td>{{ $control_plaga->no_tratamiento}}</td>
              <td>
                <a href="{{ route('control_plagas_form_update',
                  $control_plaga->id) }}" class="btn btn-primary mb-1">
                  <li class="fas fa-pencil-alt"></li>
                </a>

                <form action="{{ route('control_plagas_delete',
                  $control_plaga->id) }}"
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
      {{ $control_plagas->links() }}

    </div>
  </div>
</div>
