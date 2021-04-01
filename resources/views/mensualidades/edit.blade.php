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
<form action="{{url('/mensualidades/'.$mensualidades->id_mensualidad)}}" class="form-horizontal col-md-12" method="post" id="mensualidadenviar" enctype="multipart/form-data">
    {{csrf_field()}}
    {{method_field('PATCH')}}
    @include('mensualidades.form',['Modo'=>'editar'])
  </form>
  <script>
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
      document.getElementById('mensualidadenviar').submit();
    }
  })
  
  });
  </script>
@endsection