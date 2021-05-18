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
<form action="{{url('/matriculas')}}" class="form-horizontal col-md-12" method="post" id="matriculasenviar" enctype="multipart/form-data">
    {{csrf_field()}}
    @include('matriculas.form',['Modo'=>'crear'])
  </form>
  <script>
    $(document).ready(function(){
      $('#doc_documento').fileinput({
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
      $('#doc_foto').fileinput({
        language: 'es',
        allowedFileExtensions:['jpg'],
        maxFileSize: 500,
        showUpload:false,
        showClose:false,
        initialPreviewAsData:true,
        dropZoneEnabled:false,
        theme:"fa",
      });
    });
    $(document).ready(function(){
      $('#doc_paz_salvo').fileinput({
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
      $('#doc_boletin').fileinput({
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
      $('.form-control-chosen').chosen();
      $.ajax({
        type:'get',
        url:'{!!URL::to('listadonuevos')!!}',
        data:{},
        dataType:'json',
        success:function(data2){
          console.log(data2);
          var nuevos = '<option value="">Seleccione una opción</option>'
              for (var i=0; i<data2.length;i++){
                nuevos+='<option value="'+data2[i].id_estudiante+'">'+data2[i].nom_estudiante+'</option>';
             
              }
              $("#id_estudiante").html(nuevos);
              $('#id_estudiante').trigger("chosen:updated");
                       
        },
        error:function(){
          console.log('error');
        }
      });
    });
      $(".antiguos").on('change', function() {
        if( $('.antiguos').is(':checked') ) {
      $.ajax({
        type:'get',
        url:'{!!URL::to('listadoantiguos')!!}',
        data:{},
        dataType:'json',
        success:function(data){
          console.log(data);
          var antiguos = '<option value="">Seleccione una opción</option>'
              for (var i=0; i<data.length;i++){
                antiguos+='<option value="'+data[i].id_estudiante+'">'+data[i].nom_estudiante+'</option>';
              }
              $("#id_estudiante").html(antiguos);
              $('#id_estudiante').trigger("chosen:updated");
              
        },
        error:function(){
          console.log('error');
        }
      });
        }else{
          $.ajax({
        type:'get',
        url:'{!!URL::to('listadonuevos')!!}',
        data:{},
        dataType:'json',
        success:function(data){
          console.log(data);
          var nuevos = '<option value="">Seleccione una opción</option>'
              for (var i=0; i<data.length;i++){
                nuevos+='<option value="'+data[i].id_estudiante+'">'+data[i].nom_estudiante+'</option>';
              }
              $("#id_estudiante").html(nuevos);
              $('#id_estudiante').trigger("chosen:updated");
              
        },
        error:function(){
          console.log('error');
        }
      });
        }
      });
$('#id_estudiante').on('change', function(){
 if( $('.antiguos').prop('checked') ) {
 var id_estudiante = $("#id_estudiante option:selected").val();
$.ajax({
  type:'get',
  url:'{!!URL::to('ultimamatricula')!!}',
  data:{
    'id_estudiante':id_estudiante,
  },
  dataType:'json',
  success:function(data){
    console.log(data);
    $("#id_padre option").each(function(){
        if ($(this).val() == data.id_padre ){      
         $("#id_padre").val(data.id_padre);
         $('#id_padre').trigger("chosen:updated");
        }
     });
     $("#id_madre option").each(function(){
        if ($(this).val() == data.id_madre ){        
          $("#id_madre").val(data.id_madre);
         $('#id_madre').trigger("chosen:updated");
        }
     });
     $("#id_acudiente option").each(function(){
        if ($(this).val() == data.id_acudiente ){        
         $("#id_acudiente").val(data.id_acudiente);
         $('#id_acudiente').trigger("chosen:updated");
        }
     });

     
  },
  error:function(data){
    alertaerror();
  }
});
}
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
    document.getElementById('matriculasenviar').submit();
  }
})

});
  </script>
@endsection