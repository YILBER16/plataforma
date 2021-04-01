@extends('layouts.layout')


@section('contenido') 
@if(Session::has('Mensaje'))
<div class="alert alert-success content col-sm-12 text-center "role="alert">
{{ Session::get('Mensaje')}}
</div>


@endif

<meta name="csrf-token" content="{{ csrf_token() }}">
<button type="button" id="enlace" class="btn btn-primary"><i class="fas fa-user-plus"></i> Agregar docente</button>
<div class="d-flex justify-content-center"><h2>Gestion de docentes</h2></div>
    
<table class="table table-striped table-bordered" style="text-align:center;width:100%" id="tabladocentes">
    <thead>
        <tr>
            <th>NºDOCUMENTO</th>
            <th>NOMBRE</th>
            <th>DIRECCION</th>
            <th>TELEFONO</th>
            <th>NIVEL ACADEMICO</th>
            <th>ACCIONES</th>
        </tr>
        
    </thead>
    <tbody>
    </tbody>
</table>

<script >

    $(document).ready(function() {
        $('#tabladocentes').DataTable({
            
            "serverSide":true,
            "processing":true,
            "responsive":true,
          
            "ajax": "{!!URL::to('docentes')!!}",
                "columns":[
                    
                    {data:'id_docente'},
                    {data:'nom_docente'},
                    {data:'dir_docente'},
                    {data:'tel_docente'},
                    {data:'nivel_academico'},
                    {data: 'action'},
                    
                   
                ],
                'fnCreatedRow':function(nRow,aData,iDataIndex){
                        $(nRow).attr('class','item'+aData.id_docente);
                    },
                
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

//mostrar datos para eliminar registros
$(document).on('click','.deletebutton', function(){
var modal_data = $(this).data('info').split(';');
$('.did').text(modal_data[0]);
$('.dname').html(modal_data[1]);
});
$(document).on('click','.btneliminar', function($id_docente){
    $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
$.ajax({
type:'post',
url:'/deleteDatedocente',
data:{
    '_token':$('input[name=_token]').val(),
    'id_docente':$(".did").text(),
},
success: function(data){
    console.log("eliminado");
    $('#deletemodal').modal('toggle');
    $('#item' +$('.did').text()).remove();
    alertaelim();
    $('#tabladocentes').DataTable().ajax.reload();
    

},error:function(){ 
    alertaerror();
    }
});
});
//enlace para registrar usuario
document.getElementById("enlace").onclick = function () {
    window.location.href = "{{url('docentes/create')}}";
};


</script>

@endsection