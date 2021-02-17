<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Corporativo extends Model
{
	use SoftDeletes;

    protected $table = 'tw_corporativos';

    protected $fillable = [
        'S_NombreCorto', 'S_NombreCompleto', 'S_LogoUrl', 'S_DBName', 
        'S_DBUsuario', 'S_DBPassword', 'S_SystemUrl', 'D_FechaIncorporacion',
        'tw_usuarios_id'
    ];

    // SET ATTRIBUTES

    public function setSDBPasswordAttribute($value)
    {
        $this->attributes['S_DBPassword'] = bcrypt($value);
    }

    // RELATIONS

    public function user()
    {
        return $this->belongsTo(User::class, 'tw_usuarios_id', 'id');
    }

    public function contratos()
    {
        return $this->hasMany(Contrato::class, 'tw_corporativos_id');
    }

    public function contactos()
    {
        return $this->hasMany(Contacto::class, 'tw_corporativos_id');
    }

    public function empresas()
    {
        return $this->hasMany(Empresa::class, 'tw_corporativos_id');
    }

    public function documentos()
    {
        return $this->belongsToMany(
            Documento::class, 'tw_documentos_corporativos', 
            'tw_corporativos_id', 'tw_documentos_id'
        )->withPivot('S_ArchivoUrl');
    }
}
