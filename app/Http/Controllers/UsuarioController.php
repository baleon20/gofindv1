<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = User::with('Rol')->get();

        return view('usuario.usuario', compact('usuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $User = new User;
        return view('usuario.form', compact('User'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         User::create($request->input());
      return back()->with('message', ['success', "Usuario creado satisfactoriamente"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $User=user::find($id);
        return view('usuario.ver', compact('User'));
    }

      public function showProfile($id)
    {
        $user = User::findOrFail($id);
        return view('user.profile', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $User = User::find($id);
        return view('usuario.form', compact('User'));
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
        $User = User::find($id);
        $User->email = $request->email;
        $User->password = $request->password;
        $User->update();
       
       return back()->with('message', ['success', "Usuario guardado satisfactoriamente"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();  
      return back()->with('message', ['success', "Usuario borrado satisfactoriamente"]);
    }

    public function search(Request $request)
    {
        $id = $request->get('id');
        $User = User::find($id);

        return view('usuario.ver', compact('User'));

    }
}
