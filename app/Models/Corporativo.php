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
}
