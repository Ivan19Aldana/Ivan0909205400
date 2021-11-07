@extends('layouts.plantillabase');

@section ('contenido') 
<h2>EDITAR REGISTROS</h2>

<form action = "/criptomonedas/{{$criptomonedas->Id}}" method="POST">
    @csrf
@method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value= "{{$criptomonedas->nombre}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Logotipo</label>
    <input id="logotipo" name="logotipo" type="text" class="form-control" value= "{{$criptomonedas->logotipo}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="precio" name="precio" type="number" step="any" value="0.00" class="form-control" value= "{{$criptomonedas->precio}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripcion</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value= "{{$criptomonedas-> descripcio}}">
  </div>
   <div class="mb-3">
    <label for="" class="form-label">Lenguaje</label>
    <input id="lenguaje" name="lenguaje" type="number" class="form-control" value= "{{$criptomonedas->lenguaje}}">
  </div>
  <a href="/criptomonedas" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@endsection