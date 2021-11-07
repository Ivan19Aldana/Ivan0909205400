@extends('layouts.plantillabase');

@section ('contenido') 

<h2>Crear Registros</h2>

<form action = "/criptomonedas"method=post>
@csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Logotipo</label>
    <input id="logotipo" name="logotipo" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="precio" name="precio" type="number" step="any" value="0.00" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripcion</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="4">
  </div>
   <div class="mb-3">
    <label for="" class="form-label">Lenguaje</label>
    <input id="lenguaje" name="lenguaje" type="number" class="form-control" tabindex="5">
  </div>
  <a href="/criptomonedas" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@endsection