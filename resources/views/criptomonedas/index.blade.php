@extends('layouts.plantillabase')
@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-13">
                <h2 class="text-center mb-5" >LISTADO DE CRIPTOMONEDAS </h2>
                <a type="button " href="{{ url('/crear')}}" class="btn btn-success btn-lg active mb-4 col-2 float-left ">CREAR </a>

                <table class="table table-striped">
                  <thead>
                    <tr>

                        <th class="border px-4 py-2 text-center">LOGOTIPO</th>
                        <th class="border px-4 py-2 text-center">NOMBRE</th>
                        <th class="border px-4 py-2 text-center">PRECIO Q</th>
                        <th class="border px-4 py-2 text-center">DESCRIPCION</th>
                        <th class="border px-4 py-2 text-center">LENGUAJE</th>
                        <th class="border px-4 py-2 text-center ">OPCIONES</th>



                    </tr>
                  </thead>
                  <tbody>

                    @foreach($criptomonedas as $criptomoneda)
                        <tr>

                        <td class=" border px-4 py-2">
                              <img src="{{ asset('storage').'/'.$criptomoneda->logotipo}}" alt="" height="80">
                            </td>


                            <td class=" border px-4 py-2">{{$criptomoneda->nombre}}</td>
                            <td class=" border px-5 py-2">{{$criptomoneda->precio}}</td>
                            <td class=" border px-8 py-2">{{$criptomoneda->descripcion}}</td>
                            <td class=" border px-4 py-2">{{$criptomoneda->descripcion_lenguaje}}</td>
                            <td class=" border px-4 py-2">
                                <div class="btn-group flex justify-center rounded-lg text-lg">

                                    <form action="{{ url('/editar', $criptomoneda->id)}}" >


                                        <button type="submit" onclick="return ;" style = "background-color: transparent ">
                                        <i class="fas fa-pen-square"></i>
                                        </button>


                                    </form>
                                    <form action="{{ url('/delete', $criptomoneda->id)}}" method="post">
                                        @csrf @method('DELETE')

                                        <button type="submit" onclick="return confirm('Eliminar Registro de Usuario');" style = "background-color: transparent">
                                        <i class="fas fa-trash-alt"></i>
                                        </button>


                                    </form>


                                </div>

                            </td>

                        </tr>
                    @endforeach
                  </tbody>

                </table>
                {{ $criptomonedas->links() }}
            </div>

        </div>
    </div>
@endsection