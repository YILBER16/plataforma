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
<form action="{{url('/egresosygastos')}}" class="form-horizontal col-md-12" method="post" id="salidaenviar" enctype="multipart/form-data">
    {{csrf_field()}}
    @include('egresosygastos.form',['Modo'=>'crear'])

  </form>
<script>
  $(document).ready(function(){
      $('.form-control-chosen').chosen();
      
    });
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
    document.getElementById('salidaenviar').submit();
  }
})

});


$(document).ready(function(){
  $("#clase_salida").change(function(){
        var clase_salida = $(this).val();
        console.log(clase_salida);
       
  //esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
          if (clase_salida=='Egresos') {
           var concepto_salida = '<option value="">Seleccione una opción</option>'
           concepto_salida+='<option value="Docentes">Docentes</option><option value="Directivos">Directivos</option>';
           var tipo_salida = '<option value="">Seleccione una opción</option>'
              tipo_salida+='';
              var cc_pagado = '<option value="">Seleccione una opción</option>'
              cc_pagado+='';
              $("#concepto_salida").html(concepto_salida);
              $('#concepto_salida').trigger("chosen:updated");
              $("#tipo_salida").html(tipo_salida);
              $('#tipo_salida').trigger("chosen:updated");
              $("#cc_pagado").html(cc_pagado);
              $("#nom_pagado").val("");
              $('#cc_pagado').prop('disabled', false).trigger("chosen:updated");
            }
            
            if (clase_salida=='Gastos'){
              var concepto_salida = '<option value="">Seleccione una opción</option>'
              concepto_salida+='<option value="Otros">Otros</option>';
              var tipo_salida = '<option value="">Seleccione una opción</option>'
              tipo_salida+='';
              var cc_pagado = '<option value="">Seleccione una opción</option>'
              cc_pagado+='';

              
              $("#concepto_salida").html(concepto_salida);
              $('#concepto_salida').trigger("chosen:updated");
              $("#tipo_salida").html(tipo_salida);
              $('#tipo_salida').trigger("chosen:updated");
              $("#cc_pagado").html(cc_pagado);
              $("#nom_pagado").val("");
              $('#cc_pagado').prop('disabled', true).trigger("chosen:updated");
              
            }
            
            if (clase_salida==''){
              var concepto_salida = '<option value="">Seleccione una opción</option>'
              concepto_salida+='';
              var tipo_salida = '<option value="">Seleccione una opción</option>'
              tipo_salida+='';
              var cc_pagado = '<option value="">Seleccione una opción</option>'
              cc_pagado+='';
              $("#concepto_salida").html(concepto_salida);
              $('#concepto_salida').trigger("chosen:updated");
              $("#tipo_salida").html(tipo_salida);
              $('#tipo_salida').trigger("chosen:updated");
              $("#cc_pagado").html(cc_pagado);
              $('#cc_pagado').trigger("chosen:updated");
              $('#nom_pagado').val("");
            }
         
  
    
      });

      $("#concepto_salida").change(function(){
        var concepto_salida = $(this).val();
        console.log(concepto_salida);
       
  //esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
          if (concepto_salida=='Docentes') {
           var tipo_salida = '<option value="">Seleccione una opción</option>'
            tipo_salida+='<option value="Nomina mensual">Nomina</option><option value="primas de servicios">Primas de servicios</option><option value="Vacaciones">Vacaciones</option><option value="Otros">Otros</option>';

              $("#tipo_salida").html(tipo_salida);
              $('#tipo_salida').trigger("chosen:updated");

              $.get('/ccdocente/', function(data){
  //esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
          console.log(data);
            var nom_docente = '<option value="">Seleccione una opción</option>'
              for (var i=0; i<data.length;i++)
              nom_docente+='<option value="'+data[i].id_docente+'">'+data[i].id_docente+'</option>';
  
              $("#cc_pagado").html(nom_docente);
              $('#cc_pagado').trigger("chosen:updated");
  
        });
            }
            
            
            if (concepto_salida=='Directivos') {
           var tipo_salida = '<option value="">Seleccione una opción</option>'
            tipo_salida+='<option value="Nomina mensual">Nomina</option><option value="primas de servicios">Primas de servicios</option><option value="Vacaciones">Vacaciones</option><option value="Otros">Otros</option>';

              $("#tipo_salida").html(tipo_salida);
              $('#tipo_salida').trigger("chosen:updated");

              $.get('/ccdirectivo/', function(data){
  //esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
          console.log(data);
            var nom_directivo = '<option value="">Seleccione una opción</option>'
              for (var i=0; i<data.length;i++)
              nom_directivo+='<option value="'+data[i].id_directivo+'">'+data[i].id_directivo+'</option>';
  
              $("#cc_pagado").html(nom_directivo);
              $('#cc_pagado').trigger("chosen:updated");
  
        });
            }
            if (concepto_salida=='Otros'){
              var tipo_salida = '<option value="">Seleccione una opción</option>'
            tipo_salida+='<option value="Papeleria">Papeleria</option><option value="Utiles de aseo">Utiles de aseos</option><option value="Internet">Internet</option><option value="Luz electrica">Luz electrica</option><option value="Mantenimientos">Mantenimientos</option><option value="Otros">Otros</option>';
  
              $("#tipo_salida").html(tipo_salida);
              $('#tipo_salida').trigger("chosen:updated");
            }
         
  
    
      });
      $('#cc_pagado').on('change', function(){

//console.log("Si");
      var id_docente=$(this).val();
      var nom_docente=$(this).val();
      //console.log(Id_produccion);
      $.ajax({
        type:'get',
        url:'{!!URL::to('nomdocente')!!}',
        data:{
          'id_docente':id_docente,
          'nom_docente':nom_docente,
        },
        dataType:'json',
        success:function(data){
          console.log('success');
          console.log(data.id_docente);
          console.log(data.nom_docente);
          //a.find('#lote').val(data.N_lote);
          $('#nom_pagado').val(data.nom_docente);
        },
        error:function(){

        }
      });
      });
         
    });
</script>
@endsection