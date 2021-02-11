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
<form action="{{url('/acudientes')}}" class="form-horizontal col-md-12" method="post">
    {{csrf_field()}}
    @include('acudientes.form',['Modo'=>'crear'])
  </form>
@endsection