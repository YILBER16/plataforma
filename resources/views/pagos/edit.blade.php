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
        $(document).on('click','#guardar', function(evt){
          evt.preventDefault();  
          Swal.fire({
        title: 'Esta seguro?',
        text: "Recuerde que ya no podra modificar el abono",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si'
      }).then((result) => {
        if (result.isConfirmed) {
          $('#form').submit();
        }
      })
      
      });
      </script>
@endsection