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
      @if(session('control_plagas_prod_save'))
        <div class="alert alert-success">
          {{ session('control_plagas_prod_save') }}
        </div>
      @endif

      <div class="card">
        <form action="{{ url('/control_plagas_prod_save')}}" method="POST">
          @csrf

          <div class="card-header text-center">AGREGAR CONTROL PLAGAS COSTES DE PRODUCCIÓN</div>
          <div class="card-body">
            <div class="row form-group">
              <label for="" class="col-4">N° de Parcela agricola</label>
              <select name="parcela_id">
              @foreach($parcelas as $parcela)
                <option value="{{ $parcela->id }}">
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
                placeholder="Mano de obra; peón, experto,..."/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Coste Unitario</label>
              <input type="number" name="recursos_humanos_coste_unit"
                placeholder="Mano de obra; peón, experto,..."
                class="form-control col-md-7"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Coste Total</label>
              <input type="number" name="recursos_humanos_coste_total"
                placeholder="Mano de obra; peón, experto,..."
                class="form-control col-md-7"/>
            </div>

            <center>Recursos Materiales</center>
            <div class="row form-group">
              <label for="" class="col-4">Horas o Unidaddes</label>
              <input type="number" name="recursos_materiales_hrs"
                class="form-control col-md-7"
                placeholder="Agua, productos, combustible... etc."/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Coste Unitario</label>
              <input type="number" name="resursos_materiales_coste_u"
                class="form-control col-md-7"
                placeholder="Agua, productos, combustible... etc."/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Coste Total</label>
              <input type="number" name="resursos_materiales_coste_t"
                class="form-control col-md-7"
                placeholder="Agua, productos, combustible... etc."/>
            </div>

            <center>TOTAL CONTROL PLAGAS</center>
            <div class="row form-group">
              <label for="" class="col-4">Horas o Unidades</label>
              <input type="number" name="total_control_plagas_hrs"
              class="form-control col-md-7"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Coste Unitario</label>
              <input type="number" name="total_control_plagas_coste_unit"
                class="form-control col-md-7"/>
            </div>

            <div class="row form-group">
              <label for="" class="col-4">Coste Total</label>
              <input type="number" name="total_control_plagas_coste_total"
                    class="form-control col-md-7"/>
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
  <a class="btn btn-light btn-xs mt-5" href="{{url('/control_plagas_prod')}}">&laquo volver</a>
</div>
