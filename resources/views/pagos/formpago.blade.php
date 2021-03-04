<fieldset>
    <div class="container ">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">

                        <legend class="card-header text-center ">Factura {{$pago->mes->nom_mes}} de {{$pago->matricula->estudiante->nom_estudiante}}</legend>
                        <div class="card-body">
                        <div class="row">
                          <div class="col-xs-4 col-sm-4 col-md-4">
                          <div class="form-group">
                                  <label>Nº de pago</label>
                                  <input id="id_pago" name="id_pago" type="text" value="{{isset($pago->id_pago)?$pago->id_pago:old('id_pago')}}" class="form-control" readonly>
                                {!! $errors->first('id_pago','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                          <div class="form-group">
                                  <label>Mes facturado</label>
                    <input id="id_mes" name="id_mes" type="text" value="{{isset($pago->mes->id_mes)?$pago->mes->nom_mes:old('nom_mes')}}" class="form-control" readonly>

                                {!! $errors->first('nom_mes','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                          <div class="form-group">
                                  <label>Nº de matricula</label>
                                  <input id="id_matricula" name="id_matricula" type="text" value="{{isset($pago->id_matricula)?$pago->id_matricula:old('id_matricula')}}" class="form-control" readonly>
                                {!! $errors->first('id_matricula','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        </div>    
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                    <label>Acudiente</label>
                                    <input id="id_acudiente" name="id_acudiente" type="text" value="{{isset($pago->matricula->acudiente->id_acudiente)?$pago->matricula->acudiente->nom_acudiente:old('nom_acudiente')}}" class="form-control" readonly>
                                  {!! $errors->first('nom_acudiente','<div class="invalid-feedback">:message</div>') !!}
                              </div>
                          </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Estudiante</label>
                                  <input id="id_matricula" name="id_matricula" type="text" value="{{isset($pago->matricula->estudiante->id_estudiante)?$pago->matricula->estudiante->nom_estudiante:old('nom_estudiante')}}" class="form-control" readonly>
                                  {!! $errors->first('nom_estudiante','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        
                        </div>    
                        <div class="row">
                          
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Saldo</label>
                                  <input id="saldo" name="saldo" type="text" value="{{isset($pago->saldo)?$pago->saldo:old('saldo')}}" class="form-control" readonly >
                                  {!! $errors->first('saldo','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Abono</label>
                                  <input id="abono" name="abono" type="number" class="form-control" maxlength="20"oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                {!! $errors->first('abono','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div> 
                        
                        </div>  
                                 
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="button" class="btn btn-primary btn-lg" onclick="enviar();">Abonar</button>

                        <button type="button" class="btn btn-danger btn-lg" onclick="window.location='{{ url('/pagos')}}'">Cancelar</button>
                          
                            </div>

                        </div>
                     
                        </div>
                        </div>
                        </div>
                        </div>
                         </div>
                       
</fieldset>
