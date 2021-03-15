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
<form id="form" action="{{url('/observadores')}}" class="form-horizontal col-md-12" method="post" >
    {{csrf_field()}}
    @include('observadores.form',['Modo'=>'editar'])
  </form>
  <script>
    $(document).ready(function(){
     
      $('#clase_falta').change(function() {
        var valor= $(this).val();
        var div = document.getElementById("divdisciplinaria");
        if(valor=="Disciplinaria"){
          console.log('si');
          
          div.style.display = "";

    }else{
      div.style.display = "none";
      $("#categoria_falta")[0].selectedIndex = 0;
      $("#tipo_falta")[0].selectedIndex = 0;
    }
  });
});
     $(document).ready(function() {
    $('#categoria_falta').change(function() {
      var categoria =$(this).val();
      console.log(categoria);
      $.get('/faltas/'+categoria, function(data){
  //esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
            var tipo_falta = '<option value="">Seleccione una opción</option>'
              for (var i=0; i<data.length;i++)
              tipo_falta+='<option value="'+data[i].id+'">'+data[i].tipo_falta+'</option>';
  
               $("#tipo_falta").html(tipo_falta);
  
        });
    });
    });
  </script>
    <script>
      function enviar(){     
       
       swal({
       title:"Esta seguro de registrar la observación?",
       text:"Recuerde que ya no podra modificar los datos",
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