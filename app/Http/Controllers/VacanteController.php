<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacante;

class VacanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacante = Vacante::with('Area', 'Ciudad', 'Empresa')->get();

        return view('vacante.vacante', compact('vacante'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Vacante = new Vacante;
        return view('vacante.form', compact('Vacante'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Vacante::create($request->input());
      return back()->with('message', ['success', "Vacante creada satisfactoriamente"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $Vacante=vacante::find($id);
        return view('vacante.ver', compact('Vacante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Vacante = Vacante::find($id);
        return view('vacante.form', compact('Vacante'));
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
        $Vacante = Vacante::find($id);
        $Vacante->nombre = $request->nombre;
        $Vacante->fechainicio = $request->fechainicio;
        $Vacante->fechafinal = $request->fechafinal;
        $Vacante->descripcion = $request->descripcion;
        $Vacante->requisito = $request->requisito;
        $Vacante->candidato = $request->candidato;
        $Vacante->rangosalarial = $request->rangosalarial;
        $Vacante->idciudad = $request->idciudad;
        $Vacante->idareas = $request->idareas;
        $Vacante->idempresas = $request->idempresas;
        $Vacante->update();
       
       return back()->with('message', ['success', "Vacante guardado satisfactoriamente"]); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vacante = Vacante::findOrFail($id);
        $vacante->delete();  
      return back()->with('message', ['success', "Vacante borrado satisfactoriamente"]);
    }
    public function search(Request $request)
    {
        $id = $request->get('id');
        $Vacante = Vacante::find($id);

        return view('vacante.ver', compact('Vacante'));

    }
}
