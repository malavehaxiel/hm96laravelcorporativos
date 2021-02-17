<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
	use SoftDeletes;

    protected $table = 'tw_empresas_corporativos';

    protected $fillable = [
        'S_RazonSocial', 'S_RFC', 'S_Pais',
        'S_Estado', 'S_Municipio', 'S_ColoniaLocalidad',
        'S_Domicilio', 'S_CodigoPostal', 'S_UsoCFDI',
        'S_UrlRFC', 'S_UrlActaConstitutiva', 'S_Comentarios',
        'tw_corporativos_id'
    ];

    public function corporativo()
    {
        return $this->belongsTo(Corporativo::class, 'tw_corporativos_id');
    }
}