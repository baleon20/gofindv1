<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NivelEstudio;

class NivelEstudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $nivelestudio = nivelestudio::all();
        return view('nivelestudio.nivelestudio', compact('nivelestudio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $NivelEstudio = new NivelEstudio;
        return view('nivelestudio.form', compact('NivelEstudio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        NivelEstudio::create($request->input());
      return back()->with('message', ['success', "Nive de Estudio creado satisfactoriamente"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $NivelEstudio=nivelestudio::find($id);
        return view('nivelestudio.ver', compact('NivelEstudio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $NivelEstudio = NivelEstudio::find($id);
        return view('nivelestudio.form', compact('NivelEstudio'));
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
        $NivelEstudio = NivelEstudio::find($id);
        $NivelEstudio->nombre = $request->nombre;
        $NivelEstudio->update();
       
       return back()->with('message', ['success', "Nivel de Estudio guardado satisfactoriamente"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $nivelestudio = NivelEstudio::findOrFail($id);
    $nivelestudio->delete();  
      return back()->with('message', ['success', "Nivel de Estudio borrado satisfactoriamente"]);
    }

    public function search(Request $request)
    {
        $id = $request->get('id');
        $NivelEstudio = NivelEstudio::find($id);

        return view('nivelestudio.ver', compact('NivelEstudio'));

    }
}
