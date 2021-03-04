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
<form action="{{url('/pagos/'.$pago->id_pago)}}" class="form-horizontal col-md-12" method="post" id="form">
    {{csrf_field()}}
    {{method_field('PATCH')}}
    @include('pagos.formpago',['Modo'=>'editar'])
  </form>


  <script>
    function enviar(){     
     
     swal({
     title:"Esta seguro de abonar?",
     text:"Recuerde que ya no podra modificar el abono",
     icon:"warning",
     buttons:true,
     dangerMode:true,
     })
     .then((willDelete)=>{
     if(willDelete){
      $('#form').submit();
      
         }
       }); 
     
     };
       </script>
@endsection