@extends('master')
@section('content')
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Nombre">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Apellido</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Apellido">
    </div>
  </div>
  <div class="form-group">
   <label for="exampleFormControlSelect1">Cargo</label>
   <select class="form-control" id="exampleFormControlSelect1">
     <option>administrativo</option>
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
