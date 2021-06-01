<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
        use HasFactory;

    protected $table = 'candidatos';

    protected $fillable = [
        'dni',
        'nombre',
        'apellidos',
        'fecha_nacimiento',
        'telefono',
        'email',
        'estudios',
        'experiencia',
    ];

    protected $hidden = [
        'id', 'dni'
    ];

    public function resolveRouteBinding($id, $deleted = null)
    {
        return $this->where('id', $id)->firstOrFail();
    }

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
