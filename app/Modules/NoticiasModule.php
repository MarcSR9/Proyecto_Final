<?php

namespace App\Modules;

use DB;

use App\Http\Controllers\EmpresasController;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use App\Models\Noticia;

class NoticiasModule
{
    public function listarNoticiasEmpresa()
    {
        $email = auth()->user()->email;
        $empresa = DB::table('empresas')->select('empresa')->where('email', $email)->first();
        //dd($empresa);
        $noticias = Noticia::join('empresas', 'noticias.creador', '=', 'empresas.nif')
        ->select('noticias.*', 'empresas.empresa')
        ->where('empresa', $empresa->empresa)->get();
        return $noticias;
    }

    public function publicarNoticia($titulo, $descripcion)
    {
        $email = auth()->user()->email;
        $empresa = DB::table('empresas')->where('email', $email)->first();
        $autor = $empresa->empresa;
        //dd($email);

        return Noticia::create([
            'autor' => $autor,
            'titulo' => $titulo,
            'descripcion' => $descripcion,
        ]);
    }

    public function listarNoticias()
    {
        $noticias = Noticia::join('empresas', 'noticias.autor', '=', 'empresas.nif')
        ->select('noticias.*', 'empresas.empresa')->take(4)
        ->get();
        return $noticias;
    }

}
