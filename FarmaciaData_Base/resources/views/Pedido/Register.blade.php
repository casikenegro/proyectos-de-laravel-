@extends('master')
@section('content')
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre del medicamento</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Nombre ">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Forma de pago</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="cantidad medicamento">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">cantidad</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="forma de pago">
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
 <div class="form-group">
   <label for="exampleFormControlSelect1">Codigo Farmacia</label>
   <select class="form-control" id="exampleFormControlSelect1">
     <option>1</option>
     <option>2</option>
     <option>3</option>
     <option>4</option>

   </select>
 </div>
  <button type="submit" class="btn btn-primary">Registrar</button>
</form>
@endsection
