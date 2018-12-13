<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ciudad;

class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciudad = Ciudad::with('Departamento')->get();

        return view('ciudad.ciudad', compact('ciudad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Ciudad = new Ciudad;
        return view('ciudad.form', compact('Ciudad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Ciudad::create($request->input());
      return back()->with('message', ['success', "Ciudad creada satisfactoriamente"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Ciudad=ciudad::find($id);
        return view('ciudad.ver', compact('Ciudad'));
    }    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Ciudad = Ciudad::find($id);
        return view('ciudad.form', compact('Ciudad'));
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
        $Ciudad = Ciudad::find($id);
        $Ciudad->nombre = $request->nombre;
        $Ciudad->update();
       
       return back()->with('message', ['success', "Ciudad guardada satisfactoriamente"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $ciudad = Ciudad::findOrFail($id);
        $ciudad->delete();  
      return back()->with('message', ['success', "Ciudad borrada satisfactoriamente"]);
    }

    public function search(Request $request)
    {
        $id = $request->get('id');
        $Ciudad = Ciudad::find($id);

        return view('ciudad.ver', compact('Ciudad'));

    }
}
