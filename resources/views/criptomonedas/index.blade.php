@extends('layouts.plantillabase');

@section ('contenido') 
<a href = "criptomonedas/create" class = "btn btn-primary">CREAR</a> 


<table class = "table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Logotipo</th>
            <th scope="col">Precio</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Lenguaje</th>
            <th scope="col">Acciones</th>
</tr>
</thead>
<tbody>
    @foreach  ($criptomonedas as $criptomonedas)
    <tr>
        <td>{{$criptomonedas->Id}}</td>
        <td>{{$criptomonedas->Nombre}}</td>
        <td>{{$criptomonedas->Logotipo}}</td>
        <td>{{$criptomonedas->Precio}}</td>
        <td>{{$criptomonedas->Descripcion}}</td>
        <td>{{$criptomonedas->Lenguaje}}</td>
        <td>
            <a href= "/criptomonedas/{{$criptomonedas->Id}}/edit" class = "btn btn-info" >Editar</a>
            <button class = "btn btn-danger">Borrar</button>
</td>

</tr>
    @endforeach
</tbody>
</table>
@endsection
