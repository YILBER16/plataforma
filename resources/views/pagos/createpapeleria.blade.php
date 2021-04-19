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
<form action="{{url('/pagospapeleria')}}" class="form-horizontal col-md-12" method="post" id="pagosenviar" enctype="multipart/form-data">
    {{csrf_field()}}
    @include('pagos.formpapeleria',['Modo'=>'crear'])

  </form>
<script>
  $(document).on('click','#guardar', function(evt){
    evt.preventDefault();  
    Swal.fire({
  title: 'Esta seguro?',
  text: "Recuerde que no podra deshacer la facturación!",
  icon: 'question',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si'
}).then((result) => {
  if (result.isConfirmed) {
    document.getElementById('pagosenviar').submit();
  }
})

});
</script>
@endsection