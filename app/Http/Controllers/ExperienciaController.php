<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experiencia;

class ExperienciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiencia = Experiencia::with('Egresado')->get();

        return view('experiencia.experiencia', compact('experiencia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Experiencia = new Experiencia;
        return view('experiencia.form', compact('Experiencia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Experiencia::create($request->input());
      return back()->with('message', ['success', "Experiencia creada satisfactoriamente"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Experiencia = experiencia::find($id);
        return view('experiencia.ver', compact('Experiencia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Experiencia = Experiencia::find($id);
        return view('experiencia.form', compact('Experiencia'));
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
        $Experiencia = Experiencia::find($id);
        $Experiencia->organizacion = $request->organizacion;
        $Experiencia->fechainicio = $request->fechainicio;
        $Experiencia->fechafinal = $request->fechafinal;
        $Experiencia->cargo = $request->cargo;
        $Experiencia->descripcion = $request->descripcion;
        $Experiencia->adjunto = $request->adjunto;
        $Experiencia->update();
       
       return back()->with('message', ['success', "Experiencia guardada satisfactoriamente"]); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $experiencia = Experiencia::findOrFail($id);
        $experiencia->delete();  
      return back()->with('message', ['success', "Experiencia borrada satisfactoriamente"]);    }

      public function search(Request $request)
    {
        $id = $request->get('id');
        $Experiencia = Experiencia::find($id);

        return view('experiencia.ver', compact('Experiencia'));

    }
}
