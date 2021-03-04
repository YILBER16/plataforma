@extends('layouts.layout')

@section('script') 

<style type="text/css">
  @media print { 
      .visible-print {
          display: inherit !important;
      }

      .hidden-print {
          display: none !important;
      }
  }
</style>
<script type="text/javascript">
  $('.printBtn').on('click', function (){
    window.print();
  });
</script>
<script>

    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
       var calendar = new FullCalendar.Calendar(calendarEl, {
         
      
        schedulerLicenseKey: 'CC-Attribution-NonCommercial-NoDerivatives',
        
        
        timeZone: 'local',
       
        customButtons: {
    imprimir: {
      text: "Imprimir",
      click: function() {
        window.print();
      }
    }
  },
    headerToolbar: {
      left: 'prev,next today imprimir',
      center: 'title',
      right: 'dayGridMonth,listMonth'
    },

    droppable: true,
    themeSystem: 'bootstrap',
       

  
    dateClick:function(info){
      if(info.dateStr >='{{$fecha}}'){
      limpiarformulario();
   
      $('#txtfechainicial').val(info.dateStr+ 'T00:00');
      $("#btnagregar").prop("disabled",false);
      $("#btnmodificar").prop("disabled",true);
      $("#btnborrar").prop("disabled",true);
      $('#calendarioadd').modal('toggle');
      console.log('{{$fecha}}','es mayor');
      console.log(info.dateStr);
    }else
    {
      console.log(info.dateStr+' ' + 'T00:00' ,  '{{$fecha}}');
      swal("Ocurrio un error!", "No se puede crear eventos en el pasado", "error");
    }
    },
    eventClick:function(info){
      
      var start = info.event.start;
    var end = info.event.end || start;
  
      $("#btnagregar").prop("disabled",true);
      $("#btnmodificar").prop("disabled",false);
      $("#btnborrar").prop("disabled",false);

        mes=(info.event.start.getMonth()+1);  
        dia=(info.event.start.getDate());    
        anio=(info.event.start.getFullYear()); 

        mes2=(end.getMonth()+1);  
        dia2=(end.getDate());    
        anio2=(end.getFullYear()); 
        minutos= info.event.start.getMinutes();
        minutos2= info.event.end.getMinutes();
       
        
        horainicial=(info.event.start.getHours());   
        horafinal=(end.getHours()); 

        horainicial=(horainicial<10)?"0"+horainicial:horainicial;
        horafinal=(horafinal<10)?"0"+horafinal:horafinal;
        minutos=(minutos<10)?"0"+minutos:minutos;
        minutos2=(minutos2<10)?"0"+minutos2:minutos2;

        mes=(mes<10)?"0"+mes:mes;
        dia=(dia<10)?"0"+dia:dia;
        mes2=(mes2<10)?"0"+mes2:mes2;
        dia2=(dia2<10)?"0"+dia2:dia2;

      console.log(end);
        $('#txtid').val(info.event.id);
        $('#txttitulo').val(info.event.title);
        $('#txtfechainicial').val(anio+"-"+mes+"-"+dia+"T"+horainicial+":"+minutos);
        console.log(anio+"-"+mes+"-"+dia+"T"+horainicial+":"+minutos);
        $('#txtfechafinal').val(anio2+"-"+mes2+"-"+dia2+"T"+horafinal+":"+minutos2);
        $('#txtcolor').val(info.event.borderColor);
        $('#txtdescripcion').val(info.event.extendedProps.descripcion);
        $('#calendarioadd').modal();
        console.log(info);
    },
    events:"{{url('/calendario/show')}}",
    editable: true,
    initialDate: '{{$fecha}}',
        
    initialView:'dayGridMonth',
      });
      calendar.setOption('locale','Es');
      calendar.render();

      $('#btnagregar').click(function(){
        objEvento=recolectarDatos("POST");
        enviarinformacion('',objEvento);
      });
      $('#btnborrar').click(function(){
        objEvento=recolectarDatos("DELETE");
        enviarinformacion('/'+$('#txtid').val(),objEvento);
      });
      $('#btnmodificar').click(function(){
        objEvento=recolectarDatos("PATCH");
        enviarinformacion('/'+$('#txtid').val(),objEvento);
      });
      function recolectarDatos(method){
        nuevoEvento={
          id:$('#txtid').val(),
          title:$('#txttitulo').val(),
          descripcion:$('#txtdescripcion').val(),
          color:$('#txtcolor').val(),
          textcolor:'#FFFFFF',
          start:$('#txtfechainicial').val(),
          end:$('#txtfechafinal').val(),
          '_token':'{{ csrf_token() }}',
          '_method':method
        }
       return (nuevoEvento);
      }
      function enviarinformacion(accion, objEvento){
        $.ajax({
          type:"POST",
          url:"{{url('/calendario')}}"+accion,
          data:objEvento,
          success:function(msg){
            console.log(msg);
            $('#calendarioadd').modal('toggle');
            calendar.refetchEvents();
            swal("Excelente!", "Evento registrado!", "success");
          },
          error:function(){
            swal("Ocurrio un error!", "Verifica los datos!", "error");
          }
        });
      }
      function limpiarformulario(){
        $('#txtid').val("");
        $('#txttitulo').val("");
        $('#txtfechainicial').val("");
        $('#txtfechafinal').val("");
        $('#txtcolor').val("");
        $('#txtdescripcion').val("");
   
      }
    });

  </script>

@endsection


@section('contenido') 

@if(Session::has('Mensaje'))
<div class="alert alert-success content col-sm-12 text-center "role="alert">
{{ Session::get('Mensaje')}}
</div>


@endif

<div class="d-flex justify-content-center"><h2>Calendario academico</h2></div>

<div id='calendar'></div>





@endsection