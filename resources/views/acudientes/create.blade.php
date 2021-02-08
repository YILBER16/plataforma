@extends('layouts.layout')

@section('contenido') 
<form action="{{url('/acudientes')}}" class="form-horizontal col-md-12" method="post">
    {{csrf_field()}}
    @include('acudientes.form',['Modo'=>'crear'])
  </form>
@endsection