<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    protected $table = 'noticias';

    protected $fillable = [
        'autor',
        'titulo',
        'descripcion',
    ];

    protected $hidden = [
        'id',
    ];

    public function resolveRouteBinding($id, $deleted = null)
    {
        return $this->where('id', $id)->firstOrFail();
    }
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
