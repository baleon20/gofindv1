<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoEvento;

class TipoEventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoevento = TipoEvento::with('Evento')->get();

        return view('tipoevento.tipoevento', compact('tipoevento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $TipoEvento = new TipoEvento;
        return view('tipoevento.form', compact('TipoEvento'));    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TipoEvento::create($request->input());
      return back()->with('message', ['success', "Tipo de Evento creado satisfactoriamente"]);    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $TipoEvento = tipoevento::find($id);
        return view('tipoevento.ver', compact('TipoEvento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $TipoEvento = TipoEvento::find($id);
        return view('tipoevento.form', compact('TipoEvento'));
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
         $TipoEvento = TipoEvento::find($id);
        $TipoEvento->nombre = $request->nombre;
        $TipoEvento->update();
       
       return back()->with('message', ['success', "Tipo de Evento guardado satisfactoriamente"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $tipoevento = TipoEvento::findOrFail($id);
        $tipoevento->delete();  
      return back()->with('message', ['success', "Tipo de Evento borrado satisfactoriamente"]);
    }

    public function search(Request $request)
    {
        $id = $request->get('id');
        $TipoEvento = TipoEvento::find($id);

        return view('tipoevento.ver', compact('TipoEvento'));

    }
}
