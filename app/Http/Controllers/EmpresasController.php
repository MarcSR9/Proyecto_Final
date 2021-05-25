<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\UsersModule;
use App\Modules\EmpresasModule;
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

            return redirect()->view('home')->with('status-success', 'Tu perfil se ha creado correctamente');
        }else{
            return back()->with('status-error', 'El email del usuario ya existe en la base de datos.');
        }
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
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
