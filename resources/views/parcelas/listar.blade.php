@extends('layouts.base')
@include('layouts.menu')

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-15">
      <h2 class="text-center mb-5">Administración de parcelas</h2>
      <a class="btn btn-success mb-4" href="{{ url('/parcelas_form')}}"/>Agregar parcela</a>

      <!--Mensaje de eliminado-->
      @if(session('parcelas_delete'))
      <div class="alert alert-success">
        {{ session('parcelas_delete') }}
      </div>
      @endif

      <table class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th>Municipio</th>
            <th>Paraje</th>
            <th>Superficie (ha)</th>
            <th>Poligono</th>
            <th>Parcela (recintos)</th>
            <th>Variedad</th>
            <th>Patron</th>
            <th>Proveedor Material Vegetal</th>
            <th>Fecha Plantación</th>
            <th>Marco Plantación</th>
            <th>Cultivo Anterior</th>
            <th>Sistema de Formación</th>
            <th>Cubierta Vegetal</th>
            <th>Acciones</th>
          </tr>

          <tbody>
            @foreach($parcelas as $parcela)
            <tr>
              @foreach($municipios as $municipio)
                @if($parcela->municipio_id == $municipio->id)
                  <td>{{ $municipio->nombre}}</td>
                @endif
              @endforeach
              <td>{{ $parcela->paraje}}</td>
              <td>{{ $parcela->superficie_HA}}</td>
              <td>{{ $parcela->poligono}}</td>
              <td>{{ $parcela->parcela_recinto}}</td>
              <td>{{ $parcela->variedad}}</td>
              <td>{{ $parcela->patron}}</td>
              <td>{{ $parcela->proveedor_MV}}</td>
              <td>{{ $parcela->fecha_plantio}}</td>
              <td>{{ $parcela->marco_plantio}}</td>
              <td>{{ $parcela->cultivo_anterior}}</td>
              <td>{{ $parcela->sistema_formacion}}</td>
              <td>
                @if(($parcela->cubierta_vegetal == 1))
                  <label for="si">Si</label><br>
                @else
                  <label for="no">No</label><br>
                @endif
              </td>
              <td>
                <a href="{{ route('parcelas_form_update',
                  $parcela->id) }}" class="btn btn-primary mb-1">
                  <li class="fas fa-pencil-alt"></li>
                </a>

                <form action="{{ route('parcelas_delete', $parcela->id) }}"
                    method="POST" class="btn mb-1">
                  @csrf @method('DELETE')
                  <button type="submit" onclick="return confirm('¿Desea eliminar la parcela?');" class="btn btn-danger">
                    <li class="fas fa-trash-alt"></li>
                  </button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </thead>
      </table>
      {{ $parcelas->links() }}

    </div>
  </div>
</div>
