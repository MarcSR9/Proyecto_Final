<?php

namespace App\Modules;

use DB;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use App\Models\Oferta;

class NoticiasModule
{
    public function listarNoticias()
    {
        $email = auth()->user()->email;
        $empresa = DB::table('empresas')->select('empresa')->where('email', $email)->first();
        //dd($empresa);
        $ofertas = Oferta::join('empresas', 'ofertas.creador', '=', 'empresas.nif')
        ->select('ofertas.*', 'empresas.empresa')
        ->where('empresa', $empresa->empresa)->get();
        return $ofertas;
    }

    public function getEmpresa($email)
    {
        $empresa = DB::table('empresas')->select('empresa')->where('email', $email)->get();
        return $empresa;
    }

    public function publicarNoticia($titulo, $descripcion, $localizacion, $sueldo, $requisitos, $sector)
    {
        $email = auth()->user()->email;
        $empresa = DB::table('nif')->where('email', $email)->first();
        $creador = $empresa->empresa;
        //dd($email);

        return Oferta::create([
            'creador' => $creador,
            'titulo' => $titulo,
            'descripcion' => $descripcion,
            'localizacion' => $localizacion,
            'sueldo' => $sueldo,
            'requisitos' => $requisitos,
            'sector' => $sector,
        ]);
    }

}
