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

    public function corporativos()
    {
        return $this->belongsToMany(
        	Corporativo::class, 'tw_documentos_corporativos', 
        	'tw_corporativos_id', 'tw_documentos_id'
        )->withPivot('S_ArchivoUrl');
    }
}
