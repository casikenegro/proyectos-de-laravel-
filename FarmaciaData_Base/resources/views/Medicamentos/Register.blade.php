@extends('master')
@section('content')
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre medicamentos </label>
      <input type="text" class="form-control" id="nombre" placeholder="Nombre medicamento">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Monodroga </label>
      <input type="text" class="form-control" id="ciudad" placeholder="monodroga">
    </div>
  </div>
<div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputPassword4">Presentacion </label>
    <input type="text" class="form-control" id="ciudad" placeholder="presentacion">
  </div>
  <div class="form-group col-md-6">
    <label for="inputPassword4">Precio </label>
    <input type="text" class="form-control" id="ciudad" placeholder="Precio">
  </div>
    </div>
<div class="form-row">
<div class="form-group col-md-6">
  <label for="inputPassword4">Accion Terapeutica </label>
  <input type="text" class="form-control" id="ciudad" placeholder="Accion Terapeutica">
</div>
</div>

<div class="form-group">
 <label for="exampleFormControlSelect1">Laboratorios</label>
 <select class="form-control" id="exampleFormControlSelect1">
   <option>LBTroclodita</option>
   <option>farmaseutico</option>
   <option>vendedor</option>
   <option>pasante</option>

 </select>
</div>

  <button type="submit" class="btn btn-primary">Registar</button>
</form>
@endsection
