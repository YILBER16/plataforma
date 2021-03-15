@extends('layouts.layout')

@section('contenido') 
@if(count($errors)>0)
                <div class="alert alert-danger content" role="alert">
                  <h4>Corrija los siguientes errores:</h4>
                  <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                    </ul>
                </div>
                @endif
<form action="{{url('/matriculas/'.$matricula->id_matricula)}}" class="form-horizontal col-md-12" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    {{method_field('PATCH')}}
    @include('matriculas.form',['Modo'=>'editar'])
  </form>
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
    $(document).ready(function(){
      $('.form-control-chosen').chosen();
    });
  </script>
@endsection