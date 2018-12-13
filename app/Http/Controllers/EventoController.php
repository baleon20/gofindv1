<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $evento = evento::all();
        return view('evento.evento', compact('evento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Evento = new Evento;
        return view('evento.form', compact('Evento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Evento::create($request->input());
      return back()->with('message', ['success', "Evento creado satisfactoriamente"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $Evento=evento::find($id);
        return view('evento.ver', compact('Evento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $Evento = Evento::find($id);
        return view('evento.form', compact('Evento'));
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
        $Evento = Evento::find($id);
        $Evento->nombre = $request->nombre;
        $Evento->descripcion = $request->descripcion;
        $Evento->fechaevento = $request->fechaevento;
        $Evento->lugar = $request->lugar;
        $Evento->direccion = $request->direccion;
        $Evento->update();
       
       return back()->with('message', ['success', "Evento guardado satisfactoriamente"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evento = Evento::findOrFail($id);
        $evento->delete();  
      return back()->with('message', ['success', "Evento borrado satisfactoriamente"]);
    }

    public function search(Request $request)
    {
        $id = $request->get('id');
        $Evento = Evento::find($id);

        return view('evento.ver', compact('Evento'));

    }
}
