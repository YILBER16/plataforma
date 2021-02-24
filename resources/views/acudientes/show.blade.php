@extends('layouts.layout')

@section('contenido') 
<fieldset>
    <div class="container ">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">

                        <legend class="card-header text-center ">Datos personales de {{$acudiente->nom_acudiente}}</legend>
                        <div class="card-body">
                         <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Nº identificación</label>
                               <input id="id_acudiente" name="id_acudiente" type="text" value="{{isset($acudiente->id_acudiente)?$acudiente->id_acudiente:old('id_acudiente')}}"
                                 placeholder="Cedula" class="form-control " onFocus="this.blur()">
                               

                    


                            </div>
                          </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Nombres</label>
                                <input id="nom_acudiente" name="nom_acudiente" type="text" value="{{isset($acudiente->nom_acudiente)?$acudiente->nom_acudiente:old('nom_acudiente')}}"
                                 placeholder="Nombres" class="form-control " onFocus="this.blur()">
                                
                              
                            </div>
                        </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Dirección</label>
                                <input id="dir_acudiente" name="dir_acudiente" type="text" value="{{isset($acudiente->dir_acudiente)?$acudiente->dir_acudiente:old('dir_acudiente')}}"
                                 placeholder="Direccion" class="form-control "onFocus="this.blur()">
                               
                          
                            </div>
                        </div>
                       <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Telefono</label>
                                <input id="tel_acudiente" name="tel_acudiente" type="text" value="{{isset($acudiente->tel_acudiente)?$acudiente->tel_acudiente:old('tel_acudiente')}}"placeholder="Telefono" class="form-control "onFocus="this.blur()">
                                
                               
                            </div>
                        </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                                  <label>Correo</label>
                                <input id="cor_acudiente" name="cor_acudiente" type="text" value="{{isset($acudiente->cor_acudiente)?$acudiente->cor_acudiente:old('cor_acudiente')}}"placeholder="Correo" class="form-control "onFocus="this.blur()">
                                
                     
                            </div>
                        </div>
                       
                        </div>
                        <div class="form-group">
                          <label class="col-md-12 control-label">Documento de identidad</label>
                          <object type="application/pdf"  data="{{Storage::url("$acudiente->doc_documento")}}" width="100%" height="500" style="height: 85vh;"></object >

                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                               

                        <button type="button" class="btn btn-danger btn-lg" onclick="window.location='{{ url('/acudientes')}}'">Volver</button>
                          
                            </div>

                        </div>
                     
                        </div>
                        </div>
                        </div>
                        </div>
                         </div>
                       
</fieldset>

@endsection