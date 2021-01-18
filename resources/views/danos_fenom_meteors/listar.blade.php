@extends('layouts.base')
@include('layouts.menu')

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-15">
      <h2 class="text-center mb-5">
        Administración de daños por fenómenos meteorológicos
      </h2>
      <a class="btn btn-success mb-4" href="{{ url('/danos_fenom_meteors_form')}}"/>
        Agregar daños por fenómenos meteorológicos
      </a>

      <!--Mensaje de eliminado-->
      @if(session('danos_fenom_meteors_delete'))
      <div class="alert alert-success">
        {{ session('danos_fenom_meteors_delete') }}
      </div>
      @endif

      <table class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th>N° de Parcela Agrícola</th>
            <th>Fecha</th>
            <th>Daño %</th>
            <th>Medidas adoptivas</th>
            <th>Acciones</th>
          </tr>

          <tbody>
            @foreach($danos_fenom_meteors as $dano_fenom_meteor)
            <tr>
              <td>{{ $dano_fenom_meteor->parcela_id}}</td>
              <td>{{ $dano_fenom_meteor->fecha}}</td>
              <td>{{ $dano_fenom_meteor->dano}}</td>
              <td>{{ $dano_fenom_meteor->medidas_adoptivas}}</td>
              <td>
                <a href="{{ route('danos_fenom_meteors_form_update',
                  $dano_fenom_meteor->id) }}" class="btn btn-primary mb-1">
                  <li class="fas fa-pencil-alt"></li>
                </a>

                <form action="{{ route('danos_fenom_meteors_delete',
                  $dano_fenom_meteor->id) }}"
                  method="POST" class="btn mb-1">
                  @csrf @method('DELETE')

                  <button type="submit"
                    onclick="return confirm('¿Desea eliminar el daño por fenomeno meteorológico?');"
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
      {{ $danos_fenom_meteors->links() }}

    </div>
  </div>
</div>
