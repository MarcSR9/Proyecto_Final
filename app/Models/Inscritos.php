<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscritos extends Model
{
    use HasFactory;

    protected $table = 'inscritos';

    protected $fillable = [
        'oferta_id',
        'candidato_id',
    ];
}
