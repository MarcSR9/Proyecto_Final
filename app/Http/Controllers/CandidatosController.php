<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Candidato;
use App\Modules\UsersModule;
use App\Modules\CandidatosModule;

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
            $response = $usermodule->crearUsuario($data['email'], $data['password'], $tipo);

            $response = $candidatosmodule->crearCandidato($data['email'], $data['dni'], $data['nombre'], $data['apellidos'], $data['birthday'], $data['telefono'], $data['estudios'], $data['experiencia']);

            return redirect()->route('')->with('status-success', 'Tu perfil se ha creado correctamente');
        }else{
            return back()->with('status-error', 'El email del usuario ya existe en la base de datos.');
        }
    }

    public function mostrarCandidato(Candidato $candidato)
    {
        $candidatosModule = new CandidatosModule();
        $candidato = $candidatosModule->mostrarCandidato($candidato);
        //dd($candidato);
        return view('candidato.perfilCandidato', [
            'candidato' => $candidato
        ]);
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

        return redirect()->route('candidato.show', $usuario);
    }

    public function destroy(User $usuario)
    {
        //
    }
}
