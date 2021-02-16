@extends('layouts.layout')

@section('contenido') 
<fieldset>
    <div class="container ">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">

                        <legend class="card-header text-center ">Datos personales de {{$padre->nom_padre}}</legend>
                        <div class="card-body">
                         <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Nº identificación</label>
                               <input id="id_padre" name="id_padre" type="text" value="{{isset($padre->id_padre)?$padre->id_padre:old('id_padre')}}"
                                 class="form-control " onFocus="this.blur()">
                               

                    


                            </div>
                          </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Nombres</label>
                                <input id="nom_padre" name="nom_padre" type="text" value="{{isset($padre->nom_padre)?$padre->nom_padre:old('nom_padre')}}"
                                  class="form-control " onFocus="this.blur()">
                                
                              
                            </div>
                        </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Parentesco</label>
                                  <input id="parentesco" name="parentesco" type="text" value="{{isset($padre->parentesco)?$padre->parentesco:old('parentesco')}}" class="form-control "maxlength="30"onFocus="this.blur()">
                                
                          </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Ocupación</label>
                                <input id="ocu_padre" name="ocu_padre" type="text" value="{{isset($padre->ocu_padre)?$padre->ocu_padre:old('ocu_padre')}}" class="form-control "maxlength="30"onFocus="this.blur()">
                                
                                
                            </div>
                        </div>
                       
                        </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Dirección</label>
                                <input id="dir_padre" name="dir_padre" type="text" value="{{isset($padre->dir_padre)?$padre->dir_padre:old('dir_padre')}}"
                                 placeholder="Direccion" class="form-control "onFocus="this.blur()">
                               
                          
                            </div>
                        </div>
                       <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Telefono</label>
                                <input id="tel_padre" name="tel_padre" type="text" value="{{isset($padre->tel_padre)?$padre->tel_padre:old('tel_padre')}}"placeholder="Telefono" class="form-control "onFocus="this.blur()">
                                
                               
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                               

                        <button type="button" class="btn btn-danger btn-lg" onclick="window.location='{{ URL::previous() }}'">Volver</button>
                          
                            </div>

                        </div>
                     
                        </div>
                        </div>
                        </div>
                        </div>
                         </div>
                       
</fieldset>

@endsection