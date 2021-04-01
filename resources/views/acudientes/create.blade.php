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
<form  action="{{url('/acudientes')}}" class="form-horizontal col-md-12" id="acudienteenviar" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    @include('acudientes.form',['Modo'=>'crear'])
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
      $('.form-control-chosen').chosen();
      
    });
    $(document).on('click','#guardar', function(evt){
    evt.preventDefault();  
   
    swal({
  title:"Esta seguro?",
  text:"Recuerde que se eliminara permanentemente el registro",
  icon:"warning",
  buttons:true,
  dangerMode:true,

})


.then((willDelete)=>{

  if(willDelete){
    document.getElementById('acudienteenviar').submit();

}
});
});
  </script>
@endsection