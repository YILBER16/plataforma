@extends('layouts.layout')


@section('contenido') 
@if(Session::has('Mensaje'))
<div class="alert alert-success content col-sm-12 text-center "role="alert">
{{ Session::get('Mensaje')}}
</div>


@endif

<meta name="csrf-token" content="{{ csrf_token() }}">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#observadormodal"><i class="far fa-sticky-note"></i>
    Registrar item
</button>
@section('cuerpo_modal_itemobservador')
<form id="itemobservador" class="form-horizontal col-md-12" method="post">
    {{csrf_field()}}
    @include('itemobservadores.form')
    @section('pie_modal_itemobservador')
    <button type="submit" id="btnagregaritem" class="btn btn-primary">Agregar</button>
    
</form>
@endsection
    @endsection

    @section('cuerpo_modal_itemobservador_edit')
<form id="itemobservadoredit" class="form-horizontal col-md-12" method="post">
    {{csrf_field()}}
    
    @section('pie_modal_itemobservador_edit')
    <button type="submit" id="btnagregaritemedit" class="btn btn-primary">Actualizar</button>
    
</form>
@endsection
    @endsection
<div class="d-flex justify-content-center"><h2>Items observador del alumno</h2></div>
    
<table class="table table-striped table-bordered"  style="text-align:center;width:100%" id="tablaobservadores">
    <thead>
        <tr>
            <th>Nº ITEM</th>
            <th>CATEGORIA</th>
            <th>TIPO DE FALTA</th>
            <th>ACCIONES</th>
        </tr>
        
    </thead>
    <tbody>
    </tbody>
</table>

<script>
    $(document).ready(function(){ 
  $("#itemobservador").on('submit',function(e){

e.preventDefault();
$.ajax({
  type:'POST',
  url:"/itemobservadores",
  dataType:'json',
  data:$('#itemobservador').serialize(),
  success:function(response){

    $('#observadormodal').modal('hide');
    $('#tablaobservadores').DataTable().ajax.reload();
     alertify.success('Guardado con exito');
},
error:function(error){
      console.log(error);
      alertify.success('No Guardado');

      }
  });
});
     });
</script>
<script>
    $(document).on('click','.btnitemedit', function(){
    $tr = $(this).closest('tr');
    //rellenamos los campos en el modal
    $("#iditem").val($('.id_text', $tr).text());
    $("#categoriafaltaedit").val($('.categoria_text', $tr).text());
    $("#tipofaltaedit").val($('.tipo_text', $tr).text());
    // Mostramos el modal
    $('#observadormodaledit').modal('show');
    
       });

$(document).ready(function(){ 
  $("#itemobservadoredit").on('submit',function(e){
        e.preventDefault();
    var id = $('#iditem').val();
    var tipo_falta=$('#tipofaltaedit').val();
   console.log($('#tipofaltaedit').val());
    var token=$('input[name="_token"]').val();
    $.ajax({
      url:'/itemobservadores/'+ id,
      type:'PUT',
      data:{
        id:id,
        tipo_falta:tipo_falta,
        _token:token
      },
      success: function(data){

      alertify.success('Actualizado con exito :)');
      $('#observadormodaledit').modal('hide');
    $('#tablaobservadores').DataTable().ajax.reload();


      },error:function(error){
      console.log(error);
      alertify.success('Ocurrio un error :(');

      }
    });
  });
});

$(document).on('click','.btnitemdelete', function(){
$tr = $(this).closest('tr');
var token=$('input[name="_token"]').val();
var id=$('.id_text', $tr).text(); 

console.log(id);

swal({
  title:"Esta seguro?",
  text:"Recuerde que se eliminara permanentemente el registro",
  icon:"warning",
  buttons:true,
  dangerMode:true,
})
.then((willDelete)=>{
  if(willDelete){
$.ajax({
  url:'/itemobservadores/'+ id,
  data:{
    id:id,
    _token:token
  },

  type:"DELETE",
  success: function(data){
    swal('Eliminado con exito','','success')
    $('#tablaobservadores').DataTable().ajax.reload();
  },error:function(error){
      console.log(error);
      alertify.success('Ocurrio un error :(, el item puede estar en uso');

      }
});
}
});
});
  </script>
<script >
$(document).ready(function() {
        $('#tablaobservadores').DataTable({
            
            "serverSide":true,
            "processing":true,
            "responsive":true,
          
            "ajax": "{!!URL::to('itemobservadores')!!}",
                "columns":[
                    
                    {data:'id',
                    className: 'id_text',
                    },
                    {data:'categoriafalta.categoria_falta',
                    className: 'categoria_text',
                    },
                    {data:'tipo_falta',
                    className: 'tipo_text',
                    },
                    {data:'action'},
                    
                   
                ],
                'fnCreatedRow':function(nRow,aData,iDataIndex){
                        $(nRow).attr('class','item'+aData.id);
                    },
                "responsive":true,
          "language":{
        "processing": "Procesando...",
    "lengthMenu": "Mostrar _MENU_ registros",
    "zeroRecords": "No se encontraron resultados",
    "emptyTable": "Ningún dato disponible en esta tabla",
    "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
    "search": "Buscar:",
    "infoThousands": ",",
    "loadingRecords": "Cargando...",
    "paginate": {
        "first": "Primero",
        "last": "Último",
        "next": "Siguiente",
        "previous": "Anterior"
    },
    "aria": {
        "sortAscending": ": Activar para ordenar la columna de manera ascendente",
        "sortDescending": ": Activar para ordenar la columna de manera descendente"
    },
    "buttons": {
        "copy": "Copiar",
        "colvis": "Visibilidad",
        "collection": "Colección",
        "colvisRestore": "Restaurar visibilidad",
        "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
        "copySuccess": {
            "1": "Copiada 1 fila al portapapeles",
            "_": "Copiadas %d fila al portapapeles"
        },
        "copyTitle": "Copiar al portapapeles",
        "csv": "CSV",
        "excel": "Excel",
        "pageLength": {
            "-1": "Mostrar todas las filas",
            "1": "Mostrar 1 fila",
            "_": "Mostrar %d filas"
        },
        "pdf": "PDF",
        "print": "Imprimir"
    },
    "autoFill": {
        "cancel": "Cancelar",
        "fill": "Rellene todas las celdas con <i>%d<\/i>",
        "fillHorizontal": "Rellenar celdas horizontalmente",
        "fillVertical": "Rellenar celdas verticalmentemente"
    },
    "decimal": ",",
    "searchBuilder": {
        "add": "Añadir condición",
        "button": {
            "0": "Constructor de búsqueda",
            "_": "Constructor de búsqueda (%d)"
        },
        "clearAll": "Borrar todo",
        "condition": "Condición",
        "conditions": {
            "date": {
                "after": "Despues",
                "before": "Antes",
                "between": "Entre",
                "empty": "Vacío",
                "equals": "Igual a",
                "not": "No",
                "notBetween": "No entre",
                "notEmpty": "No Vacio"
            },
            "moment": {
                "after": "Despues",
                "before": "Antes",
                "between": "Entre",
                "empty": "Vacío",
                "equals": "Igual a",
                "not": "No",
                "notBetween": "No entre",
                "notEmpty": "No vacio"
            },
            "number": {
                "between": "Entre",
                "empty": "Vacio",
                "equals": "Igual a",
                "gt": "Mayor a",
                "gte": "Mayor o igual a",
                "lt": "Menor que",
                "lte": "Menor o igual que",
                "not": "No",
                "notBetween": "No entre",
                "notEmpty": "No vacío"
            },
            "string": {
                "contains": "Contiene",
                "empty": "Vacío",
                "endsWith": "Termina en",
                "equals": "Igual a",
                "not": "No",
                "notEmpty": "No Vacio",
                "startsWith": "Empieza con"
            }
        },
        "data": "Data",
        "deleteTitle": "Eliminar regla de filtrado",
        "leftTitle": "Criterios anulados",
        "logicAnd": "Y",
        "logicOr": "O",
        "rightTitle": "Criterios de sangría",
        "title": {
            "0": "Constructor de búsqueda",
            "_": "Constructor de búsqueda (%d)"
        },
        "value": "Valor"
    },
    "searchPanes": {
        "clearMessage": "Borrar todo",
        "collapse": {
            "0": "Paneles de búsqueda",
            "_": "Paneles de búsqueda (%d)"
        },
        "count": "{total}",
        "countFiltered": "{shown} ({total})",
        "emptyPanes": "Sin paneles de búsqueda",
        "loadMessage": "Cargando paneles de búsqueda",
        "title": "Filtros Activos - %d"
    },
    "select": {
        "1": "%d fila seleccionada",
        "_": "%d filas seleccionadas",
        "cells": {
            "1": "1 celda seleccionada",
            "_": "$d celdas seleccionadas"
        },
        "columns": {
            "1": "1 columna seleccionada",
            "_": "%d columnas seleccionadas"
        }
    },
    "thousands": "."

    }
});
});



</script>


@endsection