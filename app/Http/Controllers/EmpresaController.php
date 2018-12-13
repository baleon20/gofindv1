<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresa = Empresa::with('User')->get();

        return view('empresa.empresa', compact('empresa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Empresa = new Empresa;
        return view('empresa.form', compact('Empresa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Empresa::create($request->input());
      return back()->with('message', ['success', "Empresa creada satisfactoriamente"]);
     }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Empresa=empresa::find($id);
        return view('empresa.ver', compact('Empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Empresa = Empresa::find($id);
        return view('empresa.form', compact('Empresa'));
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
        $Empresa = Empresa::find($id);
        $Empresa->nombre = $request->nombre;
        $Empresa->telefono = $request->telefono;
        $Empresa->direccion = $request->direccion;
        $Empresa->NIT = $request->NIT;
        $Empresa->update();
       
       return back()->with('message', ['success', "Empresa guardada satisfactoriamente"]);  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empresa = Empresa::findOrFail($id);
        $empresa->delete();  
      return back()->with('message', ['success', "Empresa borrada satisfactoriamente"]);
    }

    public function search(Request $request)
    {
        $id = $request->get('id');
        $Empresa = Empresa::find($id);

        return view('empresa.ver', compact('Empresa'));

    }
}
