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

class ModuleUsers
{
    public function crearUsuario($email, $password, $tipo)
    {
        return User::create([
            'email' => $email,
            'password' => Hash::make($password),
            'tipo' => $tipo
        ]);
    }

    public function getUserByEmail($email){
        return User::where('email', $email)->first();
    }
}
