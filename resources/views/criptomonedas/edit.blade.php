@extends('layouts.plantillabase')
@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <h2 class="text-center mb-5" > Datos para Editar Criptomonedas </h2>

                <form action="{{ url ('modificar', $cript->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group col-md-4 ">
                            <label for="">NOMBRE</label>
                            <input type="text" name="nombre" value="{{ $cript->nombre }}" class="form-control border border-warning"  >
                    </div>
                    <div class="form-group col-md-4">
                            <label for="">PRECIO</label>
                            <input type="text" name="precio" value="{{$cript->precio}}" class="form-control border border-warning"  >
                    </div>
                    <div class="form-group">
                        <label for="">DESCRIPCION</label>
                        <input type="text" name="descripcion" value="{{$cript->descripcion}}" class="form-control border border-warning"  >
                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-4 ">
                            <label for="inputState">Seccionar Lenguaje</label>
                            <select name="lenguaje_id" class="form-control border border-warning">
                                <option value="" >Seleccione lenguaje...</option>

                                @foreach( $lenguaje as $lenguajes)
                                    <option value="{{$lenguajes->id}}" class="text-center"> {{$lenguajes->descripcion_lenguaje}}  </option>
                                @endforeach


                            </select>
                        </div>

                    </div>

                    <div class="grid grid-cols-1 mt-1 mx-7">
                        <img id="logotipoSeleccionada" style="max-height: 300px;">
                    </div>
                    <div class="grid grid-cols-1 mt-5 mx-7">
                        <label for="inputState">Cargar LOGOTIPO</label>
                        <div class="flex items-center justify-center w-full">
                            <input name="logotipo" value="{{ $cript->logotipo }}" id="logotipo" type="file" class="hidden ">

                        </div>
                    </div>

                    <button type="submit" class="btn btn-success btn-lg active  col-2 float-center border border-success "> EDITAR </button>
                    <a type="button " href="{{ url('/')}}" class="btn btn-danger btn-lg active  col-2 float-center "> REGRESAR </a>
                </form>


            </div>

        </div>
    </div>
@endsection