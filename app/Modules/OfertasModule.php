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
use App\Models\Inscritos;
use App\Models\User;

class OfertasModule
{
    public function listarOfertasEmpresa()
    {
        $email = auth()->user()->email;
        $empresa = DB::table('empresas')->select('empresa')->where('email', $email)->first();
        //dd($empresa);
        $ofertas = Oferta::join('empresas', 'ofertas.creador', '=', 'empresas.nif')
        ->select('ofertas.*', 'empresas.empresa')
        ->where('empresa', $empresa->empresa)->get();
        return $ofertas;
    }

    public function listarOfertas()
    {
        $ofertas = Oferta::join('empresas', 'ofertas.creador', '=', 'empresas.nif')
        ->select('ofertas.*', 'empresas.empresa')
        ->get();
        return $ofertas;
    }

    public function publicarOferta($titulo, $descripcion, $localizacion, $sueldo, $requisitos, $sector)
    {
        $email = auth()->user()->email;
        $empresa = DB::table('empresas')->select('nif')->where('email', $email)->first();
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

    public function mostrarOferta($oferta)
    {
        $oferta = Oferta::join('empresas', 'ofertas.creador', '=', 'empresas.nif')
        ->select('ofertas.*', 'empresas.empresa')
            ->where('ofertas.id', $oferta->id)->first();
            //dd($oferta);
        return $oferta;
    }

    public function verInscritos($oferta)
    {
        $inscritos = Oferta::join('inscritos', 'ofertas.id', '=', 'inscritos.oferta_id')
        ->select('ofertas.*', 'inscritos.*')
            ->where('oferta_id', $oferta->id)->first();
            //dd($oferta);
        return $inscritos;
    }

    public function inscribirse(Oferta $oferta)
    {
        return Inscritos::create([
            'oferta_id' => $oferta->id,
            'candidato_id' => auth()->user()->id,
        ]);
    }
}
