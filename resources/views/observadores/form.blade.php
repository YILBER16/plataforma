<fieldset>
    <div class="container ">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">

                        <legend class="card-header text-center ">Anotación al observador de {{$estudiante->nom_estudiante}}</legend>
                        <div class="card-body">
                          <div class="row">
                          <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                    <label>Identificacion del estudiante</label>
                                    <input type="text" id="id_estudiante" name="id_estudiante" class="form-control"value="{{isset($estudiante->id_estudiante)?$estudiante->id_estudiante:old('id_estudiante')}}" readonly>
                                  {!! $errors->first('id_estudiante','<div class="invalid-feedback">:message</div>') !!}
                              </div>
                          </div>
                          <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                    <label>Nombre del estudiante</label>
                                    <input type="text" id="nom_estudiante" class="form-control"value="{{isset($estudiante->nom_estudiante)?$estudiante->nom_estudiante:old('nom_estudiante')}}"readonly>
                                  {!! $errors->first('nom_estudiante','<div class="invalid-feedback">:message</div>') !!}
                              </div>
                          </div>
                          <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                    <label>Grado del estudiante</label>
                                    <input type="text" id="id_grado" class="form-control"value="{{isset($estudiante->matricula->grado->nom_grado)?$estudiante->matricula->grado->nom_grado:old('nom_grado')}}"readonly>
                                  {!! $errors->first('id_grado','<div class="invalid-feedback">:message</div>') !!}
                              </div>
                          </div>
                          </div>  
                          <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                              <div class="form-group">
                                      <label>Nombre del acudiente</label>
                                      <input type="text" id="nom_acudiente" class="form-control"value="{{isset($estudiante->matricula->acudiente->nom_acudiente)?$estudiante->matricula->acudiente->nom_acudiente:old('nom_acudiente')}}" readonly>
                                    {!! $errors->first('nom_acudiente','<div class="invalid-feedback">:message</div>') !!}
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                              <div class="form-group">
                                      <label>Contacto del acudiente</label>
                                      <input type="text" id="tel_acudiente" class="form-control"value="{{isset($estudiante->matricula->acudiente->tel_acudiente)?$estudiante->matricula->acudiente->tel_acudiente:old('tel_acudiente')}}"readonly>
                                    {!! $errors->first('tel_acudiente','<div class="invalid-feedback">:message</div>') !!}
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                              <div class="form-group">
                                      <label>Dirección del acudiente</label>
                                      <input type="text" id="dir_acudiente" class="form-control"value="{{isset($estudiante->matricula->acudiente->dir_acudiente)?$estudiante->matricula->acudiente->dir_acudiente:old('dir_acudiente')}}"readonly>
                                    {!! $errors->first('dir_acudiente','<div class="invalid-feedback">:message</div>') !!}
                                </div>
                            </div>
                            </div> 
                            <div class="row">
                              <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                                      <label>Categoria de la falta</label>
                                      <select id="clase_falta" name="clase_falta" class="form-control ">
                                        <option value="">Seleccione una opción</option>
                                        <option value="Academica">Academica</option>
                                        <option value="Disciplinaria">Disciplinaria</option>
                                          </select>
                
                                         {!! $errors->first('clase_falta','<div class="invalid-feedback">:message</div>') !!}
                                </div>
                            </div>
                           
                            </div>
                            <div class="row" id="divdisciplinaria" style="display: none;">
                              <div class="col-xs-6 col-sm-6 col-md-6">
                              <div class="form-group">
                                      <label>Clase de falta</label>
                                      <select id="categoria_falta" name="categoria_falta" class="form-control ">
                                        <option value="">Seleccione una opción</option>
                                        @foreach ($categoriaitemobservadores as $item)
                                        <option value="{{$item['id']}}">{{$item['categoria_falta']}}</option>
                                         @endforeach
                                          </select>
                
                                         {!! $errors->first('categoria_falta','<div class="invalid-feedback">:message</div>') !!}
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                              <div class="form-group">
                                      <label>tipo de falta</label>
                                      <select id="tipo_falta" name="tipo_falta" class="form-control ">
                                          </select>
                
                                         {!! $errors->first('tipo_falta','<div class="invalid-feedback">:message</div>') !!}
                                </div>
                            </div>
                            </div>
                            <div class="row">
                              <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                                      <label>Descripción de la falta</label>
                                      <textarea id="descripcion_falta" name="descripcion_falta" rows="10" cols="40" class="form-control"></textarea>
                                </div>
                            </div>
                           
                            </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                              <button type="button" class="btn btn-primary btn-lg" onclick="enviar();">Registrar</button>  

                        <button type="button" class="btn btn-danger btn-lg" onclick="window.location='{{ url('/observadores')}}'">Cancelar</button>
                          
                            </div>

                        </div>
                     
                        </div>
                        </div>
                        </div>
                        </div>
                         </div>
                       
</fieldset>
