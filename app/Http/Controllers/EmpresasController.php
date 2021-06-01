<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\UsersModule;
use App\Modules\EmpresasModule;
use App\Modules\OfertasModule;
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

    public function mostrarEmpresa(Empresa $empresa)
    {
        $empresasModule = new EmpresasModule();
        $empresa = $empresasModule->mostrarEmpresa($empresa);
        //dd($empresa);
        return view('empresa.perfilEmpresa', [
            'empresa' => $empresa
        ]);
    }

    protected function listarOfertas()
    {
        $ofertasModule = new OfertasModule();
        $ofertas = $ofertasModule->listarOfertas();
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
        return redirect()->route('listarOfertas')->with('status-success', 'La oferta se ha publicado correctamente');
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
