<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FichaEgresado;

class FichaEgresadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $fichaegresado = FichaEgresado::with('Ficha', 'Egresado')->get();

        return view('fichaegresado.fichaegresado', compact('fichaegresado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $FichaEgresado = new FichaEgresado;
        return view('fichaegresado.form', compact('FichaEgresado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         FichaEgresado::create($request->input());
      return back()->with('message', ['success', "Ficha de Egresado creado satisfactoriamente"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $FichaEgresado=fichaegresado::find($id);
        return view('fichaegresado.ver', compact('FichaEgresado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $FichaEgresado = FichaEgresado::find($id);
        return view('fichaegresado.form', compact('FichaEgresado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $FichaEgresado = FichaEgresado::find($id);
        $FichaEgresado->fechaegresado = $request->fechaegresado;
        $FichaEgresado->update();
       
       return back()->with('message', ['success', "Ficha de Egresado guardado satisfactoriamente"]); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fichaegresado = FichaEgresado::findOrFail($id);
        $fichaegresado->delete();  
      return back()->with('message', ['success', "Ficha de Egresado borrado satisfactoriamente"]);
    }

    public function search(Request $request)
    {
        $id = $request->get('id');
        $FichaEgresado = FichaEgresado::find($id);

        return view('fichaegresado.ver', compact('FichaEgresado'));

    }
}
