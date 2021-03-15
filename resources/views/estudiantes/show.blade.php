@extends('layouts.layout')

@section('contenido') 
<fieldset>
    <div class="container ">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">

                        <legend class="card-header text-center ">Datos personales de {{$estudiante->nom_estudiante}}</legend>
                        <div class="card-body">
                         <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Nº identificación</label>
                               <input id="id_estudiante" name="id_estudiante" type="text" value="{{isset($estudiante->id_estudiante)?$estudiante->id_estudiante:old('id_estudiante')}}"
                                 class="form-control " onFocus="this.blur()">
                               

                    


                            </div>
                          </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Nombres</label>
                                <input id="nom_estudiante" name="nom_estudiante" type="text" value="{{isset($estudiante->nom_estudiante)?$estudiante->nom_estudiante:old('nom_estudiante')}}"
                                  class="form-control " onFocus="this.blur()">
                                
                              
                            </div>
                        </div>
                        </div>
                     
                      <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                                <label>Dirección</label>
                              <input id="dir_estudiante" name="dir_estudiante" type="text" value="{{isset($estudiante->dir_estudiante)?$estudiante->dir_estudiante:old('dir_estudiante')}}"
                               placeholder="Direccion" class="form-control "onFocus="this.blur()">
                             
                        
                          </div>
                      </div>
                     <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                                <label>Telefono</label>
                              <input id="tel_estudiante" name="tel_estudiante" type="text" value="{{isset($estudiante->tel_estudiante)?$estudiante->tel_estudiante:old('tel_estudiante')}}"placeholder="Telefono" class="form-control "onFocus="this.blur()">
                              
                             
                          </div>
                      </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                          <label>Sexo</label>
                          <input id="sexo" name="sexo" type="text" value="{{isset($estudiante->sexo)?$estudiante->sexo:old('sexo')}}"class="form-control "onFocus="this.blur()">
                            </div>
                      </div>
                     <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                          <label>Correo</label>
                          <input id="sexo" name="sexo" type="text" value="{{isset($estudiante->cor_estudiante)?$estudiante->cor_estudiante:old('cor_estudiante')}}"class="form-control "onFocus="this.blur()">
                          
                          </div>
                      </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4">
                          <div class="form-group">
                            <label>Pais</label>
                            <input id="id_pais" name="id_pais" type="text" value="{{isset($estudiante->pais->id)?$estudiante->pais->name:old('name')}}"class="form-control "onFocus="this.blur()">
                              </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                          <div class="form-group">
                            <label>Departamento</label>
                            <input id="id_departamento" name="id_departamento" type="text" value="{{isset($estudiante->departamento->id)?$estudiante->departamento->name:old('name')}}"class="form-control "onFocus="this.blur()">
                              </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                          <div class="form-group">
                            <label>Ciudad</label>
                            <input id="id_ciudad" name="id_ciudad" type="text" value="{{isset($estudiante->ciudad->id)?$estudiante->ciudad->name:old('name')}}"class="form-control "onFocus="this.blur()">
                              </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <label>Fecha de nacimiento</label>
                              <input id="fecha_nacimiento" name="fecha_nacimiento" type="text"value="{{isset($estudiante->fecha_nacimiento)?$estudiante->fecha_nacimiento:old('fecha_nacimiento')}}"  class="form-control" onFocus="this.blur()">
                              
                          </div>
                      </div>


                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                          <label>Fecha de expedicion</label>
                            <input id="fecha_expedicion" name="fecha_expedicion" type="text"value="{{isset($estudiante->fecha_expedicion)?$estudiante->fecha_expedicion:old('fecha_expedicion')}}"  class="form-control"onFocus="this.blur()">
                            
                        </div>
                    </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                          <label class=" control-label">Certificacion simat</label>
                          
                            <input type="file" class="form-control" name="doc_simat" id="doc_simat" data-initial-preview="{{isset($estudiante->doc_simat) ? Storage::url("$estudiante->doc_simat") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Foto+de+documento"}}" accept="application/pdf, .pdf">
                            {!! $errors->first('doc_simat','<div class="invalid-feedback">:message</div>') !!}
                          </div>
                        </div>
                      <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <label class=" control-label">Carnet de vacunación</label>
                      
                        <input type="file" class="form-control" name="doc_vacunacion" id="doc_vacunacion"  data-initial-preview="{{isset($estudiante->doc_vacunacion) ? Storage::url("$estudiante->doc_vacunacion") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Documento+identidad"}}" accept="application/pdf, .pdf">
                        {!! $errors->first('doc_vacunacion','<div class="invalid-feedback">:message</div>') !!}
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="form-group">
                        <label class=" control-label">Carnet de salud</label>
                        
                          <input type="file" class="form-control" name="doc_salud" id="doc_salud" data-initial-preview="{{isset($estudiante->doc_salud) ? Storage::url("$estudiante->doc_salud") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Foto+de+documento"}}" accept="application/pdf, .pdf">
                          {!! $errors->first('doc_salud','<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <label class=" control-label">Otros documentos</label>
                    
                      <input type="file" class="form-control" name="doc_otros" id="doc_otros"  data-initial-preview="{{isset($estudiante->doc_otros) ? Storage::url("$estudiante->doc_otros") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Documento+identidad"}}" accept="application/pdf, .pdf">
                      {!! $errors->first('doc_otros','<div class="invalid-feedback">:message</div>') !!}
                    </div>
                  </div>
                  
                </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                               

                        <button type="button" class="btn btn-danger btn-lg" onclick="window.location='{{ url('/estudiantes')}}'">Volver</button>
                          
                            </div>

                        </div>
                     
                        </div>
                        </div>
                        </div>
                        </div>
                         </div>
                       
</fieldset>
<script>
  $(document).ready(function(){
   $('#doc_otros').fileinput({
       language: 'es',
       pdfRendererUrl: 'https://plugins.krajee.com/pdfjs/web/viewer.html',
       allowedFileExtensions:['pdf'],
       maxFileSize: 1000,
       initialPreview: [
       'https://plugins.krajee.com/samples/sample-2.pdf'
   ],
   initialPreviewConfig: [
       {type: 'pdf', size: 3072}
   ],
       showUpload:false,
       showClose:false,
       initialPreviewAsData:true,

       dropZoneEnabled:false,
       theme:"fa",
     });
     $('#doc_simat').fileinput({
       language: 'es',
       pdfRendererUrl: 'https://plugins.krajee.com/pdfjs/web/viewer.html',
       allowedFileExtensions:['pdf'],
       maxFileSize: 1000,
       initialPreview: [
       'https://plugins.krajee.com/samples/sample-2.pdf'
   ],
   initialPreviewConfig: [
       {type: 'pdf', size: 3072}
   ],
       showUpload:false,
       showClose:false,
       initialPreviewAsData:true,

       dropZoneEnabled:false,
       theme:"fa",
     });
     $('#doc_vacunacion').fileinput({
       language: 'es',
       pdfRendererUrl: 'https://plugins.krajee.com/pdfjs/web/viewer.html',
       allowedFileExtensions:['pdf'],
       maxFileSize: 1000,
       initialPreview: [
       'https://plugins.krajee.com/samples/sample-2.pdf'
   ],
   initialPreviewConfig: [
       {type: 'pdf', size: 3072}
   ],
       showUpload:false,
       showClose:false,
       initialPreviewAsData:true,

       dropZoneEnabled:false,
       theme:"fa",
     });
     $('#doc_salud').fileinput({
       language: 'es',
       pdfRendererUrl: 'https://plugins.krajee.com/pdfjs/web/viewer.html',
       allowedFileExtensions:['pdf'],
       maxFileSize: 1000,
       initialPreview: [
       'https://plugins.krajee.com/samples/sample-2.pdf'
   ],
   initialPreviewConfig: [
       {type: 'pdf', size: 3072}
   ],
       showUpload:false,
       showClose:false,
       initialPreviewAsData:true,

       dropZoneEnabled:false,
       theme:"fa",
     });
    });
</script>
@endsection