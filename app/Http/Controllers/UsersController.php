<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $usuarios = DB::table('users')->where('deleted_at', null)->get();
        return $usuarios;
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        User::create($request->validated());
    }

    public function show(User $usuario)
    {
        return view('usuarios.show', ['usuario' => $usuario]);
    }

    public function edit(User $usuario)
    {
        return view('usuarios.edit', [
            'usuario' => $usuario
        ]);
    }

    public function update(Request $request, User $usuario)
    {
        User::update($request->validated());

        return redirect()->route('usuarios.show', $usuario)
    }

    public function destroy(User $usuario)
    {
        //
    }
}
