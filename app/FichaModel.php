<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FichaModel extends Model
{
    protected $table = 'ficha';

    protected $fillable = [
        'id',
        'codigo_matricula',
        'nombre_completo',
        'facultad',
        'escuela',
        'semestre',
        'segunda_carrera',
        'fecha_nacimiento',
        'sexo',
        'dni',
        'edad',
        'created_at',
        'updated_at'
    ];
}
