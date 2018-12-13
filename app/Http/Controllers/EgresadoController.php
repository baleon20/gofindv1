<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Egresado;

class EgresadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $egresado = Egresado::with('TipoDocumento', 'Usuario')->get();

        return view('egresado.egresado', compact('egresado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Egresado = new Egresado;
        return view('egresado.form', compact('Egresado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Egresado::create($request->input());
      return back()->with('message', ['success', "Egresado creado satisfactoriamente"]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Egresado= egresado::find($id);
        return view('egresado.ver', compact('Egresado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Egresado = Egresado::find($id);
        return view('egresado.form', compact('Egresado'));
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
        $Egresado = Egresado::find($id);
        $Egresado->nombre = $request->nombre;
        $Egresado->apellido = $request->apellido;
        $Egresado->telefono = $request->telefono;
        $Egresado->direccion = $request->direccion;
        $Egresado->email = $request->email;
        $Egresado->fechanacimiento = $request->fechanacimiento;
        $Egresado->sexo = $request->sexo;
        $Egresado->estrato = $request->estrato;
        $Egresado->update();
       
       return back()->with('message', ['success', "Egresado guardado satisfactoriamente"]);  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Egresado = Egresado::findOrFail($id);
        $Egresado->delete();  
      return back()->with('message', ['success', "Egresado borrado satisfactoriamente"]);
    }

    public function search(Request $request)
    {
        $id = $request->get('id');
        $Egresado = Egresado::find($id);

        return view('egresado.ver', compact('Egresado'));

    }
}
