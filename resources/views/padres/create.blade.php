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
<form action="{{url('/padres')}}" class="form-horizontal col-md-12" method="post" id="padresenviar" enctype="multipart/form-data">
    {{csrf_field()}}
    @include('padres.form',['Modo'=>'crear'])
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
    document.getElementById('padresenviar').submit();
  }
})

});
  </script>
@endsection