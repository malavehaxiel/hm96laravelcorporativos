<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $table = 'tw_contratos_corporativos';
    public $timestamps = false;

    protected $fillable = [
        'D_FechaInicio', 'D_FechaFin', 'S_URLContrato', 'tw_corporativos_id'
    ];
}
