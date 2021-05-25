<?php

namespace App\Modules;

use DB;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Modules\ModuleUsers;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class CandidatosModule
{
    public function crearCandidato($email, $dni, $nombre, $apellidos, $fecha_nacimiento, $telefono, $telefono, $estudios, $experiencia)
    {
        return Candidato::create([
            'email' => $email,
            'dni' => $dni,
            'nombre' => $nombre,
            'apellidos' => $apellidos,
            'fecha_nacimiento' => $fecha_nacimiento,
            'telefono' => $telefono,
            'estudios' => $estudios,
            'experiencia' => $experiencia,
        ]);
    }

    public function editarCandidato(Candidato $candidato, $newdata)
    {
        $candidato->estudios = $newdata["estudios"];
        $candidato->experiencia = $newdata["experiencia"];
        $candidato->save();
        return $candidato;
    }

}
