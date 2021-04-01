<fieldset>
    <div class="container ">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">

                        <legend class="card-header text-center ">Registro de año lectivo</legend>
                        <div class="card-body">
                         <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                                  <label>Año lectivo</label>
                               <input id="id_anio_lectivo" name="id_anio_lectivo" type="text" placeholder="Cedula" class="yearpicker form-control" >
                               

                         {!! $errors->first('id_padre','<div class="invalid-feedback">:message</div>') !!}


                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                              <label>Fecha de inicio</label>
                                <input id="fecha_inicio" name="fecha_inicio" type="date"value="{{isset($estudiante->fecha_inicio)?$estudiante->fecha_inicio:old('fecha_inicio')}}"  class="form-control {{$errors->has('fecha_inicio')?'is-invalid':''}}">
                                
                                {!! $errors->first('fecha_inicio','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>


                      <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <label>Fecha de fin</label>
                              <input id="fecha_fin" name="fecha_fin" type="date"value="{{isset($estudiante->fecha_fin)?$estudiante->fecha_fin:old('fecha_fin')}}"  class="form-control {{$errors->has('fecha_fin')?'is-invalid':''}}">
                              
                              {!! $errors->first('fecha_fin','<div class="invalid-feedback">:message</div>') !!}
                          </div>
                      </div>
                      </div>
                       
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <input id="guardar" type="submit" class="btn btn-primary btn-lg" 
                                 value="{{$Modo=='crear'?'Registrar':'Modificar'}}">      

                        <button type="button" class="btn btn-danger btn-lg" onclick="window.location='{{ url('/aniolectivo')}}'">Cancelar</button>
                          
                            </div>

                        </div>
                     
                        </div>
                        </div>
                        </div>
                        </div>
                         </div>
<script type="text/javascript">
$(function() {
$('.yearpicker').yearpicker();                    
});
                       </script>
</fieldset>
