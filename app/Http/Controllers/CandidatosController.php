<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Candidato;
use App\Models\Oferta;
use App\Models\Inscritos;
use App\Modules\UsersModule;
use App\Modules\CandidatosModule;
use App\Modules\OfertasModule;
use App\Modules\NoticiasModule;
use App\Models\Noticia;

class CandidatosController extends Controller
{
    protected function nuevoCandidato()
    {
        return view('candidato.crearCandidato');
    }

    protected function crearCandidato(Request $request)
    {
        $data = $request->post();
        $userModule = new UsersModule();
        $candidatosModule = new CandidatosModule();
        $tipo = 'Candidato';

        $exists = $userModule->getUserByEmail($data['email']);
        if(is_null($exists)){
            $response = $userModule->crearUsuario($data['email'], $data['password'], $tipo);

            $response = $candidatosModule->crearCandidato($data['email'], $data['dni'], $data['nombre'], $data['apellidos'], $data['birthday'], $data['telefono']);

            return redirect()->route('login')->with('status-success', 'Tu perfil se ha creado correctamente');
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

    public function getExperiencia(Candidato $candidato)
    {
        $candidatosModule = new CandidatosModule();
        $experiencia = $candidatosModule->getExperiencia($experiencia);
        return $experiencia;
    }

    public function editarDescripcion(Candidato $candidato)
    {
        $candidatosModule = new CandidatosModule();
        $candidato = $candidatosModule->mostrarCandidato($candidato);
        return view('candidato.editarDescripcion', [
            'candidato' => $candidato
        ]);
    }

    public function actualizarDescripcion(Candidato $candidato, Request $request)
    {
        $candidatosModule = new CandidatosModule();
        $candidatosModule->actualizarDescripcion($candidato, $request->post());
        return redirect()->route('perfilCandidato')->with('status-success', 'Tu perfil se ha actualizado correctamente');
    }

    protected function listarOfertas()
    {
        $ofertasModule = new OfertasModule();
        $ofertas = $ofertasModule->listarOfertas();
        //dd($ofertas[0]);
        return view('candidato.listaOfertas', [
            'ofertas' => $ofertas
        ]);
    }

    public function mostrarOferta(Oferta $oferta)
    {
        $ofertasModule = new OfertasModule();
        $oferta = $ofertasModule->mostrarOferta($oferta);
        $inscritos = $ofertasModule->verInscritos($oferta);
        //dd($inscritos);
        return view('empresa.verOferta', [
            'oferta' => $oferta,
            'inscritos' => $inscritos
        ]);
    }

    public function inscribirse(Oferta $oferta)
    {
        Inscritos::create([
            'oferta_id' => $oferta->id,
            'candidato_id' => auth()->user()->id,
        ]);
        return back();
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

    protected function listarNoticias()
    {
        $noticiasModule = new NoticiasModule();
        $noticias = $noticiasModule->listarNoticias();
        return view('home', [
            'noticias' => $noticias
        ]);
    }

}
