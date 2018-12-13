<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pais;
class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pais = pais::all();
        return view('pais.pais', compact('pais'));

     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Pais = new Pais;
        return view('pais.form', compact('Pais'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Pais::create($request->input());
      return back()->with('message', ['success', "Pais creado satisfactoriamente"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Pais=pais::find($id);
        return view('pais.ver', compact('Pais'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $Pais = Pais::find($id);
        return view('pais.form', compact('Pais'));
    
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
        $Pais = Pais::find($id);
        $Pais->name = $request->name;
        $Pais->update();
       
       return back()->with('message', ['success', "Pais guardado satisfactoriamente"]);
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pais = Pais::findOrFail($id);
        $pais->delete();  
      return back()->with('message', ['success', "Pais borrado satisfactoriamente"]);
    }

    public function search(Request $request)
    {
        $id = $request->get('id');
        $Pais = Pais::find($id);

        return view('pais.ver', compact('Pais'));

    }

}
