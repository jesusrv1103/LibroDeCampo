@extends('layouts.base')
@include('layouts.menu')

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-15">
      <h2 class="text-center mb-5">Administración de abonados</h2>
      <a class="btn btn-success mb-4" href="{{ url('/abonados_form')}}"/>
        Agregar abonados costes produccion
      </a>

      <!--Mensaje de eliminado-->
      @if(session('abonados_delete'))
      <div class="alert alert-success">
        {{ session('abonados_delete') }}
      </div>
      @endif

      <table class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th>N° de Parcela agrícola</th>
            <th>Fecha</th>
            <th>Nombre comercial</th>
            <th>Composicion (N%, P%, K%)</th>
            <th>Forma de aplicación</th>
            <th>Gasto de abono (kg/parcela)</th>
            <th>Acciones</th>
          </tr>

          <tbody>
            @foreach($abonados as $abonado)
            <tr>
              <td>{{ $abonado->parcela_id}}</td>
              <td>{{ $abonado->fecha}}</td>
              <td>{{ $abonado->nombre_comercial}}</td>
              <td>{{ $abonado->composicion}}</td>
              <td>{{ $abonado->forma_aplicacion}}</td>
              <td>{{ $abonado->gasto_abono}}</td>
              <td>
                <a href="{{ route('abonados_form_update', $abonado->id) }}"
                  class="btn btn-primary mb-1">
                  <li class="fas fa-pencil-alt"></li>
                </a>

                <form action="{{ route('abonados_delete', $abonado->id) }}"
                    method="POST" class="btn mb-1">
                  @csrf @method('DELETE')
                  <button type="submit"
                    onclick="return confirm('¿Desea eliminar abononados?');"
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
      {{ $abonados->links() }}

    </div>
  </div>
</div>
