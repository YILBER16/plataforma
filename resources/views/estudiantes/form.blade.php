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
                                  <label>Nº identificación</label>
                               <input id="id_estudiante" name="id_estudiante" type="number" value="{{isset($estudiante->id_estudiante)?$estudiante->id_estudiante:old('id_estudiante')}}"
                                 placeholder="Cedula" class="form-control {{$errors->has('id_estudiante')?'is-invalid':''}}" @if($Modo=='editar') readonly @endif maxlength="20"oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                               

                         {!! $errors->first('id_estudiante','<div class="invalid-feedback">:message</div>') !!}


                            </div>
                          </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Nombres</label>
                                <input id="nom_estudiante" name="nom_estudiante" type="text" value="{{isset($estudiante->nom_estudiante)?$estudiante->nom_estudiante:old('nom_estudiante')}}"placeholder="Nombre y apellido"
                                 class="form-control {{$errors->has('nom_estudiante')?'is-invalid':''}}" maxlength="120">
                                
                                {!! $errors->first('nom_estudiante','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Dirección</label>
                                <input id="dir_estudiante" name="dir_estudiante" type="text" value="{{isset($estudiante->dir_estudiante)?$estudiante->dir_estudiante:old('dir_estudiante')}}"
                                 placeholder="Dirección" class="form-control {{$errors->has('dir_estudiante')?'is-invalid':''}}" maxlength="120">
                               
                                {!! $errors->first('dir_estudiante','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                       <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <label>Telefono</label>
                            <input id="tel_estudiante" name="tel_estudiante" type="number" value="{{isset($estudiante->tel_estudiante)?$estudiante->tel_estudiante:old('tel_estudiante')}}"placeholder="Telefono" class="form-control {{$errors->has('tel_estudiante')?'is-invalid':''}}"maxlength="15"oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                            
                            {!! $errors->first('tel_estudiante','<div class="invalid-feedback">:message</div>') !!}
                                 
                            </div>
                        </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <label>Sexo</label>
                            <select id="sexo" name="sexo" class="form-control ">
                              <option value="{{isset($estudiante->sexo)?$estudiante->sexo:old('sexo')}}">@if($Modo=='crear')Seleccione una opción
                                @endif
                                @if($Modo=='editar'){{isset($estudiante->sexo)?$estudiante->sexo:old('sexo')}}@endif
                              </option>
                              <option value="Masculino">Masculino</option>
                              <option value="Femenino">Femenino</option>
                              <option value="Otro">Otro</option>
                               </select>
                          
                          {!! $errors->first('parentesco','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                       <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <label>Correo</label>
                            <input id="cor_estudiante" name="cor_estudiante" type="email" value="{{isset($estudiante->cor_estudiante)?$estudiante->cor_estudiante:old('cor_estudiante')}}"placeholder="Correo" class="form-control {{$errors->has('cor_estudiante')?'is-invalid':''}}"maxlength="15"oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                            
                            {!! $errors->first('cor_estudiante','<div class="invalid-feedback">:message</div>') !!} 
                            </div>
                        </div>
                        </div>
                       
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <input type="submit" class="btn btn-primary btn-lg" 
                                onclick="return confirm('¿Verifique que estén correctamente diligencia todos los campos?');"  value="{{$Modo=='crear'?'Registrar':'Modificar'}}">      

                        <button type="button" class="btn btn-danger btn-lg" onclick="window.location='{{ URL::previous() }}'">Cancelar</button>
                          
                            </div>

                        </div>
                     
                        </div>
                        </div>
                        </div>
                        </div>
                         </div>
                       
</fieldset>
