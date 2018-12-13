<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $area = area::all();
        return view('area.area', compact('area'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $Area = new Area;
        return view('area.form', compact('Area'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Area::create($request->input());
      return back()->with('message', ['success', "Area creada satisfactoriamente"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $Area=area::find($id);
        return view('area.ver', compact('Area'));
    }    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $Area = Area::find($id);
        return view('area.form', compact('Area'));
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
        $Area = Area::find($id);
        $Area->nombre = $request->nombre;
        $Area->update();
       
       return back()->with('message', ['success', "Area guardada satisfactoriamente"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $area = Area::findOrFail($id);
        $area->delete();  
      return back()->with('message', ['success', "Area borrada satisfactoriamente"]);
    }

    public function search(Request $request)
    {
        $id = $request->get('id');
        $Area = Area::find($id);

        return view('area.ver', compact('Area'));

    }
}
