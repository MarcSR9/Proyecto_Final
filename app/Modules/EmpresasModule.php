<?php

namespace App\Modules;

use DB;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Empresa;
use App\Modules\EmpresasModule;
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

    public function mostrarEmpresa()
    {
        $empresa = Empresa::leftJoin('users', 'users.email', '=', 'empresas.email')
        ->select('empresas.*')
        ->where('users.email', auth()->user()->email)
        ->first();
        $empresa = Empresa::find($empresa->id);
        //dd($empresa);
        return $empresa;
    }

    public function actualizarEmpresa(Empresa $empresa, $newdata)
    {
        return Empresa::where('email', auth()->user()->email)->update([
            'empresa' => $newdata["empresa"],
            'web' => $newdata["web"],
            'descripcion' => $newdata["descripcion"],
            'localizacion' => $newdata["localizacion"],
            'telefono' => $newdata["telefono"],
            'sector' => $newdata["sector"],
        ]);
    }

    public function listarOfertas()
    {
        $usuarios = DB::table('ofertas')->where('deleted_at', null)->get();
        return $usuarios;
    }

}
