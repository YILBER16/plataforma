<fieldset>
    <div class="container ">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">

                        <legend class="card-header text-center ">Registro de padres</legend>
                        <div class="card-body">
                         <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                              <label>Tipo de documento</label>
                              <select id="tipo_documento" name="tipo_documento" class="form-control form-control-chosen" >
                                <option value="{{isset($padre->tipo_documento)?$padre->tipo_documento:old('tipo_documento')}}">@if($Modo=='crear')Seleccione una opción
                                  @endif
                                  @if($Modo=='editar'){{isset($padre->tipo_documento)?$padre->tipo_documento:old('tipo_documento')}}@endif
                                </option>
                               
                              <option value="CC" @if(old('tipo_documento') == "CC") {{ 'selected' }} @endif>CÉDULA DE CIUDADANÍA</option>
                              <option value="OE" @if(old('tipo_documento') == "OE") {{ 'selected' }} @endif>DOCUMENTO EXTRANJERO</option>
                              <option value="PA" @if(old('tipo_documento') == "PA") {{ 'selected' }} @endif>PASAPORTE</option>
  
                                 </select>
                            
                            {!! $errors->first('tipo_documento','<div class="invalid-feedback">:message</div>') !!}
                              </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Nº identificación</label>
                               <input id="id_padre" name="id_padre" type="number" value="{{isset($padre->id_padre)?$padre->id_padre:old('id_padre')}}"
                                 placeholder="Nº de documento" class="form-control {{$errors->has('id_padre')?'is-invalid':''}}" @if($Modo=='editar') readonly @endif maxlength="20"oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                               

                         {!! $errors->first('id_padre','<div class="invalid-feedback">:message</div>') !!}


                            </div>
                          </div>
                        
                        </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                    <label>Nombres</label>
                                  <input id="nom_padre" name="nom_padre" type="text" value="{{isset($padre->nom_padre)?$padre->nom_padre:old('nom_padre')}}"placeholder="Nombre y apellido"
                                   class="form-control {{$errors->has('nom_padre')?'is-invalid':''}}" maxlength="120">
                                  
                                  {!! $errors->first('nom_padre','<div class="invalid-feedback">:message</div>') !!}
                              </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Parentesco</label>
                                  <select id="parentesco" name="parentesco" class="form-control form-control-chosen">
                                    <option value="{{isset($padre->parentesco)?$padre->parentesco:old('parentesco')}}">@if($Modo=='crear')Seleccione una opción
                                      @endif
                                      @if($Modo=='editar'){{isset($padre->parentesco)?$padre->parentesco:old('parentesco')}}@endif
                                    </option>
                                    <option value="Madre" @if(old('parentesco') == 'Madre') selected="selected" @endif>Madre</option>
                                    <option value="Padre" @if(old('parentesco') == 'Padre') selected="selected" @endif>Padre</option>
                                     </select>
                                
                                {!! $errors->first('parentesco','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        
                       
                        </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                    <label>Ocupación</label>
                                  <input id="ocu_padre" name="ocu_padre" type="text" value="{{isset($padre->ocu_padre)?$padre->ocu_padre:old('ocu_padre')}}"placeholder="Ocupación" class="form-control {{$errors->has('ocu_padre')?'is-invalid':''}}"maxlength="30">
                                  
                                  {!! $errors->first('ocu_padre','<div class="invalid-feedback">:message</div>') !!}
                              </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                    <label>Telefono</label>
                                  <input id="tel_padre" name="tel_padre" type="number" value="{{isset($padre->tel_padre)?$padre->tel_padre:old('tel_padre')}}"placeholder="Telefono" class="form-control {{$errors->has('tel_padre')?'is-invalid':''}}"maxlength="15"oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                  
                                  {!! $errors->first('tel_padre','<div class="invalid-feedback">:message</div>') !!}
                              </div>
                          </div>
                          
                        </div>
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                    <label>Dirección</label>
                                  <input id="dir_padre" name="dir_padre" type="text" value="{{isset($padre->dir_padre)?$padre->dir_padre:old('dir_padre')}}"
                                   placeholder="Dirección" class="form-control {{$errors->has('dir_padre')?'is-invalid':''}}" maxlength="120">
                                 
                                  {!! $errors->first('dir_padre','<div class="invalid-feedback">:message</div>') !!}
                              </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-12 control-label">Documento de identidad</label>
                          <div class="col-md-12">
                            <input type="file" class="form-control" name="doc_documento" id="doc_documento" @if($Modo=='editar') data-initial-preview="{{isset($padre->doc_documento) ? Storage::url("$padre->doc_documento") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=documento+identidad"}}" @endif accept="application/pdf, .pdf">
                            {!! $errors->first('doc_documento','<div class="invalid-feedback">:message</div>') !!}
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <input type="submit" class="btn btn-primary btn-lg" 
                                onclick="return confirm('¿Verifique que estén correctamente diligencia todos los campos?');"  value="{{$Modo=='crear'?'Registrar':'Modificar'}}">      

                        <button type="button" class="btn btn-danger btn-lg" onclick="window.location='{{ url('/padres')}}'">Cancelar</button>
                          
                            </div>

                        </div>
                     
                        </div>
                        </div>
                        </div>
                        </div>
                         </div>
                       
</fieldset>
