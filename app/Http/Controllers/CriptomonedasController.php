<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\criptomonedas;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Lenguaje;

class CriptomonedasController extends Controller
{
    public function index()
    {

       $criptomonedas = DB::table('criptomoneda')
           ->join('lenguaje_programacion', 'criptomoneda.lenguaje_id', '=', 'lenguaje_programacion.id')
           ->select('criptomoneda.*', 'lenguaje_programacion.descripcion_lenguaje')
            ->paginate(3);


        return view('criptomonedas.index', compact('criptomonedas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // return view('archivo.crear');
        $lenguaje = Lenguaje::all();
        return view('criptomonedas.create', compact('lenguaje'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
              $validation = $this->validate($request, [
                'logotipo' => 'required',
                'nombre' => 'required|string|max:35',
                'precio' => 'required',
                'descripcion'=>'required|string|max:255',
               'lenguaje' => 'required'
            ]);
            if($request->hasFile('logotipo')){
                $validation['logotipo'] = $request-> file('logotipo')->store('logos','public');
            }
                 criptomonedas::create([
                'logotipo'=>$validation['logotipo'],
                'nombre'=>$validation['nombre'],
                'precio'=>$validation['precio'],
                'descripcion'=> $validation['descripcion'],
               'lenguaje_id'=> $validation['lenguaje'],
   ]);

        return redirect('/')->with('editar', 'ok');




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cript = criptomonedas::findOrFail($id);
        $lenguaje= Lenguaje::all();
        return view('criptomonedas.edit', compact('cript', 'lenguaje'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $datacriptomonedas = request()->except((['_token','_method']));

        /*Recolecion de logotipo*/
        if($request->hasFile('logotipo')){
            $criptomonedas = criptomonedas::findOrFail($id);
            Storage::delete('public/'.$criptomonedas->logotipo);
            $datacriptomonedas ['logotipo'] = $request-> file('logotipo')->store('logos','public');}

        criptomonedas::where('id', '=', $id)->update($datacriptomonedas);

        return redirect('/')->with('editar', 'ok');
    }

//$validation = $this->validate($request, [
//            'logotipo' => 'required',
//            'nombre' => 'required|string|max:75',
//            'precio' => 'required',
//            'descripcion'=>'required|string|max:255',
////                'lenguaje' => 'required'
//        ]);
//
//
//
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $criptomonedas = criptomonedas::findOrFail($id);

        $criptomonedas->delete();



        return back()->with('criptomonedasEliminado', 'Criptomonedas eliminada');
    }
}