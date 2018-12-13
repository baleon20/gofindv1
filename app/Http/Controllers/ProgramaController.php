<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Programa;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programa = programa::all();
        return view('programa.programa', compact('programa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Programa = new Programa;
        return view('programa.form', compact('Programa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Programa::create($request->input());
      return back()->with('message', ['success', "Programa creado satisfactoriamente"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $Programa=programa::find($id);
        return view('programa.ver', compact('Programa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $Programa = Programa::find($id);
        return view('programa.form', compact('Programa'));
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
        $Programa = Programa::find($id);
        $Programa->nombre = $request->nombre;
        $Programa->update();
       
       return back()->with('message', ['success', "Programa guardado satisfactoriamente"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $programa = Programa::findOrFail($id);
        $programa->delete();  
      return back()->with('message', ['success', "Programa borrado satisfactoriamente"]);
    }

    public function search(Request $request)
    {
        $id = $request->get('id');
        $Programa = Programa::find($id);

        return view('programa.ver', compact('Programa'));

    }
}
