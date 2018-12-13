<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ficha;

class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ficha = Ficha::with('Programa')->get();

        return view('ficha.ficha', compact('ficha'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Ficha = new Ficha;
        return view('ficha.form', compact('Ficha'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ficha::create($request->input());
      return back()->with('message', ['success', "Ficha creada satisfactoriamente"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $Ficha=ficha::find($id);
        return view('ficha.ver', compact('Ficha'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Ficha = Ficha::find($id);
        return view('ficha.form', compact('Ficha'));
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
        $Ficha = Ficha::find($id);
        $Ficha->fechainicio = $request->fechainicio;
        $Ficha->fechafinal = $request->fechafinal;
        $Ficha->update();
       
       return back()->with('message', ['success', "Ficha guardada satisfactoriamente"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ficha = Ficha::findOrFail($id);
        $ficha->delete();  
        return back()->with('message', ['success', "Ficha borrada satisfactoriamente"]);
    }

    public function search(Request $request)
    {
        $id = $request->get('id');
        $Ficha = Ficha::find($id);

        return view('ficha.ver', compact('Ficha'));

    }
}
