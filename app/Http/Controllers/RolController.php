<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rol;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $rol = rol::all();
        return view('rol.rol', compact('rol'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $Rol= new Rol;
        return view('rol.form', compact('Rol'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Rol::create($request->input());
      return back()->with('message', ['success', "Rol creado satisfactoriamente"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Rol=rol::find($id);
        return view('rol.ver', compact('Rol'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Rol = Rol::find($id);
        return view('rol.form', compact('Rol'));
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
        $Rol = Rol::find($id);
        $Rol->nombre = $request->nombre;
        $Rol->update();
       
       return back()->with('message', ['success', "Rol guardado satisfactoriamente"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rol = Rol::findOrFail($id);
        $rol->delete();  
      return back()->with('message', ['success', "Rol borrado satisfactoriamente"]);
    }

    public function search(Request $request)
    {
        $id = $request->get('id');
        $Rol = Rol::find($id);

        return view('rol.ver', compact('Rol'));

    }
}
