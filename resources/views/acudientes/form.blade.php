<fieldset>
    <div class="container ">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">

                        <legend class="card-header text-center ">Registro de acudientes</legend>
                        <div class="card-body">
                         <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Nº identificación</label>
                               <input id="id_acudiente" name="id_acudiente" type="text" value="{{isset($acudiente->id_acudiente)?$acudiente->id_acudiente:old('id_acudiente')}}"
                                 placeholder="Cedula" class="form-control {{$errors->has('id_acudiente')?'is-invalid':''}}">
                               

                         {!! $errors->first('id_acudiente','<div class="invalid-feedback">:message</div>') !!}


                            </div>
                          </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Nombres</label>
                                <input id="nom_acudiente" name="nom_acudiente" type="text" value="{{isset($acudiente->nom_acudiente)?$acudiente->nom_acudiente:old('nom_acudiente')}}"
                                 placeholder="Nombres" class="form-control {{$errors->has('nom_acudiente')?'is-invalid':''}}">
                                
                                {!! $errors->first('nom_acudiente','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Dirección</label>
                                <input id="dir_acudiente" name="dir_acudiente" type="text" value="{{isset($acudiente->dir_acudiente)?$acudiente->dir_acudiente:old('dir_acudiente')}}"
                                 placeholder="Direccion" class="form-control {{$errors->has('dir_acudiente')?'is-invalid':''}}">
                               
                                {!! $errors->first('dir_acudiente','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                       <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Telefono</label>
                                <input id="tel_acudiente" name="tel_acudiente" type="text" value="{{isset($acudiente->tel_acudiente)?$acudiente->tel_acudiente:old('tel_acudiente')}}"placeholder="Telefono" class="form-control {{$errors->has('tel_acudiente')?'is-invalid':''}}"maxlength="20">
                                
                                {!! $errors->first('tel_acudiente','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                                  <label>Correo</label>
                                <input id="cor_acudiente" name="cor_acudiente" type="text" value="{{isset($acudiente->cor_acudiente)?$acudiente->cor_acudiente:old('cor_acudiente')}}"placeholder="Correo" class="form-control {{$errors->has('cor_acudiente')?'is-invalid':''}}">
                                
                                {!! $errors->first('cor_acudiente','<div class="invalid-feedback">:message</div>') !!}
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
