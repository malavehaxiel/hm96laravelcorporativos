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
}
