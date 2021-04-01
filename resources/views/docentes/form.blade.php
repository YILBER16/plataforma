<fieldset>
    <div class="container ">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">

                        <legend class="card-header text-center ">Registro de docentes</legend>
                        <div class="card-body">
                         <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                              <label>Tipo de documento</label>
                              <select id="tipo_documento" name="tipo_documento" class="form-control form-control-chosen" >
                                <option value="{{isset($docente->tipo_documento)?$docente->tipo_documento:old('tipo_documento')}}">@if($Modo=='crear')Seleccione una opción
                                  @endif
                                  @if($Modo=='editar'){{isset($docente->tipo_documento)?$docente->tipo_documento:old('tipo_documento')}}@endif
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
                               <input id="id_docente" name="id_docente" type="number" value="{{isset($docente->id_docente)?$docente->id_docente:old('id_docente')}}"
                                 placeholder="Nº de documento" class="form-control {{$errors->has('id_docente')?'is-invalid':''}}" @if($Modo=='editar') readonly @endif maxlength="20"oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                               

                         {!! $errors->first('id_docente','<div class="invalid-feedback">:message</div>') !!}


                            </div>
                          </div>
                        
                        </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                  <label>Nombres</label>
                                <input id="nom_docente" name="nom_docente" type="text" value="{{isset($docente->nom_docente)?$docente->nom_docente:old('nom_docente')}}"placeholder="Nombre y apellido"
                                class="form-control {{$errors->has('nom_docente')?'is-invalid':''}}" maxlength="120">
                                                      
                      {!! $errors->first('nom_docente','<div class="invalid-feedback">:message</div>') !!}
                                                  </div>
                            </div>
                          <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Dirección</label>
                                <input id="dir_docente" name="dir_docente" type="text" value="{{isset($docente->dir_docente)?$docente->dir_docente:old('dir_docente')}}"
                                 placeholder="Direccion" class="form-control {{$errors->has('dir_docente')?'is-invalid':''}}" maxlength="120">
                               
                                {!! $errors->first('dir_docente','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                       
                        </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                    <label>Telefono</label>
                                  <input id="tel_docente" name="tel_docente" type="number" value="{{isset($docente->tel_docente)?$docente->tel_docente:old('tel_docente')}}"placeholder="Telefono" class="form-control {{$errors->has('tel_docente')?'is-invalid':''}}"maxlength="15"oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                  
                                  {!! $errors->first('tel_docente','<div class="invalid-feedback">:message</div>') !!}
                              </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Correo</label>
                                <input id="cor_docente" name="cor_docente" type="email" value="{{isset($docente->cor_docente)?$docente->cor_docente:old('cor_docente')}}"placeholder="Correo" class="form-control {{$errors->has('cor_docente')?'is-invalid':''}}" maxlength="65">
                                
                                {!! $errors->first('cor_docente','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        
                        </div>
                        <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                                  <label>Grado académico</label>
                                <select id="nivel_academico" name="nivel_academico" class="form-control form-control-chosen" >
                                  <option value="{{isset($docente->nivel_academico)?$docente->nivel_academico:old('nivel_academico')}}">@if($Modo=='crear')Seleccione una opción
                                    @endif
                                    @if($Modo=='editar'){{isset($docente->nivel_academico)?$docente->nivel_academico:old('nivel_academico')}}@endif
                                  </option>
                                 
                                <option value="BACHILLER" @if(old('tipo_documento') == "BACHILLER") {{ 'selected' }} @endif>BACHILLER</option>
                                <option value="TECNICO" @if(old('tipo_documento') == "TECNICO") {{ 'selected' }} @endif>TECNICO</option>
                                <option value="TECNOLOGO" @if(old('tipo_documento') == "TECNOLOGO") {{ 'selected' }} @endif>TECNOLOGO</option>
                                <option value="PREGRADO" @if(old('tipo_documento') == "PREGRADO") {{ 'selected' }} @endif>PREGRADO</option>
                                <option value="POSTGRADO" @if(old('tipo_documento') == "POSTGRADO") {{ 'selected' }} @endif>POSTGRADO</option>
                                <option value="DOCTORADO" @if(old('tipo_documento') == "DOCTORADO") {{ 'selected' }} @endif>DOCTORADO</option>
                                <option value="POSTDOCTORADO" @if(old('tipo_documento') == "POSTDOCTORADO") {{ 'selected' }} @endif>POSTDOCTORADO</option>

                                   </select>
                                {!! $errors->first('nivel_academico','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                      </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                          <label class=" control-label">Documento de identidad</label>
                          
                            <input type="file" class="form-control" name="doc_documento" id="doc_documento" @if($Modo=='editar') data-initial-preview="{{isset($docente->doc_documento) ? Storage::url("$docente->doc_documento") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=documento+identidad"}}" @endif accept="application/pdf, .pdf">
                            {!! $errors->first('doc_documento','<div class="invalid-feedback">:message</div>') !!}
                          </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <label class=" control-label">Hoja de vida</label>
                            
                              <input type="file" class="form-control" name="hoja_de_vida" id="hoja_de_vida" @if($Modo=='editar') data-initial-preview="{{isset($docente->hoja_de_vida) ? Storage::url("$docente->hoja_de_vida") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=hoja+de+vida"}}" @endif accept="application/pdf, .pdf">
                              {!! $errors->first('hoja_de_vida','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                          </div>
                      </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <input id="guardar" type="submit" class="btn btn-primary btn-lg" 
                                 value="{{$Modo=='crear'?'Registrar':'Modificar'}}">      

                        <button type="button" class="btn btn-danger btn-lg" onclick="window.location='{{ url('/docentes')}}'">Cancelar</button>
                          
                            </div>

                        </div>
                     
                        </div>
                        </div>
                        </div>
                        </div>
                         </div>
                       
</fieldset>
