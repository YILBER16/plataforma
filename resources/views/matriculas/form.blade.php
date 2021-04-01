<fieldset>
    <div class="container ">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">

                        <legend class="card-header text-center ">@if($Modo=='crear')Registro de matriculas  @endif @if($Modo=='editar')Actualización de matriculas @endif</legend>
                        <div class="card-body">
                         <div class="row justify-content-center">
                          @if($Modo=='crear')
                          <div class="col-xs-2 col-sm-2 col-md-2 ">
                            <div class="form-group " >
                              <label>Antiguo</label>
                              <div class="custom-switch custom-switch-label-onoff "style="position: relative;left: -40px;">
                                <input class="custom-switch-input antiguos" id="ADD_ID_HERE" type="checkbox" >
                                <label class="custom-switch-btn" for="ADD_ID_HERE"></label>
                              </div> 
                              </div>
                            </div>
                            @endif
                            @if($Modo=='crear')<div class="col-xs-5 col-sm-5 col-md-5">@endif @if($Modo=='editar')<div class="col-xs-6 col-sm-6 col-md-6">@endif
                          <div class="form-group">
                                  <label>Estudiante</label>
                      <select id="id_estudiante" name="id_estudiante" @if($Modo=='crear') class="form-control form-control-chosen" @endif @if($Modo=='editar') class="form-control" readonly @endif>
                        <option value="">
                          @if($Modo=='editar'){{isset($matricula->estudiante->id_estudiante)?$matricula->estudiante->nom_estudiante:old('nom_estudiante')}}@endif
                        </option>
                       </select>

                         {!! $errors->first('id_estudiante','<div class="invalid-feedback">:message</div>') !!}


                            </div>
                          </div>
                          @if($Modo=='crear')<div class="col-xs-5 col-sm-5 col-md-5">@endif @if($Modo=='editar')<div class="col-xs-6 col-sm-6 col-md-6">@endif
                            <div class="form-group">
                                    <label>Grado</label>
                        <select id="id_grado" name="id_grado" class="form-control form-control-chosen">
                          <option value="{{isset($matricula->grado->id_grado)?$matricula->grado->id_grado:old('id_grado')}}">@if($Modo=='crear')Seleccione una opción
                            @endif
                            @if($Modo=='editar'){{isset($matricula->grado->id_grado)?$matricula->grado->nom_grado:old('id_grado')}}@endif
                          </option>
                          @foreach ($grados as $item)
                          <option value="{{$item['id_grado']}}"@if(old('id_grado') == $item->id_grado) selected="selected" @endif>{{$item['nom_grado']}}</option>
                           @endforeach
                            </select>
  
                           {!! $errors->first('id_grado','<div class="invalid-feedback">:message</div>') !!}
  
  
                              </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Padre</label>
                      <select id="id_padre" name="id_padre" class="form-control form-control-chosen">
                        <option value="{{isset($matricula->padre->id_padre)?$matricula->padre->id_padre:old('nom_padre')}}">@if($Modo=='crear')Seleccione una opción
                          @endif
                          @if($Modo=='editar'){{isset($matricula->padre->id_padre)?$matricula->padre->nom_padre:old('nom_padre')}}@endif
                        </option>
                        @foreach ($padres as $item)
                        <option value="{{$item['id_padre']}}"@if(old('id_padre') == $item->id_padre) selected="selected" @endif>{{$item['nom_padre']}}</option>
                         @endforeach
                          </select>

                         {!! $errors->first('id_padre','<div class="invalid-feedback">:message</div>') !!}


                            </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                    <label>Madre</label>
                                    <select id="id_madre" name="id_madre" class="form-control form-control-chosen">
                                      <option value="{{isset($matricula->madre->id_padre)?$matricula->madre->id_padre:old('nom_padre')}}">@if($Modo=='crear')Seleccione una opción
                                        @endif
                                        @if($Modo=='editar'){{isset($matricula->madre->id_padre)?$matricula->madre->nom_padre:old('nom_padre')}}@endif
                                      </option>
                                      @foreach ($madres as $item)
                                      <option value="{{$item['id_padre']}}"@if(old('id_madre') == $item->id_padre) selected="selected" @endif>{{$item['nom_padre']}}</option>
                                       @endforeach
                                        </select>
              
                                       {!! $errors->first('id_madre','<div class="invalid-feedback">:message</div>') !!}
  
  
                              </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Acudiente</label>
                                  <select id="id_acudiente" name="id_acudiente" class="form-control form-control-chosen">
                                    <option value="{{isset($matricula->acudiente->id_acudiente)?$matricula->acudiente->id_acudiente:old('nom_acudiente')}}">@if($Modo=='crear')Seleccione una opción
                                      @endif
                                      @if($Modo=='editar'){{isset($matricula->acudiente->id_acudiente)?$matricula->acudiente->nom_acudiente:old('nom_acudiente')}}@endif
                                    </option>
                                    @foreach ($acudientes as $item)
                                    <option value="{{$item['id_acudiente']}}"@if(old('id_acudiente') == $item->id_acudiente) selected="selected" @endif>{{$item['nom_acudiente']}}</option>
                                     @endforeach
                                      </select>
            
                                     {!! $errors->first('id_acudiente','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Valor matricula</label>
                                <input id="valor_matricula" name="valor_matricula" type="text" value="{{isset($matricula->valor_matricula)?$matricula->valor_matricula:old('valor_matricula')}}"placeholder="valor de matricula" class="form-control {{$errors->has('valor_matricula')?'is-invalid':''}}" maxlength="200">
                                
                                {!! $errors->first('valor_matricula','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                    <label>Valor sistema</label>
                                  <input id="sistema" name="sistema" type="number" @if($Modo=='editar')value="{{isset($matricula->sistema)?$matricula->sistema:old('sistema')}}" @endif @if($Modo=='crear') @endif placeholder="Valor sistema" class="form-control {{$errors->has('sistema')?'is-invalid':''}}">
                                  
                                  {!! $errors->first('sistema','<div class="invalid-feedback">:message</div>') !!}
                              </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                    <label>Descuento (%)</label>
                                  <input id="descuento_mensualidad" name="descuento_mensualidad" type="number" @if($Modo=='editar')value="{{isset($matricula->descuento_mensualidad)?$matricula->descuento_mensualidad:old('descuento_mensualidad')}}" @endif @if($Modo=='crear')value="0" @endif placeholder="Descuento de mensualidad" class="form-control {{$errors->has('descuento_matricula')?'is-invalid':''}}">
                                  
                                  {!! $errors->first('descuento_mensualidad','<div class="invalid-feedback">:message</div>') !!}
                              </div>
                          </div>
                        
                      </div>
                      
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                              <label class=" control-label">Foto</label>
                              
                                <input type="file" class="form-control" name="doc_foto" id="doc_foto" @if($Modo=='editar') data-initial-preview="{{isset($matricula->doc_foto) ? Storage::url("$matricula->doc_foto") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Foto+de+documento"}}" @endif accept="image/jpeg">
                                {!! $errors->first('doc_foto','<div class="invalid-feedback">:message</div>') !!}
                              </div>
                            </div>
                          <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                          <label class=" control-label">Documento de identidad</label>
                          
                            <input type="file" class="form-control" name="doc_documento" id="doc_documento" @if($Modo=='editar') data-initial-preview="{{isset($matricula->doc_documento) ? Storage::url("$matricula->doc_documento") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Documento+identidad"}}" @endif accept="application/pdf, .pdf">
                            {!! $errors->first('doc_documento','<div class="invalid-feedback">:message</div>') !!}
                          </div>
                        </div>
                        
                      </div>
                      <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <label class=" control-label">Paz y salvo</label>
                            
                              <input type="file" class="form-control" name="doc_paz_salvo" id="doc_paz_salvo" @if($Modo=='editar') data-initial-preview="{{isset($matricula->doc_paz_salvo) ? Storage::url("$matricula->doc_paz_salvo") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Paz+y+salvo"}}" @endif accept="application/pdf, .pdf">
                              {!! $errors->first('doc_paz_salvo','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                          </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="form-group">
                        <label class=" control-label">Ultimo boletin</label>
                        
                          <input type="file" class="form-control" name="doc_boletin" id="doc_boletin" @if($Modo=='editar') data-initial-preview="{{isset($matricula->doc_boletin) ? Storage::url("$matricula->doc_boletin") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Boletin"}}" @endif accept="application/pdf, .pdf">
                          {!! $errors->first('doc_boletin','<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                          <label class=" control-label">Otros documentos</label>
                          
                            <input type="file" class="form-control" name="doc_otros" id="doc_otros" @if($Modo=='editar') data-initial-preview="{{isset($matricula->doc_otros) ? Storage::url("$matricula->doc_otros") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Otros+documentos"}}" @endif accept="application/pdf, .pdf">
                            {!! $errors->first('doc_otros','<div class="invalid-feedback">:message</div>') !!}
                          </div>
                        </div>
                                         
                  </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <input id="guardar" type="submit" class="btn btn-primary btn-lg" 
                                 value="{{$Modo=='crear'?'Registrar':'Modificar'}}">      

                        <button type="button" class="btn btn-danger btn-lg" onclick="window.location='{{ url('/matriculas')}}'">Cancelar</button>
                          
                            </div>

                        </div>
                     
                        </div>
                        </div>
                        </div>
                        </div>
                         </div>
                       
</fieldset>
