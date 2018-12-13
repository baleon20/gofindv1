<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = Departamento::with('Pais')->get();

        return view('departamento.departamento', compact('departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Departamento = new Departamento;
        return view('departamento.form', compact('Departamento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Departamento::create($request->input());
      return back()->with('message', ['success', "Departamento creado satisfactoriamente"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $Departamento=departamento::find($id);
        return view('departamento.ver', compact('Departamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $Departamento = Departamento::find($id);
        return view('departamento.form', compact('Departamento'));
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
        $Departamento = Departamento::find($id);
        $Departamento->nombre = $request->nombre;
        $Departamento->update();
       
       return back()->with('message', ['success', "Departamento guardado satisfactoriamente"]);  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $departamento = Departamento::findOrFail($id);
        $departamento->delete();  
      return back()->with('message', ['success', "Departamento borrado satisfactoriamente"]);
    }

    public function search(Request $request)
    {
        $id = $request->get('id');
        $Departamento = Departamento::find($id);

        return view('departamento.ver', compact('Departamento'));

    }
}
