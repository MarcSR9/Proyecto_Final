<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\UsersModule;
use App\Modules\EmpresasModule;
use App\Modules\OfertasModule;
use App\Modules\NoticiasModule;
use App\Models\Empresa;
use App\Models\User;

class EmpresasController extends Controller
{
    protected function nuevaEmpresa()
    {
        return view('empresa.crearEmpresa');
    }

    protected function crearEmpresa(Request $request)
    {
        $data = $request->post();
        $userModule = new UsersModule();
        $empresasModule = new EmpresasModule();
        $tipo = 'Empresa';

        $exists = $userModule->getUserByEmail($data['email']);
        if(is_null($exists)){
            $response = $userModule->crearUsuario($data['email'], $data['password'], $tipo);

            $response = $empresasModule->crearEmpresa($data['email'], $data['nif'], $data['empresa'], $data['web'], $data['descripcion'],$data['localizacion'], $data['telefono'], $data['sector']);

            return redirect()->route('perfilEmpresa')->with('status-success', 'Tu perfil se ha creado correctamente');
        }else{
            return back()->with('status-error', 'El email del usuario ya existe en la base de datos.');
        }
    }

    public function mostrarEmpresa()
    {
        $empresasModule = new EmpresasModule();
        $empresa = $empresasModule->mostrarEmpresa();
        //dd($empresa);
        return view('empresa.perfilEmpresa', [
            'empresa' => $empresa
        ]);
    }

    protected function editarPerfilEmpresa(Empresa $empresa)
    {
        $empresasModule = new EmpresasModule();
        $empresa = $empresasModule->mostrarEmpresa();

        return view('empresa.editarPerfilEmpresa', [
            'empresa' => $empresa
        ]);
    }

    protected function actualizarPerfilEmpresa(Empresa $empresa, Request $request)
    {
        $empresasModule = new EmpresasModule();
        $empresasModule->actualizarEmpresa($empresa, $request->post());
        return redirect()->route('perfilEmpresa')->with('status-success', 'El perfil de la empresa se ha actualizado correctamente');
    }

    protected function listarOfertasEmpresa()
    {
        $ofertasModule = new OfertasModule();
        $ofertas = $ofertasModule->listarOfertasEmpresa();
        return view('empresa.ofertasEmpresa', [
            'ofertas' => $ofertas
        ]);
    }

    protected function nuevaOferta()
    {
        return view('empresa.crearOferta');
    }

    public function publicarOferta(Request $request)
    {
        $data = $request->post();
        $ofertasModule = new OfertasModule();
        $ofertas = $ofertasModule->publicarOferta($data['titulo'], $data['descripcion'], $data['localizacion'], $data['sueldo'],$data['requisitos'], $data['sector']);
        return redirect()->route('listarOfertasEmpresa')->with('status-success', 'La oferta se ha publicado correctamente');
    }

    protected function nuevaNoticia()
    {
        return view('empresa.crearNoticia');
    }

    public function publicarNoticia(Request $request)
    {
        $data = $request->post();
        $noticiasModule = new NoticiasModule();
        $noticias = $noticiasModule->publicarNoticia($data['titulo'], $data['descripcion'], $data['localizacion'], $data['sueldo'],$data['requisitos'], $data['sector']);
        return redirect()->route('listarNoticias')->with('status-success', 'La noticia se ha publicado correctamente');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
