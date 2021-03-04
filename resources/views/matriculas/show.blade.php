@extends('layouts.layout')

@section('contenido') 
<fieldset>
  <fieldset>
    <div class="container ">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">

                        <legend class="card-header text-center ">Datos matricula {{$matricula->estudiante->nom_estudiante }}</legend>
                        <div class="card-body">
                         <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Estudiante</label>
                                  <input id="id_estudiante" name="id_estudiante" type="text" value="{{isset($matricula->estudiante->id_estudiante)?$matricula->estudiante->nom_estudiante:old('nom_estudiante')}}" class="form-control ">


                         {!! $errors->first('id_estudiante','<div class="invalid-feedback">:message</div>') !!}


                            </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                    <label>Grado</label>
                                    <input id="id_grado" name="id_grado" type="text" value="{{isset($matricula->grado->id_grado)?$matricula->grado->nom_grado:old('nom_grado')}}" class="form-control ">

  
                           {!! $errors->first('id_grado','<div class="invalid-feedback">:message</div>') !!}
  
  
                              </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Padre</label>
                                  <input id="id_padre" name="id_padre" type="text" value="{{isset($matricula->padre->id_padre)?$matricula->padre->nom_padre:old('nom_padre')}}" class="form-control ">


                         {!! $errors->first('id_padre','<div class="invalid-feedback">:message</div>') !!}


                            </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                    <label>Madre</label>
                                    <input id="id_madre" name="id_madre" type="text" value="{{isset($matricula->madre->id_padre)?$matricula->madre->nom_padre:old('nom_padre')}}" class="form-control ">

              
                                       {!! $errors->first('id_madre','<div class="invalid-feedback">:message</div>') !!}
  
  
                              </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Acudiente</label>
                                  <input id="id_acudiente" name="id_acudiente" type="text" value="{{isset($matricula->acudiente->nom_acudiente)?$matricula->acudiente->nom_acudiente:old('nom_acudiente')}}" class="form-control ">

            
                                     {!! $errors->first('id_acudiente','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Valor matricula</label>
                                <input id="valor_matricula" name="valor_matricula" type="text" value="{{isset($matricula->valor_matricula)?$matricula->valor_matricula:old('valor_matricula')}}"placeholder="valor de matricula" class="form-control {{$errors->has('valor_matricula')?'is-invalid':''}}" maxlength="65">
                                
                                {!! $errors->first('valor_matricula','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                              <label class=" control-label">Foto</label>
                              
                                <input type="file" class="form-control" name="doc_foto" id="doc_foto" data-initial-preview="{{isset($matricula->doc_foto) ? Storage::url("$matricula->doc_foto") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Foto+de+documento"}}" accept="image/jpeg">
                                {!! $errors->first('doc_foto','<div class="invalid-feedback">:message</div>') !!}
                              </div>
                            </div>
                          <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                          <label class=" control-label">Documento de identidad</label>
                          
                            <input type="file" class="form-control" name="doc_documento" id="doc_documento"  data-initial-preview="{{isset($matricula->doc_documento) ? Storage::url("$matricula->doc_documento") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Documento+identidad"}}" accept="application/pdf, .pdf">
                            {!! $errors->first('doc_documento','<div class="invalid-feedback">:message</div>') !!}
                          </div>
                        </div>
                        
                      </div>
                      <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <label class=" control-label">Paz y salvo</label>
                            
                              <input type="file" class="form-control" name="doc_paz_salvo" id="doc_paz_salvo" data-initial-preview="{{isset($matricula->doc_paz_salvo) ? Storage::url("$matricula->doc_paz_salvo") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Paz+y+salvo"}}"  accept="application/pdf, .pdf">
                              {!! $errors->first('doc_paz_salvo','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                          </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="form-group">
                        <label class=" control-label">Ultimo boletin</label>
                        
                          <input type="file" class="form-control" name="doc_boletin" id="doc_boletin" data-initial-preview="{{isset($matricula->doc_boletin) ? Storage::url("$matricula->doc_boletin") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Boletin"}}" accept="application/pdf, .pdf">
                          {!! $errors->first('doc_boletin','<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                          <label class=" control-label">Otros documentos</label>
                          
                            <input type="file" class="form-control" name="doc_otros" id="doc_otros"  data-initial-preview="{{isset($matricula->doc_otros) ? Storage::url("$matricula->doc_otros") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Otros+documentos"}}" accept="application/pdf, .pdf">
                            {!! $errors->first('doc_otros','<div class="invalid-feedback">:message</div>') !!}
                          </div>
                        </div>
                                         
                  </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                               
                        <button type="button" class="btn btn-danger btn-lg" onclick="window.location='{{ url('/matriculas')}}'">Cancelar</button>
                          
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
     $('#doc_foto').fileinput({
      language: 'es',
        allowedFileExtensions:['jpg'],
        maxFileSize: 1000,
        showUpload:false,
        showClose:false,
        initialPreviewAsData:true,
        dropZoneEnabled:false,
        theme:"fa",
     });

     $('#doc_documento').fileinput({
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

     $('#doc_paz_salvo').fileinput({
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
     $('#doc_boletin').fileinput({
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
   });
 </script>
@endsection