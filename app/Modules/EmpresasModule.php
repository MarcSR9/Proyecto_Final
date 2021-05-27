<?php

namespace App\Modules;

use DB;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Modules\UsersModule;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class EmpresasModule
{
    public function crearEmpresa($email, $nif, $empresa, $web, $descripcion, $localizacion, $telefono, $sector)
    {
        return Empresa::create([
            'email' => $email,
            'nif' => $nif,
            'empresa' => $empresa,
            'web' => $web,
            'descripcion' => $descripcion,
            'localizacion' => $localizacion,
            'telefono' => $telefono,
            'sector' => $sector,
        ]);
    }

    public function editarEmpresa(Empresa $empresa, $newdata)
    {
        $empresa->estudios = $newdata["estudios"];
        $empresa->experiencia = $newdata["experiencia"];
        $empresa->save();
        return $empresa;
    }

    public function mostrarEmpresa($empresa)
    {
        $email = auth()->user()->email;
        $empresa = DB::table('empresas')->where('email', $email)->first();
        //dd($empresa);
        return $empresa;
    }

    public function listarOfertas()
    {
        $usuarios = DB::table('ofertas')->where('deleted_at', null)->get();
        return $usuarios;
    }

}
