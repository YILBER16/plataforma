<fieldset>
    <div class="container ">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">

                        <legend class="card-header text-center ">Registrar saldo a favor</legend>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                    <label>Estudiante</label>
                                    <input type="text" class="form-control" name="id_matricula" name="id_matricula" value="{{isset($estudiante->estudiante->id_estudiante)?$estudiante->estudiante->nom_estudiante:old('nom_estudiante')}}" readonly>
                                 
                                  {!! $errors->first('nom_estudiante','<div class="invalid-feedback">:message</div>') !!}
                              </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Saldo a favor</label>
                                  <input type="text" class="form-control" name="saldo_favor_anterior" name="saldo_favor_anterior" value="{{isset($estudiante->saldo_favor)?$estudiante->saldo_favor:old('saldo_favor')}}" readonly>
                               
                                {!! $errors->first('saldo_favor','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <label class=" control-label">Saldo nuevo</label>
                            
                              <input type="number" class="form-control" name="saldo_favor" id="saldo_favor" >
                              {!! $errors->first('saldo_favor','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                          </div>
                        
                        </div>                      
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary btn-lg" onclick="return confirm('¿Verifique que estén correctamente diligencia todos los campos?');"><i class="fas fa-hand-holding-medical"></i> Registrar</button>   

                        <button type="button" class="btn btn-danger btn-lg" onclick="window.location='{{ url('/matriculas')}}'">Cancelar</button>
        
                            </div>

                        </div>
                     
                        </div>
                        </div>
                        </div>
                        </div>
                         </div>
                       
</fieldset>
