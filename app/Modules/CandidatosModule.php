<?php

namespace App\Modules;

use DB;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Candidato;
use App\Modules\UsersModule;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class CandidatosModule
{
    public function crearCandidato($email, $dni, $nombre, $apellidos, $birthday, $telefono)
    {
        return Candidato::create([
            'email' => $email,
            'dni' => $dni,
            'nombre' => $nombre,
            'apellidos' => $apellidos,
            'fecha_nacimiento' => $birthday,
            'telefono' => $telefono,
        ]);
    }

    public function actualizarDescripcion(Candidato $candidato, $newdata)
    {
        //dd($newdata);

        return Candidato::where('email', auth()->user()->email)->update([
            'descripcion' => $newdata["descripcion"],
        ]);
        //$candidato->save();
        return $candidato;
    }

    public function mostrarCandidato($candidato)
    {
        $email = auth()->user()->email;
        $candidato = DB::table('candidatos')->where('email', $email)->first();
        //dd($candidato);
        return $candidato;
    }



}
