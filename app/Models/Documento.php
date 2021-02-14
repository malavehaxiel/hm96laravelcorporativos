<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table = 'tw_documentos';
    public $timestamps = false;

    protected $fillable = [
        'S_Nombre', 'N_Obligatorio', 'S_Descripcion'
    ];

    // RELATIONS
}
