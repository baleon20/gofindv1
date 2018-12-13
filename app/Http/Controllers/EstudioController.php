<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudio;

class EstudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $estudio = Estudio::with('Egresado', 'NivelEstudio')->get();

        return view('estudio.estudio', compact('estudio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $Estudio = new Estudio;
        return view('estudio.form', compact('Estudio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Estudio::create($request->input());
      return back()->with('message', ['success', "Estudio creado satisfactoriamente"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $Estudio=estudio::find($id);
        return view('estudio.ver', compact('Estudio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Estudio = Estudio::find($id);
        return view('estudio.form', compact('Estudio'));
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
        $Estudio = Estudio::find($id);
        $Estudio->titulo = $request->titulo;
        $Estudio->institucion = $request->institucion;
        $Estudio->duracion = $request->duracion;
        $Estudio->fecha = $request->fecha;
        $Estudio->update();
       
       return back()->with('message', ['success', "Estudio guardado satisfactoriamente"]);  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudio = Estudio::findOrFail($id);
        $estudio->delete();  
      return back()->with('message', ['success', "Estudio borrado satisfactoriamente"]);
    }

    public function search(Request $request)
    {
        $id = $request->get('id');
        $Estudio = Estudio::find($id);

        return view('estudio.ver', compact('Estudio'));

    }
}
