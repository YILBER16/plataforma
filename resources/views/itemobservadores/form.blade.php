<div class="form-group">
  <label for="" class="">Categoria de la falta</label>
  <select name="categoria_falta" id="categoria_falta" class="form-control">
      <option value="">Seleccione una opción</option>
      @foreach ($categorias as $item)
      <option value="{{$item['id']}}">{{$item['categoria_falta']}}</option>
      @endforeach
  </select>
</div>
<div class="form-group">
<label for="" class="">Tipo de falta</label>
<input type="text" name="tipo_falta" id="tipo_falta" class="form-control" maxlength="120">
</div>