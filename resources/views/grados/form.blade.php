<fieldset>
    <div class="container ">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">

                        <legend class="card-header text-center ">Registro de grados</legend>
                        <div class="card-body">
                         <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Grado</label>
                               <input id="nom_grado" name="nom_grado" type="text" value="{{isset($grado->nom_grado)?$grado->nom_grado:old('nom_grado')}}"
                                 placeholder="Nombre del grado" class="form-control {{$errors->has('nom_grado')?'is-invalid':''}}" @if($Modo=='editar') readonly @endif>
                               

                         {!! $errors->first('nom_grado','<div class="invalid-feedback">:message</div>') !!}


                            </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                    <label>Jornada</label>
                                    <select id="jornada" name="jornada" class="form-control ">
                                      <option value="{{isset($grado->jornada)?$grado->jornada:old('jornada')}}">@if($Modo=='crear')Seleccione una opción
                                        @endif
                                        @if($Modo=='editar'){{isset($grado->jornada)?$grado->jornada:old('jornada')}}@endif
                                      </option>
                                      <option value="Mañana">Mañana</option>
                                      <option value="Tarde">Tarde</option>
                                      <option value="Noche">Noche</option>
                                       </select>
                                  
                                  {!! $errors->first('jornada','<div class="invalid-feedback">:message</div>') !!}
                              </div>
                          </div>
                          </div>
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                                  <label>Tipo de mensualidad</label>
                                  <select id="id_mensualidad" name="id_mensualidad" class="form-control ">
                                    <option value="{{isset($grado->id_mensualidad)?$grado->id_mensualidad:old('id_mensualidad')}}">@if($Modo=='crear')Seleccione una opción
                                      @endif
                                      @if($Modo=='editar'){{isset($grado->id_mensualidad)?$grado->mensualidad->tipo_mensualidad:old('id_mensualidad')}}@endif
                                    </option>
                                    
                                    @foreach ($mensualidad as $item)
                                    <option value="{{$item['id_mensualidad']}}">{{$item['tipo_mensualidad']}}</option>
                                    @endforeach
                                 
                                     </select>
                                
                                {!! $errors->first('id_mensualidad','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        
                        </div>                      
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <input type="submit" class="btn btn-primary btn-lg" 
                                onclick="return confirm('¿Verifique que estén correctamente diligencia todos los campos?');"  value="{{$Modo=='crear'?'Registrar':'Modificar'}}">      

                        <button type="button" class="btn btn-danger btn-lg" onclick="window.location='{{ url('/grados')}}'">Cancelar</button>
                          
                            </div>

                        </div>
                     
                        </div>
                        </div>
                        </div>
                        </div>
                         </div>
                       
</fieldset>
