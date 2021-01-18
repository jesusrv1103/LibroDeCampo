@extends('layouts.base')
@include('layouts.menu')

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-7 mt-3">
      
      <!-- Validación de errores -->
      @if($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
              <li> {{ $error }} </li>
            @endforeach
          </ul>
        </div>
      @endif

      <!-- Mensaje de guardado -->
      @if(session('recoleccion_prod_update'))
        <div class="alert alert-success">
          {{ session('recoleccion_prod_update') }}
        </div>
      @endif

      <div class="card">
        <form action="{{ route('recoleccion_prod_update', $recoleccion_prod->id)}}" method="POST">
          @csrf @method('PATCH')

          <div class="card-header text-center">MODIFICAR RECOLECCIÓN DE COSTES DE PRODUCCIÓN</div>
          <div class="card-body">
            <div class="row form-group">
              <label for="" class="col-4">N° de Parcela agricola</label>
              <select name="parcela_id">
              @foreach($parcelas as $parcela)
                <option value="{{ $parcela->id }}"
                    @if($parcela->id == $recoleccion_prod->parcela_id)
                      selected
                    @endif>
                  {{ $parcela->id }}
                </option>
              @endforeach
              </select>
            </div>

            <center>Recursos Humanos</center>
            <div class="row form-group">
              <label for="" class="col-4">Horas o Unidaddes</label>
              <input type="number" name="recursos_humanos_hrs"
                class="form-control col-md-7"
                value="{{ $recoleccion_prod->recursos_humanos_hrs }}"
                placeholder="Mano de obra; peón, experto,..."/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Coste Unitario</label>
              <input type="number" name="recursos_humanos_coste_unit"
                class="form-control col-md-7"
                placeholder="Mano de obra; peón, experto,..."
                value="{{ $recoleccion_prod->recursos_humanos_coste_unit }}"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Coste Total</label>
              <input type="number" name="recursos_humanos_coste_total"
                class="form-control col-md-7"
                placeholder="Mano de obra; peón, experto,..."
                value="{{ $recoleccion_prod->recursos_humanos_coste_total }}"/>
            </div>

            <center>Recursos Materiales</center>
            <div class="row form-group">
              <label for="" class="col-4">Horas o Unidaddes</label>
              <input type="number" name="recursos_materiales_hrs"
                class="form-control col-md-7"
                placeholder="Maquinaria, combustible, etc."
                value="{{ $recoleccion_prod->recursos_materiales_hrs }}"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Coste Unitario</label>
              <input type="number" name="resursos_materiales_coste_u"
                class="form-control col-md-7"
                placeholder="Maquinaria, combustible, etc."
                value="{{ $recoleccion_prod->resursos_materiales_coste_u }}"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Coste Total</label>
              <input type="number" name="resursos_materiales_coste_t"
                class="form-control col-md-7"
                placeholder="Maquinaria, combustible, etc."
                value="{{ $recoleccion_prod->resursos_materiales_coste_t }}"/>
            </div>

            <center>TOTAL RECOLECCIÓN</center>
            <div class="row form-group">
              <label for="" class="col-4">Horas o Unidaddes</label>
              <input type="number" name="total_recoleccion_hrs"
                class="form-control col-md-7"
                value="{{ $recoleccion_prod->total_recoleccion_hrs }}"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Coste Unitario</label>
              <input type="number" name="total_recoleccion_coste_unit"
                class="form-control col-md-7" step="any"
                value="{{ $recoleccion_prod->total_recoleccion_coste_unit }}"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Coste Total</label>
              <input type="number" name="total_recoleccion_coste_total"
                class="form-control col-md-7"
                value="{{ $recoleccion_prod->total_recoleccion_coste_total }}"/>
            </div>

            <div class="row form-group">
              <button type="submit" class="btn btn-success col-md-9 offset-2">
                Guardar
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <a class="btn btn-light btn-xs mt-5" href="{{url('/recoleccion_prod')}}">&laquo volver</a>
</div>
