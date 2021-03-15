<fieldset>
    <div class="container ">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">

                        <legend class="card-header text-center ">Generar cobros mensuales</legend>
                        <div class="card-body">
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                                  <label>Mes a facturar</label>
                                  <select id="id_mes" name="id_mes" class="form-control ">
                                    <option value="">Seleccione una opción</option>
                                    @foreach ($meses as $item)
                                    <option value="{{$item['id_mes']}}">{{$item['nom_mes']}} de {{$item['id_anio_lectivo']}}</option>
                                    @endforeach
                                 
                                     </select>
                                
                                {!! $errors->first('id_mes','<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        
                        </div>                      
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary btn-lg" onclick="return confirm('¿Verifique que estén correctamente diligencia todos los campos?');"><i class="far fa-check-square"></i> Facturar</button>   

                        <button type="button" class="btn btn-danger btn-lg" onclick="window.location='{{ url('/pagos')}}'">Cancelar</button>
        
                            </div>

                        </div>
                     
                        </div>
                        </div>
                        </div>
                        </div>
                         </div>
                       
</fieldset>
