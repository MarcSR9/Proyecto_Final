<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidatosController extends Controller
{
    protected function nuevoCandidato()
    {
        return view('candidato.crearCandidato');
    }

    protected function crearCandidato(Request $request)
    {
        $data = $request->post();
        $usermodule = new UsersModule();
        $candidatosmodule = new CandidatosModule();
        $tipo = 'Candidato';

        $exists = $usermodule->getUserByEmail($data['email']);
        if(is_null($exists)){
            $response = $usersmodule->crearUsuario($data['email'], $data['password'], $tipo);

            $response = $candidatosmodule->crearCandidato($data['email'], $data['dni'], $data['nombre'], $data['apellidos'], $data['fecha_nacimiento'], $data['telefono'], $data['estudios'], $data['experiencia']);

            return redirect()->route('usuarios.lista')->with('status-success', 'Tu perfil se ha creado correctamente');
        }else{
            return back()->with('status-error', 'El email del usuario ya existe en la base de datos.');
        }
    }

    public function show(User $usuario)
    {
        return view('candidato.show', ['candidato' => $candidato]);
    }

    public function edit(User $usuario)
    {
        return view('candidato.edit', [
            'usuario' => $usuario
        ]);
    }

    public function update(Request $request, User $usuario)
    {
        User::update($request->validated());

        return redirect()->route('candidato.show', $usuario)
    }

    public function destroy(User $usuario)
    {
        //
    }
}
