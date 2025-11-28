<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = [
        'nombre',
        'apellidos',
        'email',
        'f_nac',
    ];

    protected $casts = [
        'f_nac' => 'date',
    ];
}
