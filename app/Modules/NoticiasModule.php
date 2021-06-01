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
        $noticias = Oferta::join('empresas', 'noticias.creador', '=', 'empresas.nif')
        ->select('noticias.*', 'empresas.empresa')
        ->where('empresa', $empresa->empresa)->get();
        return $noticias;
    }

    public function publicarNoticia($titulo, $descripcion)
    {
        $email = auth()->user()->email;
        $empresa = DB::table('nif')->where('email', $email)->first();
        $autor = $empresa->empresa;
        //dd($email);

        return Oferta::create([
            'autor' => $autor,
            'titulo' => $titulo,
            'descripcion' => $descripcion,
        ]);
    }

}
