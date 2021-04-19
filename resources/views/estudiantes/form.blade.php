<fieldset>
    <div class="container ">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">

                        <legend class="card-header text-center ">Registro de estudiantes</legend>
                        <div class="card-body">
                         <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                              <label>Tipo de documento</label>
                              <select id="tipo_documento" name="tipo_documento" class="form-control form-control-chosen" >
                                <option value="{{isset($estudiante->tipo_documento)?$estudiante->tipo_documento:old('tipo_documento')}}">@if($Modo=='crear')Seleccione una opción
                                  @endif
                                  @if($Modo=='editar'){{isset($estudiante->tipo_documento)?$estudiante->tipo_documento:old('tipo_documento')}}@endif
                                </option>
                               
                              <option value="CC" @if(old('tipo_documento') == "CC") {{ 'selected' }} @endif>CÉDULA DE CIUDADANÍA</option>
                              <option value="TI" @if(old('tipo_documento') == "TI") {{ 'selected' }} @endif>TARJETA DE IDENTIDAD</option>
                              <option value="OE" @if(old('tipo_documento') == "OE") {{ 'selected' }} @endif>DOCUMENTO EXTRANJERO</option>
                              <option value="RC" @if(old('tipo_documento') == "RC") {{ 'selected' }} @endif>REGISTRO CIVIL</option>
                              <option value="PA" @if(old('tipo_documento') == "PA") {{ 'selected' }} @endif>PASAPORTE</option>
  
                                 </select>
                            
                            {!! $errors->first('tipo_documento','<div class="invalid-feedback">:message</div>') !!}
                              </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Nº identificación</label>
                               <input id="id_estudiante" name="id_estudiante" type="number" value="{{isset($estudiante->id_estudiante)?$estudiante->id_estudiante:old('id_estudiante')}}"
                                 placeholder="Nº Documento" class="form-control {{$errors->has('id_estudiante')?'is-invalid':''}}" @if($Modo=='editar') readonly @endif maxlength="20"oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                               

                         {!! $errors->first('id_estudiante','<div class="invalid-feedback">:message</div>') !!}


                            </div>
                          </div>
                       
                        </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                    <label>Nombres</label>
                                  <input id="nom_estudiante" name="nom_estudiante" type="text" value="{{isset($estudiante->nom_estudiante)?$estudiante->nom_estudiante:old('nom_estudiante')}}"placeholder="Nombre y apellido"
                                   class="form-control {{$errors->has('nom_estudiante')?'is-invalid':''}}" maxlength="120">
                                  
                                  {!! $errors->first('nom_estudiante','<div class="invalid-feedback">:message</div>') !!}
                              </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Dirección</label>
                                <input id="dir_estudiante" name="dir_estudiante" type="text" value="{{isset($estudiante->dir_estudiante)?$estudiante->dir_estudiante:old('dir_estudiante')}}"
                                 placeholder="Dirección" class="form-control {{$errors->has('dir_estudiante')?'is-invalid':''}}" maxlength="120">
                               
                                {!! $errors->first('dir_estudiante','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                       
                        </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                              <label>Telefono</label>
                              <input id="tel_estudiante" name="tel_estudiante" type="number" value="{{isset($estudiante->tel_estudiante)?$estudiante->tel_estudiante:old('tel_estudiante')}}"placeholder="Telefono" class="form-control {{$errors->has('tel_estudiante')?'is-invalid':''}}"maxlength="15"oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                              
                              {!! $errors->first('tel_estudiante','<div class="invalid-feedback">:message</div>') !!}
                                   
                              </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                              <label>Correo</label>
                              <input id="cor_estudiante" name="cor_estudiante" type="email" value="{{isset($estudiante->cor_estudiante)?$estudiante->cor_estudiante:old('cor_estudiante')}}"placeholder="Correo" class="form-control {{$errors->has('cor_estudiante')?'is-invalid':''}}"maxlength="60">
                              
                              {!! $errors->first('cor_estudiante','<div class="invalid-feedback">:message</div>') !!} 
                              </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                              <label>Sexo</label>
                              <select id="sexo" name="sexo" class="form-control form-control-chosen">
                                <option value="{{isset($estudiante->sexo)?$estudiante->sexo:old('sexo')}}">@if($Modo=='crear')Seleccione una opción
                                  @endif
                                  @if($Modo=='editar'){{isset($estudiante->sexo)?$estudiante->sexo:old('sexo')}}@endif
                                </option>
                                <option value="Masculino" @if(old('sexo') == "Masculino") {{ 'selected' }} @endif>Masculino</option>
                                <option value="Femenino" @if(old('sexo') == "Femenino") {{ 'selected' }} @endif>Femenino</option>
                                <option value="Otro" @if(old('sexo') == "Otro") {{ 'selected' }} @endif>Otro</option>
                                 </select>
                            
                            {!! $errors->first('sexo','<div class="invalid-feedback">:message</div>') !!}
                              </div>
                          </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <label>Pais</label>
                            <select id="id_pais" name="id_pais" class="form-control form-control-chosen" >
                              <option value="{{isset($estudiante->pais->id)?$estudiante->pais->id:old('id')}}">@if($Modo=='crear')Seleccione una opción
                                @endif
                                @if($Modo=='editar'){{isset($estudiante->pais->id)?$estudiante->pais->name:old('name')}}@endif
                              </option>
                              @foreach ($pais as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                               </select>
                          
                          {!! $errors->first('id_pais','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                      </div>
                        <div class="row">
                         
                       <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                          <label>Departamento</label>
                          <select id="id_departamento" name="id_departamento" class="form-control form-control-chosen">
                            <option value="{{isset($estudiante->departamento->id)?$estudiante->departamento->id:old('id')}}">@if($Modo=='crear')Seleccione una opción
                              @endif
                              @if($Modo=='editar'){{isset($estudiante->departamento->id)?$estudiante->departamento->name:old('name')}}@endif
                            </option>
                           
                          
                               </select>
                                                     
                        
                        {!! $errors->first('id_departamento','<div class="invalid-feedback">:message</div>') !!}
                          </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <label>Ciudad</label>
                            <select id="id_ciudad" name="id_ciudad" class="form-control form-control-chosen">
                              <option value="{{isset($estudiante->ciudad->id)?$estudiante->ciudad->id:old('id')}}">@if($Modo=='crear')Seleccione una opción
                                @endif
                                @if($Modo=='editar'){{isset($estudiante->ciudad->id)?$estudiante->ciudad->name:old('name')}}@endif
                              </option>
                               </select>
                          
                          {!! $errors->first('id_ciudad','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                              <label>Fecha de nacimiento</label>
                                <input id="fecha_nacimiento" name="fecha_nacimiento" type="date"value="{{isset($estudiante->fecha_nacimiento)?$estudiante->fecha_nacimiento:old('fecha_nacimiento')}}"  class="form-control {{$errors->has('fecha_nacimiento')?'is-invalid':''}}">
                                
                                {!! $errors->first('fecha_nacimiento','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>


                      <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <label>Fecha de expedición</label>
                              <input id="fecha_expedicion" name="fecha_expedicion" type="date"value="{{isset($estudiante->fecha_expedicion)?$estudiante->fecha_expedicion:old('fecha_expedicion')}}"  class="form-control {{$errors->has('fecha_expedicion')?'is-invalid':''}}">
                              
                              {!! $errors->first('fecha_expedicion','<div class="invalid-feedback">:message</div>') !!}
                          </div>
                      </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <label class=" control-label">Certificado Simat</label>
                            
                              <input type="file" class="form-control" name="doc_simat" id="doc_simat" @if($Modo=='editar') data-initial-preview="{{isset($estudiante->doc_simat) ? Storage::url("$estudiante->doc_simat") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Certificado+simat"}}" @endif accept="application/pdf, .pdf">
                              {!! $errors->first('doc_simat','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                          </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="form-group">
                        <label class=" control-label">Carnet de vacunación</label>
                        
                          <input type="file" class="form-control" name="doc_vacunacion" id="doc_vacunacion" @if($Modo=='editar') data-initial-preview="{{isset($estudiante->doc_vacunacion) ? Storage::url("$estudiante->doc_vacunacion") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Documento+vacunacion"}}" @endif accept="application/pdf, .pdf">
                          {!! $errors->first('doc_vacunacion','<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                          <label class=" control-label">Carnet de salud</label>
                          
                            <input type="file" class="form-control" name="doc_salud" id="doc_salud" @if($Modo=='editar') data-initial-preview="{{isset($estudiante->doc_salud) ? Storage::url("$estudiante->doc_salud") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Documento+salud"}}" @endif accept="application/pdf, .pdf">
                            {!! $errors->first('doc_salud','<div class="invalid-feedback">:message</div>') !!}
                          </div>
                        </div>
                      <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                          <label class=" control-label">Otros documentos</label>
                          
                            <input type="file" class="form-control" name="doc_otros" id="doc_otros" @if($Modo=='editar') data-initial-preview="{{isset($estudiante->doc_otros) ? Storage::url("$estudiante->doc_otros") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Otros+documentos"}}" @endif accept="application/pdf, .pdf">
                            {!! $errors->first('doc_otros','<div class="invalid-feedback">:message</div>') !!}
                          </div>
                        </div>
                                         
                  </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <input id="guardar" type="submit" class="btn btn-primary btn-lg" 
                                 value="{{$Modo=='crear'?'Registrar':'Modificar'}}">      

                        <button type="button" class="btn btn-danger btn-lg" onclick="window.location='{{ url('/estudiantes')}}'">Cancelar</button>
                          
                            </div>

                        </div>
                     
                        </div>
                        </div>
                        </div>
                        </div>
                         </div>
                       
</fieldset>
