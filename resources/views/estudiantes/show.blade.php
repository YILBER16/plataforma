@extends('layouts.layout')

@section('contenido') 
<fieldset>
    <div class="container ">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">

                        <legend class="card-header text-center ">Datos personales de {{$estudiante->nom_estudiante}}</legend>
                        <div class="card-body">
                         <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Nº identificación</label>
                               <input id="id_estudiante" name="id_estudiante" type="text" value="{{isset($estudiante->id_estudiante)?$estudiante->id_estudiante:old('id_estudiante')}}"
                                 class="form-control " onFocus="this.blur()">
                               

                    


                            </div>
                          </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Nombres</label>
                                <input id="nom_estudiante" name="nom_estudiante" type="text" value="{{isset($estudiante->nom_estudiante)?$estudiante->nom_estudiante:old('nom_estudiante')}}"
                                  class="form-control " onFocus="this.blur()">
                                
                              
                            </div>
                        </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Parentesco</label>
                                  <input id="parentesco" name="parentesco" type="text" value="{{isset($estudiante->parentesco)?$estudiante->parentesco:old('parentesco')}}" class="form-control "maxlength="30"onFocus="this.blur()">
                                
                          </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Ocupación</label>
                                <input id="ocu_estudiante" name="ocu_estudiante" type="text" value="{{isset($estudiante->ocu_estudiante)?$estudiante->ocu_estudiante:old('ocu_estudiante')}}" class="form-control "maxlength="30"onFocus="this.blur()">
                                
                                
                            </div>
                        </div>
                       
                        </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Dirección</label>
                                <input id="dir_estudiante" name="dir_estudiante" type="text" value="{{isset($estudiante->dir_estudiante)?$estudiante->dir_estudiante:old('dir_estudiante')}}"
                                 placeholder="Direccion" class="form-control "onFocus="this.blur()">
                               
                          
                            </div>
                        </div>
                       <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Telefono</label>
                                <input id="tel_estudiante" name="tel_estudiante" type="text" value="{{isset($estudiante->tel_estudiante)?$estudiante->tel_estudiante:old('tel_estudiante')}}"placeholder="Telefono" class="form-control "onFocus="this.blur()">
                                
                               
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