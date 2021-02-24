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
                                  <label>Nº identificación</label>
                               <input id="id_docente" name="id_docente" type="number" value="{{isset($docente->id_docente)?$docente->id_docente:old('id_docente')}}"
                                 placeholder="Cedula" class="form-control {{$errors->has('id_docente')?'is-invalid':''}}" @if($Modo=='editar') readonly @endif maxlength="20"oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                               

                         {!! $errors->first('id_docente','<div class="invalid-feedback">:message</div>') !!}


                            </div>
                          </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
            <label>Nombres</label>
          <input id="nom_docente" name="nom_docente" type="text" value="{{isset($docente->nom_docente)?$docente->nom_docente:old('nom_docente')}}"placeholder="Nombre y apellido"
           class="form-control {{$errors->has('nom_docente')?'is-invalid':''}}" maxlength="120">
                                
 {!! $errors->first('nom_docente','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Dirección</label>
                                <input id="dir_docente" name="dir_docente" type="text" value="{{isset($docente->dir_docente)?$docente->dir_docente:old('dir_docente')}}"
                                 placeholder="Direccion" class="form-control {{$errors->has('dir_docente')?'is-invalid':''}}" maxlength="120">
                               
                                {!! $errors->first('dir_docente','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                       <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Telefono</label>
                                <input id="tel_docente" name="tel_docente" type="number" value="{{isset($docente->tel_docente)?$docente->tel_docente:old('tel_docente')}}"placeholder="Telefono" class="form-control {{$errors->has('tel_docente')?'is-invalid':''}}"maxlength="15"oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                
                                {!! $errors->first('tel_docente','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Correo</label>
                                <input id="cor_docente" name="cor_docente" type="email" value="{{isset($docente->cor_docente)?$docente->cor_docente:old('cor_docente')}}"placeholder="Correo" class="form-control {{$errors->has('cor_docente')?'is-invalid':''}}" maxlength="65">
                                
                                {!! $errors->first('cor_docente','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Nivel academico</label>
                                <input id="nivel_academico" name="nivel_academico" type="text" value="{{isset($docente->nivel_academico)?$docente->nivel_academico:old('nivel_academico')}}"placeholder="Correo" class="form-control {{$errors->has('nivel_academico')?'is-invalid':''}}" maxlength="65">
                                
                                {!! $errors->first('nivel_academico','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                          <label class=" control-label">Documento de identidad</label>
                          
                            <input type="file" class="form-control" name="doc_documento" id="doc_documento" data-initial-preview="{{isset($docente->doc_documento) ? Storage::url("$docente->doc_documento") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=documento+identidad"}}" accept="application/pdf, .pdf">
                            {!! $errors->first('doc_documento','<div class="invalid-feedback">:message</div>') !!}
                          </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <label class=" control-label">Hoja de vida</label>
                            
                              <input type="file" class="form-control" name="hoja_de_vida" id="hoja_de_vida" data-initial-preview="{{isset($docente->hoja_de_vida) ? Storage::url("$docente->hoja_de_vida") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=hoja+de+vida"}}" accept="application/pdf, .pdf">
                              {!! $errors->first('hoja_de_vida','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                          </div>
                      </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <input type="submit" class="btn btn-primary btn-lg" 
                                onclick="return confirm('¿Verifique que estén correctamente diligencia todos los campos?');"  value="{{$Modo=='crear'?'Registrar':'Modificar'}}">      

                        <button type="button" class="btn btn-danger btn-lg" onclick="window.location='{{ url('/docentes')}}'">Cancelar</button>
                          
                            </div>

                        </div>
                     
                        </div>
                        </div>
                        </div>
                        </div>
                         </div>
                       
</fieldset>
