<fieldset>
    <div class="container ">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">

                        <legend class="card-header text-center ">Registro de egresos y gastos</legend>
                        <div class="card-body">
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                             <label class="control-label">Fecha</label>
                              <input id="fecha_salida" name="fecha_salida" type="date" class="form-control" value="{{$fechaactual}}" readonly>
                                {!! $errors->first('fecha_salida','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                             <label class="control-label">Clase de salida</label>
                             <select id="clase_salida" name="clase_salida" class="form-control form-control-chosen" >
                              <option value="">Seleccione una opción</option>
                              <option value="Egresos">Egresos</option>
                              <option value="Gastos">Gastos</option>
                             </select>
                             {!! $errors->first('clase_salida','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        </div>    
                        <div class="row">    
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                               <label class="control-label">Concepto</label>
                               <select id="concepto_salida" name="concepto_salida" class="form-control form-control-chosen" >
                                <option value="">Seleccione una opción</option>
                                </select>
                               {!! $errors->first('concepto_salida','<div class="invalid-feedback">:message</div>') !!}
                              </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                               <label class="control-label">Tipo</label>
                               <select id="tipo_salida" name="tipo_salida" class="form-control form-control-chosen" >
                                <option value="">Seleccione una opción</option>
                                 </select>
                               {!! $errors->first('tipo_salida','<div class="invalid-feedback">:message</div>') !!}
                              </div>
                          </div>
                        </div>  
                        <div class="row"> 
                          <div class="col-xs-6 col-sm-6 col-md-6"> 
                            <div class="form-group">
                              <label>Identificación pagado</label>
                              <select id="cc_pagado" name="cc_pagado" class="form-control form-control-chosen">
                                <option value="">Seleccione una opción</option>
                                  </select>
                          </div> 
                        </div> 
                        <div class="col-xs-6 col-sm-6 col-md-6"> 
                          <div class="form-group">
                            <label>Nombre pagado</label>
                            <input id="nom_pagado" name="nom_pagado" type="text" class="form-control" value="" readonly>

                        </div> 
                      </div> 
                      </div> 
                        <div class="row">  
                          <div class="col-xs-12 col-sm-12 col-md-12">  
                            <div class="form-group">
                              <label class="control-label">Valor</label>
                               <input id="valor_salida" name="valor_salida" type="text" class="form-control" value="">
                                 {!! $errors->first('valor_salida','<div class="invalid-feedback">:message</div>') !!}
                             </div>
                          </div>
                        </div>    
                        <div class="row">  
                          <div class="col-xs-12 col-sm-12 col-md-12">  
                            <div class="form-group">
                              <label class="control-label">Descripción</label>
                               <textarea id="descripcion_salida" name="descripcion_salida" rows="4" cols="50" class="form-control" value=""></textarea>
                                 {!! $errors->first('descripcion_salida','<div class="invalid-feedback">:message</div>') !!}
                             </div>
                          </div>
                        </div>         
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                        <button id="guardar" type="submit" class="btn btn-primary btn-lg" ><i class="far fa-check-square"></i> Registrar</button>   

                        <button type="button" class="btn btn-danger btn-lg" onclick="window.location='{{ url('/egresosygastos')}}'">Cancelar</button>
        
                            </div>

                        </div>
                     
                        </div>
                        </div>
                        </div>
                        </div>
                         </div>
                       
</fieldset>
