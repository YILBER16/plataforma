<fieldset>
    <div class="container ">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">

                        <legend class="card-header text-center ">Registro de mensualidades</legend>
                        <div class="card-body">
                         <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Tipo de mensualidad</label>
                                    <select id="tipo_mensualidad" name="tipo_mensualidad" class="form-control" @if($Modo=='editar') readonly @endif>
                                      <option value="{{isset($mensualidades->tipo_mensualidad)?$mensualidades->tipo_mensualidad:old('tipo_mensualidad')}}">@if($Modo=='crear')Seleccione una opción
                                        @endif
                                        @if($Modo=='editar'){{isset($mensualidades->tipo_mensualidad)?$mensualidades->tipo_mensualidad:old('tipo_mensualidad')}}@endif
                                      </option>
                                      <option value="Jardin">Jardin</option>
                                      <option value="Preescolar">Preescolar</option>
                                      <option value="Primaria">Primaria</option>
                                      <option value="Secundaria">Secundaria</option>
                                       </select>
                                  
                                  {!! $errors->first('tipo_mensualidad','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                          </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                              <div class="form-group">
                                    <label>Valor</label>
                                    
                                  <input id="valor" name="valor" type="number" value="{{isset($mensualidades->valor)?$mensualidades->valor:old('valor')}}"
                                   placeholder="Valor" class="form-control {{$errors->has('valor')?'is-invalid':''}}" min="1" step="any">
                                 
                                  {!! $errors->first('valor','<div class="invalid-feedback">:message</div>') !!}
                              
                          </div>
                        </div>
                        </div>
                                   
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <input id="guardar" type="submit" class="btn btn-primary btn-lg" 
                                 value="{{$Modo=='crear'?'Registrar':'Modificar'}}">      

                        <button type="button" class="btn btn-danger btn-lg" onclick="window.location='{{ url('/mensualidades')}}'">Cancelar</button>
                          
                            </div>

                        </div>
                     
                        </div>
                        </div>
                        </div>
                        </div>
                         </div>
                       
</fieldset>
