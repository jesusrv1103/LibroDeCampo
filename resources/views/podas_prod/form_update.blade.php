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
      @if(session('podas_prod_update'))
        <div class="alert alert-success">
          {{ session('podas_prod_update') }}
        </div>
      @endif

      <div class="card">
        <form action="{{ route('podas_prod_update', $poda_prod->id)}}" method="POST">
          @csrf @method('PATCH')

          <div class="card-header text-center">MODIFICAR PODA DE COSTES DE PRODUCCIÓN</div>
          <div class="card-body">
            <div class="row form-group">
              <label for="" class="col-4">N° de Parcela agricola</label>
              <select name="parcela_id">
              @foreach($parcelas as $parcela)
                <option value="{{ $parcela->id }}"
                    @if($parcela->id == $poda_prod->parcela_id)
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
                value="{{ $poda_prod->recursos_humanos_hrs }}"
                placeholder="Mano de obra; peón, experto,..."/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Coste Unitario</label>
              <input type="number" name="recursos_humanos_coste_unit"
                class="form-control col-md-7" step="any"
                value="{{ $poda_prod->recursos_humanos_coste_unit }}"
                placeholder="Mano de obra; peón, experto,..."/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Coste Total</label>
              <input type="number" name="recursos_humanos_coste_total"
                class="form-control col-md-7"
                value="{{ $poda_prod->recursos_humanos_coste_total }}"
                placeholder="Mano de obra; peón, experto,..."/>
            </div>

            <center>Recursos Materiales</center>
            <div class="row form-group">
              <label for="" class="col-4">Horas o Unidaddes</label>
              <input type="number" name="recursos_materiales_hrs"
                class="form-control col-md-7"
                value="{{ $poda_prod->recursos_materiales_hrs }}"
                placeholder="Combustible, etc."/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Coste Unitario</label>
              <input type="number" name="resursos_materiales_coste_u"
                class="form-control col-md-7" step="any"
                value="{{ $poda_prod->resursos_materiales_coste_u }}"
                placeholder="Combustible, etc."/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Coste Total</label>
              <input type="number" name="resursos_materiales_coste_t"
                class="form-control col-md-7"
                value="{{ $poda_prod->resursos_materiales_coste_t }}"
                placeholder="Combustible, etc."/>
            </div>

            <center>TOTAL PODAS</center>
            <div class="row form-group">
              <label for="" class="col-4">Horas o Unidaddes</label>
              <input type="number" name="total_podas_hrs"
                class="form-control col-md-7"
                value="{{ $poda_prod->total_podas_hrs }}"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Coste Unitario</label>
              <input type="number" name="total_podas_coste_unit"
                class="form-control col-md-7" step="any"
                value="{{ $poda_prod->total_podas_coste_unit }}"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Coste Total</label>
              <input type="number" name="total_podas_coste_total" step="any"
                class="form-control col-md-7"
                value="{{ $poda_prod->total_podas_coste_total }}"/>
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
  <a class="btn btn-light btn-xs mt-5" href="{{url('/podas_prod')}}">&laquo volver</a>
</div>
