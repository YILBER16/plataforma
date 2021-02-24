@extends('layouts.layout')

@section('contenido') 
<fieldset>
    <div class="container ">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">

                        <legend class="card-header text-center ">Datos personales de {{$docente->nom_docente}}</legend>
                        <div class="card-body">
                         <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Nº identificación</label>
                               <input id="id_docente" name="id_docente" type="text" value="{{isset($docente->id_docente)?$docente->id_docente:old('id_docente')}}"
                                 placeholder="Cedula" class="form-control " onFocus="this.blur()">
                               

                    


                            </div>
                          </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Nombres</label>
                                <input id="nom_docente" name="nom_docente" type="text" value="{{isset($docente->nom_docente)?$docente->nom_docente:old('nom_docente')}}"
                                 placeholder="Nombres" class="form-control " onFocus="this.blur()">
                                
                              
                            </div>
                        </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Dirección</label>
                                <input id="dir_docente" name="dir_docente" type="text" value="{{isset($docente->dir_docente)?$docente->dir_docente:old('dir_docente')}}"
                                 placeholder="Direccion" class="form-control "onFocus="this.blur()">
                               
                          
                            </div>
                        </div>
                       <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Telefono</label>
                                <input id="tel_docente" name="tel_docente" type="text" value="{{isset($docente->tel_docente)?$docente->tel_docente:old('tel_docente')}}"placeholder="Telefono" class="form-control "onFocus="this.blur()">
                                
                               
                            </div>
                        </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Correo</label>
                                <input id="cor_docente" name="cor_docente" type="text" value="{{isset($docente->cor_docente)?$docente->cor_docente:old('cor_docente')}}"placeholder="Correo" class="form-control "onFocus="this.blur()">
                                
                     
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                                  <label>Nivel academico</label>
                                <input id="nivel_academico" name="nivel_academico" type="text" value="{{isset($docente->nivel_academico)?$docente->nivel_academico:old('nivel_academico')}}"placeholder="Nivel academico" class="form-control "onFocus="this.blur()">
                                
                     
                            </div>
                        </div>
                       
                        </div>
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                          <label class=" control-label">Documento de identidad</label>
                          <object type="application/pdf"  data="{{Storage::url("$docente->doc_documento")}}" width="100%" height="500" style="height: 85vh;"></object >

                        </div>
                      </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                          <label class=" control-label">Hoja de vida</label>
                          <object type="application/pdf"  data="{{Storage::url("$docente->hoja_de_vida")}}" width="100%" height="500" style="height: 85vh;"></object >

                        </div>
                      </div>
                      
                    </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                               

                        <button type="button" class="btn btn-danger btn-lg" onclick="window.location='{{ url('/docentes')}}'">Volver</button>
                          
                            </div>

                        </div>
                     
                        </div>
                        </div>
                        </div>
                        </div>
                         </div>
                       
</fieldset>

@endsection