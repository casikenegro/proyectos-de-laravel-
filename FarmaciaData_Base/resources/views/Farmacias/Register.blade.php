@extends('master')
@section('content')
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre Farmacia </label>
      <input type="text" class="form-control" id="nombre" placeholder="Nombre farmacia">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Ciudad </label>
      <input type="text" class="form-control" id="ciudad" placeholder="Ciudad">
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Registar</button>
</form>
@endsection
