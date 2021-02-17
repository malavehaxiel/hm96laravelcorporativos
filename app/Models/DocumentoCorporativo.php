<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentoCorporativo extends Model
{
	protected $table = 'tw_documentos_corporativos';
    public $timestamps = false;

    protected $fillable = [
        'tw_corporativos_id', 'tw_documentos_id', 'S_ArchivoUrl'
    ];

    public function corporativo()
    {
        return $this->belongsTo(Corporativo::class, 'tw_corporativos_id');
    }

    public function documento()
    {
        return $this->belongsTo(Documento::class, 'tw_documentos_id');
    }
}
