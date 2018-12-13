<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoDocumento;

class TipoDocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tipodocumento = tipodocumento::all();
        return view('tipodocumento.tipodocumento', compact('tipodocumento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $TipoDocumento = new TipoDocumento;
        return view('tipodocumento.form', compact('TipoDocumento'));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         TipoDocumento::create($request->input());
      return back()->with('message', ['success', "Tipo de documento creado satisfactoriamente"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $TipoDocumento = tipodocumento::find($id);
        return view('tipodocumento.ver', compact('TipoDocumento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $TipoDocumento = TipoDocumento::find($id);
        return view('tipodocumento.form', compact('TipoDocumento'));
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
       
        $TipoDocumento = TipoDocumento::find($id);
        $TipoDocumento->nombre = $request->nombre;
        $TipoDocumento->update();
       
       return back()->with('message', ['success', "Tipo de Documento guardado satisfactoriamente"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipodocumento = TipoDocumento::findOrFail($id);
        $tipodocumento->delete();  
      return back()->with('message', ['success', "Tipo de Documento borrado satisfactoriamente"]);
    }

    public function search(Request $request)
    {
        $id = $request->get('id');
        $TipoDocumento = TipoDocumento::find($id);

        return view('tipodocumento.ver', compact('TipoDocumento'));

    }
}
