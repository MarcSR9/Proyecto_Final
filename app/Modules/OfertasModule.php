<?php

namespace App\Modules;

use DB;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class OfertasModule
{
    public function listarOfertas()
    {
        $ofertas = DB::table('ofertas')->where('empresa', $empresa)->get();
        return $ofertas;
    }

}
