@extends('layouts.plantillabase')
@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h2 class="text-center mb-5" > INGRESO DE DATOS PARA  CREAR CRIPTOMONEDA </h2>

                <form action="{{ url ('/save') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group col-md-6 ">
                            <label for="inputEmail4">NOMBRE</label>
                            <input type="text" name="nombre" class="form-control border border-warning"  placeholder="Ej. Ripple XRP">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">PRECIO</label>
                            <input type="text" name="precio" class="form-control border border-warning"  placeholder="Ej. Q 587138.12">
                        </div>
                    <div class="form-group">
                        <label for="inputAddress">DESCRIPCION</label>
                        <input type="text" name="descripcion" class="form-control border border-warning"  placeholder=" Ej. Ripple XRP es una criptomoneda...">
                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label for="">SELECCIONAR LENGUAJE</label>
                            <select name="lenguaje" class="form-control border border-warning">
                                <option value="" >Seleccione lenguaje...</option>
                                @foreach( $lenguaje as $lenguajes)
                                    <option value="{{$lenguajes->id}}" > {{$lenguajes->descripcion_lenguaje}}  </option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="grid grid-cols-1 mt-1 mx-7">
                        <img id="logotipoSeleccionada" style="max-height: 300px;">
                    </div>
                    <div class="grid grid-cols-1 mt-5 mx-7">
                        <label for="inputState">CARGAR LOGOTIPO</label>
                        <div class="flex items-center justify-center w-full">
                            <input name="logotipo" id="logotipo" type="file" class="hidden ">

                        </div>
                    </div>



                    <button type="submit" class="btn btn-success btn-lg active mb-4 col-2 float-left border border-success "> CREAR </button>
                    <a type="button " href="{{ url('/')}}" class="btn btn-danger btn-lg active mb-4 col-2 float-left mr-3">REGRESAR </a>
                </form>


            </div>

        </div>
    </div>
@endsection