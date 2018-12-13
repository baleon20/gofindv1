<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postulacion;

class PostulacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postulacion = Postulacion::with('Egresado', 'Vacante')->get();

        return view('postulacion.postulacion', compact('postulacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $Postulacion = new Postulacion;
        return view('postulacion.form', compact('Postulacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Postulacion::create($request->input());
      return back()->with('message', ['success', "Postulacion creada satisfactoriamente"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Postulacion=Postulacion::find($id);
        return view('postulacion.ver', compact('Postulacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Postulacion = Postulacion::find($id);
        return view('postulacion.form', compact('Postulacion'));
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
        $Postulacion = Postulacion::find($id);
        $Postulacion->fechapostulacion = $request->fechapostulacion;
        $Postulacion->update();
       
       return back()->with('message', ['success', "Postulacion guardada satisfactoriamente"]);  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $postulacion = Postulacion::findOrFail($id);
        $postulacion->delete();  
      return back()->with('message', ['success', "Postulacion borrada satisfactoriamente"]);    }

      public function search(Request $request)
    {
        $id = $request->get('id');
        $Postulacion = Postulacion::find($id);

        return view('postulacion.ver', compact('Postulacion'));

    }
}
