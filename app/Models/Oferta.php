<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory;

    protected $table = 'ofertas';

    protected $fillable = [
        'creador',
        'titulo',
        'descripcion',
        'localizacion',
        'sueldo',
        'requisitos',
        'sector',
    ];

    protected $hidden = [
        'id',
    ];

    public function resolveRouteBinding($id, $deleted = null)
    {
        return $this->where('id', $id)->firstOrFail();
    }
}
