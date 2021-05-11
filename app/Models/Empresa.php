<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $table = 'empresas';

    protected $fillable = [
        'nif',
        'empresa',
        'pais',
        'web',
        'descipcion',
        'localizacion',
        'telefono',
        'email',
        'sector',
    ];

    protected $hidden = [
        'id',
        'password',
    ];

    public function resolveRouteBinding($id, $deleted = null)
    {
        return $this->where('id', $id)->firstOrFail();
    }
}
