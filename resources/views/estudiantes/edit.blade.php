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
<form action="{{url('/estudiantes/'.$estudiante->id_estudiante)}}" class="form-horizontal col-md-12" method="post" id="estudianteenviar" enctype="multipart/form-data">
    {{csrf_field()}}
    {{method_field('PATCH')}}
    @include('estudiantes.form',['Modo'=>'editar'])
  </form>
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
   <script>
     $(document).ready(function(){
      $('.form-control-chosen').chosen();
      
    });
    $(document).ready(function(){
        $("#id_pais").change(function(){
          var pais = $(this).val();
          $.get('/bydepartamentos/'+pais, function(data){
    //esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
            console.log(data);
              var departamento_select = '<option value="">Seleccione una opción</option>'
                for (var i=0; i<data.length;i++)
                  departamento_select+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
    
                $("#id_departamento").html(departamento_select);
                $('#id_departamento').trigger("chosen:updated");
    
          });
        });
      });
  
      $(document).ready(function(){
        $("#id_departamento").change(function(){
          var departamento = $(this).val();
          $.get('/byciudades/'+departamento, function(data){
    //esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
            console.log(data);
              var ciudad_select = '<option value="">Seleccione una opción</option>'
                for (var i=0; i<data.length;i++)
                  ciudad_select+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
    
                $("#id_ciudad").html(ciudad_select);
                $('#id_ciudad').trigger("chosen:updated");
    
          });
        });
      });
      $(document).on('click','#guardar', function(evt){
    evt.preventDefault();  
    Swal.fire({
  title: 'Esta seguro?',
  text: "Recuerde diligenciar todos los campos!",
  icon: 'question',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si'
}).then((result) => {
  if (result.isConfirmed) {
    document.getElementById('estudianteenviar').submit();
  }
})

});
    </script>
@endsection