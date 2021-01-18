@extends('layouts.base')
@include('layouts.menu')

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-15">
      <h2 class="text-center mb-5">Administración de aclareo racimos</h2>
      <a class="btn btn-success mb-4" href="{{ url('/aclareo_racimos_form')}}"/>
        Agregar aclareo racimos
      </a>

      <!--Mensaje de eliminado-->
      @if(session('aclareo_racimos_delete'))
      <div class="alert alert-success">
        {{ session('aclareo_racimos_delete') }}
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
            @foreach($aclareo_racimos as $aclareo_racimo)
            <tr>
              <td>{{ $aclareo_racimo->parcela_id}}</td>
              <td>{{ $aclareo_racimo->fecha}}</td>
              <td>{{ $aclareo_racimo->practica_realizada}}</td>
              <td>
                <a href="{{ route('aclareo_racimos_form_update', $aclareo_racimo->id) }}"
                  class="btn btn-primary mb-1">
                  <li class="fas fa-pencil-alt"></li>
                </a>

                <form action="{{ route('aclareo_racimos_delete', $aclareo_racimo->id) }}"
                    method="POST" class="btn mb-1">
                  @csrf @method('DELETE')
                  <button type="submit"
                    onclick="return confirm('¿Desea eliminar aclareo de racimos?');"
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
      {{ $aclareo_racimos->links() }}

    </div>
  </div>
</div>
