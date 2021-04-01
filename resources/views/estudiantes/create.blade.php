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
<form action="{{url('/estudiantes')}}" class="form-horizontal col-md-12" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    @include('estudiantes.form',['Modo'=>'crear'])
  </form>
  <script>
     $(document).ready(function(){
      $('#doc_simat').fileinput({
        language: 'es',
        allowedFileExtensions:['pdf'],
        maxFileSize: 1000,
        showUpload:false,
        showClose:false,
        initialPreviewAsData:true,
        dropZoneEnabled:false,
        theme:"fa",
      });
    });
    $(document).ready(function(){
      $('#doc_vacunacion').fileinput({
        language: 'es',
        allowedFileExtensions:['pdf'],
        maxFileSize: 1000,
        showUpload:false,
        showClose:false,
        initialPreviewAsData:true,
        dropZoneEnabled:false,
        theme:"fa",
      });
    });
    $(document).ready(function(){
      $('#doc_salud').fileinput({
        language: 'es',
        allowedFileExtensions:['pdf'],
        maxFileSize: 1000,
        showUpload:false,
        showClose:false,
        initialPreviewAsData:true,
        dropZoneEnabled:false,
        theme:"fa",
      });
    });
    $(document).ready(function(){
      $('#doc_otros').fileinput({
        language: 'es',
        allowedFileExtensions:['pdf'],
        maxFileSize: 1000,
        showUpload:false,
        showClose:false,
        initialPreviewAsData:true,
        dropZoneEnabled:false,
        theme:"fa",
      });
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
      $('.form-control-chosen').chosen();
      
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
   
  </script>
@endsection